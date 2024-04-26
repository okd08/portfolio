"use strict";

function scrollToTop() {
    const scrollStep = -window.scrollY / (500 / 50);
    const scrollInterval = setInterval(function () {
        if (window.scrollY !== 0) {
            window.scrollBy(0, scrollStep);
        } else {
            clearInterval(scrollInterval);
        }
    }, 15);
}

document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('nav a');
    
        links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
    
            if (targetSection) {
            const offsetTop = targetSection.getBoundingClientRect().top + window.pageYOffset;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
            }
        });
        });
    });

// //テキストのカウントアップ+バーの設定
// var bar = new ProgressBar.Line(splash_text, {
//     //id名を指定
//     easing: "easeInOut", //アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
//     duration: 1000, //時間指定(1000＝1秒)
//     strokeWidth: 0.2, //進捗ゲージの太さ
//     color: "#fff", //進捗ゲージのカラー
//     trailWidth: 0.2, //ゲージベースの線の太さ
//     trailColor: "#ffd341", //ゲージベースの線のカラー
//     text: {
//         //テキストの形状を直接指定
//         style: {
//             //天地中央に配置
//             position: "absolute",
//             left: "50%",
//             top: "50%",
//             padding: "0",
//             margin: "-30px 0 0 0", //バーより上に配置
//             transform: "translate(-50%,-50%)",
//             "font-size": "1.3rem",
//             color: "#fff",
//         },
//         autoStyleContainer: false, //自動付与のスタイルを切る
//     },
//     step: function (state, bar) {
//         bar.setText(Math.round(bar.value() * 100) + " %"); //テキストの数値
//     },
// });

// //アニメーションスタート
// bar.animate(1.0, function () {
//     //バーを描画する割合を指定します 1.0 なら100%まで描画します
//     $("#splash").delay(500).fadeOut(800); //アニメーションが終わったら#splashエリアをフェードアウト
// });


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
