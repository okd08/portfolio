"use strict";

// スクロール
function scrollToTop() {
    const scrollStep = -window.scrollY / (500 / 35);
    const scrollInterval = setInterval(function () {
        if (window.scrollY !== 0) {
            window.scrollBy(0, scrollStep);
        } else {
            clearInterval(scrollInterval);
        }
    }, 15);
}

$('#page-link a[href*="#"]').click(function () {
    var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
    var pos = $(elmHash).offset().top-70;//idの上部の距離からHeaderの高さを引いた値を取得
    $('body,html').animate({scrollTop: pos}, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
    return false;
});


// //テキストのカウントアップ+バーの設定
var bar = new ProgressBar.Line(splash_text, {
    //id名を指定
    easing: "easeInOut", //アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
    duration: 1000, //時間指定(1000＝1秒)
    strokeWidth: 0.2, //進捗ゲージの太さ
    color: "#fff", //進捗ゲージのカラー
    trailWidth: 0.2, //ゲージベースの線の太さ
    trailColor: "#ffe45e", //ゲージベースの線のカラー
    text: {
        //テキストの形状を直接指定
        style: {
            //天地中央に配置
            position: "absolute",
            left: "50%",
            top: "50%",
            padding: "0",
            margin: "-30px 0 0 0", //バーより上に配置
            transform: "translate(-50%,-50%)",
            "font-size": "1.3rem",
            color: "#fff",
        },
        autoStyleContainer: false, //自動付与のスタイルを切る
    },
    step: function (state, bar) {
        bar.setText(Math.round(bar.value() * 100) + " %"); //テキストの数値
    },
});
// //アニメーションスタート
bar.animate(1.0, function () {
    //バーを描画する割合を指定します 1.0 なら100%まで描画します
    $("#splash").delay(500).fadeOut(800); //アニメーションが終わったら#splashエリアをフェードアウト
});


// SKILLとABOUTセクションをスクロール時にフェードインさせる
document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll("section");

    const fadeInSections = () => {
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (sectionTop < windowHeight) {
                section.classList.add("fade-in");
            }
        });
    };

    fadeInSections();

    window.addEventListener("scroll", fadeInSections);
});
document.addEventListener("DOMContentLoaded", function() {
    const aboutSection = document.getElementById("ABOUT");

    const fadeInAboutSection = () => {
        const sectionTop = aboutSection.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (sectionTop < windowHeight) {
            aboutSection.classList.add("fade-in");
        }
    };

    fadeInAboutSection();

    window.addEventListener("scroll", fadeInAboutSection);
});


// 背景パーティクル
particlesJS("particles-js",{
    "particles":{
    "number":{
        "value":70,//この数値を変更すると幾何学模様の数が増減できる
        "density":{
        "enable":true,
        "value_area":800
        }
    },
    "color":{
        "value":"#fff700"//色
    },
    "shape":{
        "type":"polygon",//形状はpolygonを指定
        "stroke":{
        "width":0,
        },
    "polygon":{
    "nb_sides":3//多角形の角の数
    },
    "image":{
    "width":190,
    "height":100
    }
    },
    "opacity":{
    "value":0.664994832269074,
    "random":false,
    "anim":{
        "enable":true,
        "speed":2.2722661797524872,
        "opacity_min":0.08115236356258881,
        "sync":false
    }
    },
    "size":{
        "value":5,
        "random":true,
        "anim":{
        "enable":false,
        "speed":40,
        "size_min":0.1,
        "sync":false
        }
    },
    "line_linked":{
        "enable":true,
        "distance":150,
        "color":"#fff700",
        "opacity":0.6,
        "width":3
    },
    "move":{
        "enable":true,
        "speed":6,//この数値を小さくするとゆっくりな動きになる
        "direction":"none",//方向指定なし
        "random":false,//動きはランダムにしない
        "straight":false,//動きをとどめない
        "out_mode":"out",//画面の外に出るように描写
        "bounce":false,//跳ね返りなし
        "attract":{
        "enable":false,
        "rotateX":600,
        "rotateY":961.4383117143238
        }
    }
    },
    "interactivity":{
    "detect_on":"canvas",
    "events":{
        "onhover":{
        "enable":false,
        "mode":"repulse"
        },
    "onclick":{
    "enable":false
    },
    "resize":true
    }
    },
    "retina_detect":true
});