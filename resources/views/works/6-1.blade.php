<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ポートフォリオサイト</title>

  <style>
    body {
      margin: 0;
      font-family: "游ゴシック体","YuGothic";
    }
    body p {
      margin: 0;
    }

    /* ～～～～～～～～～～～～～～～～～～ヘッダーのスタイル～～～～～～～～～～～～～～～～～～ */
    header {
      height: 70px;
      background-color: white;
      border-bottom: 2px solid rgb(224, 67, 67);
      /* ヘッダーを上に固定 */
      position: fixed;
      top: 0;
      width: 100%;
    }
    #header-ul {
      /* なんかulにmarginがあるのをリセット */
      margin: 0;
      list-style: none;
      /* ulの中の要素を横並びに */
      display: flex;
      padding: 10px 0 0 5px;
    }
    #header-ul li {
      margin: 0 15px;
      /* liの中の要素(画像含む)をそれぞれ中央寄せ */
      text-align: center;
    }
    #header-ul img {
      height: 25px;
    }
    /* 画像と文字を両方リンク(a)にしてあるので、テキストだけにclass名をつけてある */
    .header-text {
      font-size: 12px;
      /* 下線消し */
      text-decoration: none;
      border-bottom: dotted 3px rgb(90, 90, 90);
      color: rgb(90, 90, 90);
      /* aはインライン要素なので、ブロック要素に変えて画像の横→下に表示 */
      display: block;
      /* ちょっと上に寄せる */
      margin: -5px 0 0 0;
    }

    /* ～～～～～～～～～～～～～～～～～～メインのスタイル～～～～～～～～～～～～～～～～～～ */
    .glay {
      color: rgb(90, 90, 90);
    }
    .red {
      color: rgb(224, 67, 67);
    }

    /* ～～～～～～～～～～～～～～～～～～ネームのスタイル～～～～～～～～～～～～～～～～～～ */
    #name {
      background-color: rgb(251, 250, 250);
      height: 670px;
    }
    h1 {
      /* 最初からついてるmarginをリセット */
      margin: 0;
      padding: 120px 0 0 50px ;
      font-size: 85px;
      letter-spacing: 5px;
      /* 行間を狭く */
      line-height: 1;
    }
    #name p {
      padding: 10px 0 0 50px ;
      font-size: 25px;
      letter-spacing: 5px;
      /* 行間を少し大きく */
      line-height: 1.5;
    }
    /* imgにdisplayをつけるためにdivでブロック要素にして */
    .fuyuko {
      /* flexをつけて右寄せ */
      display: flex;
      justify-content: flex-end;
    }
    #name img {
      height: 600px;
      margin-top: -304px;
    }

    /* ～～～～～～～～～～～～～～～～～～アバウトのスタイル～～～～～～～～～～～～～～～～～～ */
    #about {
      padding: 50px 0;
      background-color: rgb(224, 67, 67);
      /* Aboutの中身全部中央寄せ */
      text-align: center;
      color: rgb(255, 253, 253);
    }
    h2 {
      /* marginリセット+下の余白を少なく */
      margin: 0 0 -8px 0;
      text-align: center;
      font-size: 30px;
      /* 全部のh2を太字じゃなくする */
      font-weight: normal;
      letter-spacing: 5px;
    }
    .v {
      font-size: 30px;
      color: rgb(90, 90, 90);
    }
    .about-p1 {
      font-size: 16px;
      /* 最大幅を設定→再度その中で中央寄せ */
      width: 600px;
      margin: auto;
    }
    .about-p2 {
      font-size: 12px;
      /* 最大幅を設定→再度その中で中央寄せ */
      width: 470px;
      margin: auto;
    }
    .about-p3{
      font-size: 11px;
      margin-bottom: 10px;
    }
    #about-icon-ul {
      /* ulに最初からついてるpaddingをリセット */
      padding-left: 0;
      list-style: none;
      /* 横に並べて中央寄せ */
      display: flex;
      justify-content: center;
    }
    #about-icon-ul img {
      height: 40px;
      margin: 0 10px;
    }

    /* ～～～～～～～～～～～～～～～～～～プロジェクトのスタイル～～～～～～～～～～～～～～～～～～ */
    #projects {
      padding: 50px 0;
    }
    .tensen {
      text-align: center;
      color: rgb(90, 90, 90);
    }
    #projects-ul {
      /* ulに最初からついてるpaddingをリセット */
      padding-left: 0;
      list-style: none;
      text-align: center;
      /* 横並びにして要素同士と左右のスペースに同じ間隔を取る */
      display: flex;
      justify-content: space-evenly;
    }
    .projects-img {
      /* Twitterの2つの画像を横並びに */
      display: flex;
      border: 2px solid rgb(224, 67, 67);
      padding: 20px 30px;
    }
    .twitter-img1 {
      height: 200px;
    }
    .twitter-img2 {
      height: 300px;
    }
    .projects-text {
      color: rgb(90, 90, 90);
    }
    h3 {
      /* 最初からついてるmarginをリセット */
      margin: 0;
      margin-top: 20px;
      letter-spacing: 2px;
    }
    .sen {
      color: rgb(199, 199, 199);
      font-size: 20px;
      font-weight: bold;
    }
    .projects-p1 {
      font-size: 14px;
    }
    .projects-p2 {
      font-size: 14px;
      margin: 15px 0 5px 0;
      font-weight: bold;
    }
    .projects-p3 {
      font-size: 12px;
      margin-bottom: 15px;
    }
    #projects-link-ul {
      /* ulに最初からついてるpaddingをリセット */
      padding-left: 0;
      list-style: none;
      text-align: center;
      display: flex;
      justify-content: center;
    }
    #projects-link-ul li {
      margin: 0 10px;
      padding: 8px 10px;
      background-color: rgb(224, 67, 67);
    }
    #projects-link-ul a {
      text-decoration: none;
      color: rgb(255, 255, 255);
      font-weight: bold;
    }

    /* ～～～～～～～～～～～～～～～～～～コンタクトのスタイル～～～～～～～～～～～～～～～～～～ */
    #contact {
      padding: 50px 0;
    }
    #contact-ul {
      /* ulに最初からついてるpaddingをリセット */
      padding-left: 0;
      list-style: none;
      /* 横並びにして要素同士と左右のスペースに同じ間隔を取る */
      display: flex;
      justify-content: space-evenly;
    }
    #contact-ul li {
      width: 340px;
      text-align: center;
      background-color: rgb(241, 247, 246);
      border-bottom: 5px solid rgb(224, 67, 67);
      padding: 20px 0;
    }
    .contact-img {
      height: 40px;
      margin-bottom: 20px;
    }
    .contact-text1 {
      color: rgb(90, 90, 90);
      letter-spacing: 2px;
    }
    .contact-text2 {
      color: rgb(224, 67, 67);
      letter-spacing: 2px;
      border-bottom: 3px dotted rgb(224, 67, 67);
      /* borderの幅を調整して中央寄せ */
      width: 210px;
      margin: auto;
    }

    /* ～～～～～～～～～～～～～～～～～～フッターのスタイル～～～～～～～～～～～～～～～～～～ */
    footer {
      height: 40px;
      /* 親要素と同じ高さにして上下中央寄せ */
      line-height: 40px;
      text-align: center;
      background-color: rgb(241, 247, 246);
      font-size: 10px;
    }









    /* ～～～～～～～～～～～～～～～～～～スマホ用のスタイル～～～～～～～～～～～～～～～～～～ */
    @media screen and (max-width: 767px) {

      body {
        min-width: 100%;
      }

      /* ～～～～～～～～～～～～～～～～～～ヘッダーのスタイル～～～～～～～～～～～～～～～～～～ */
      header {
        height: 50px;
      }
      #header-ul {
        /* ul全体を一度右寄せに */
        justify-content: flex-end;
        padding: 7px 0 0 0;
      }
      /* header-ulの中にある最初のliだけ */
      #header-ul li:first-child {
        /* 左寄せ */
        margin-right: auto;
      }
      #header-ul img {
        height: 25px;
      }
      /* 画像と文字を両方リンク(a)にしてあるので、テキストだけにclass名をつけてある */
      .header-text {
        font-size: 12px;
        border-bottom: none;
        /* 更にちょっと上に寄せる */
        margin: -10px 0 0 0;
      }

      /* ～～～～～～～～～～～～～～～～～～ネームのスタイル～～～～～～～～～～～～～～～～～～ */
      #name {
        height: 660px;
        text-align: center;
      }
      h1 {
        padding: 70px 0 0 0;
        font-size: 55px;
      }
      #name p {
        padding: 10px 0 0 0;
        font-size: 17px;
      }
      .fuyuko {
        /* 中央寄せ */
        display: flex;
        justify-content: center;
      }
      #name img {
        height: 400px;
        margin-top: 20px;
        margin-left: 0;
        
      }
      
      /* ～～～～～～～～～～～～～～～～～～アバウトのスタイル～～～～～～～～～～～～～～～～～～ */
      #about {
        padding: 80px 0;
      }
      h2 {
        font-size: 20px;
        letter-spacing: 3px;
      }
      .v {
        font-size: 25px;
      }
      .about-p1 {
        max-width: 90%;
        font-size: 13px;
        letter-spacing: 2px;
        margin-top: 20px;
      }
      .about-p2 {
        max-width: 80%;
        font-size: 9px;
        letter-spacing: 2px;
        margin-top: -10px;
      }
      .about-p3{
        font-size: 10px;
        letter-spacing: 1px;
        margin-top: -10px;
      }
      #about-icon-ul img {
        height: 35px;
      }
      
      /* ～～～～～～～～～～～～～～～～～～プロジェクトのスタイル～～～～～～～～～～～～～～～～～～ */
      #projects-ul {
        /* 縦並びにして */
        display: block;
        /* 横幅を設定して中央寄せ */
        max-width: 330px;
        margin: auto;
      }
      #projects-ul li {
        margin-top: 50px;
      }
      .projects-img {
        padding: 30px 20px;
      }
      .twitter-img1 {
        height: 150px;
      }
      .twitter-img2 {
        height: 250px;
      }
      h3 {
        font-size: 18px;
      }
      .sen {
        font-size: 18px;
      }
      .projects-p1 {
        font-size: 12px;
        letter-spacing: 1px;
      }
      .projects-p2 {
        font-size: 13px;
        margin: 15px 0 3px 0;
        letter-spacing: 2px;
      }
      .projects-p3 {
        font-size: 11px;
        margin-bottom: 15px;
        letter-spacing: 1px;
      }
      #projects-link-ul li {
        margin: 0 10px;
        padding: 5px 10px;
      }
      #projects-link-ul a {
        font-size: 13px;
        font-weight: normal;
        letter-spacing: 1px;
      }
      
      /* ～～～～～～～～～～～～～～～～～～コンタクトのスタイル～～～～～～～～～～～～～～～～～～ */
      #contact-ul {
        /* 横並びにして */
        display: block;
      }
      #contact-ul li {
        /* 横幅を設定して中央寄せ */
        width: 300px;
        margin: auto;
        padding: 20px 0;
        margin-bottom: 30px;
      }
      .contact-img {
        height: 35px;
        margin-bottom: 10px;
      }
      .contact-text1 {
        font-size: 14px;
      }
      .contact-text2 {
        letter-spacing: 2px;
        border-bottom: 3px dotted rgb(224, 67, 67);
        font-size: 13px;
        /* borderの幅を調整して中央寄せ */
        width: 180px;
        margin: auto;
      }
    }
  </style>
</head>


<body>
<!-- ～～～～～～～～～～～～～～～～～～ヘッダー～～～～～～～～～～～～～～～～～～ -->
  <header>
    <ul class="glay" id="header-ul">
      <li>
        <a href="#main"><img src="/images/works6/home.png" alt="ホームのアイコン"></a>
        <a href="#main" class="header-text">Home</a>
      </li>
      <li>
        <a href="#about"><img src="/images/works6/about.png" alt="アバウトのアイコン" class="res-header"></a>
        <a href="#about" class="header-text">About</a>
      </li>
      <li>
        <a href="#projects"><img src="/images/works6/projects.png" alt="プロジェクトのアイコン"></a>
        <a href="#projects" class="header-text">Projects</a>
      </li>
    </ul>
  </header>
<!-- ～～～～～～～～～～～～～～～～～～メイン～～～～～～～～～～～～～～～～～～ -->
  <div id="main">
  <!-- 名前と写真 -->
    <div id="name">
      <h1 class="glay">Fuyuko<br>Matsui</h1>
      <p class="red">ふゆこ松井<br>Web Application Developer</p>
      <div class="fuyuko">
        <img src="/images/works6/fuyuko.png" alt="松井ふゆこの写真">
      </div>
    </div>

  <!-- アバウト -->
    <div id="about">
      <h2>About</h2>
      <p>............ <span class="v">∨</span> ............</p>
      <br>
      <p class="about-p1">HTML / CSS / JavaScript React JS / Redux / Python / Django / ExpressJS / AWS(basic) / Docker(basic)</p>
      <br>
      <p class="about-p2">ここに自己紹介を書きます。ここに自己紹介を書きます。ここに自己紹介を書きます。ここに自己紹介を書きます。ここに自己紹介を書きます。ここに自己紹介を書きます。</p>
      <br>
      <p class="about-p3">suppart@techis.com</p>
      <ul id="about-icon-ul">
        <li>
          <a href="#"><img src="/images/works6/github.png" alt=""></a>
        </li>
        <li>
          <a href="#"><img src="/images/works6/in.png" alt="">
          </a>
        </li>
      </ul>
    </div>

  <!-- プロジェクト -->
    <div id="projects">
      <h2 class="red">Projects</h2>
      <p class="tensen">............ <span class="v">∨</span> ............</p>
      <br>
      <ul id="projects-ul">
        <li>
          <div class="projects-img">
            <img src="/images/works6/twitter-project-side.png" alt=" ツイッタークローンの画像1" class="twitter-img1">
            <img src="/images/works6/twitter-project-main.png" alt="ツイッタークローンの画像2" class="twitter-img2">
          </div>
          <div class="projects-text">
            <h3>Twitterクローン</h3>
            <p class="sen">――――</p>
            <p class="projects-p1">Twitterの複製アプリです。ツイートを投稿できます。<br>PHP / MySQLを利用しています。</p>
            <p class="projects-p2">テストアカウント</p>
            <p class="projects-p3">Email : Test@gmail.com<br>Pass : 123456</p>
            <ul id="projects-link-ul">
              <li>
                <a href="#">WebSite</a>
              </li>
              <li>
                <a href="#">GitHub</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="projects-img">
            <img src="/images/works6/netflix-project-main.png" alt="Netflixクローンの画像2" class="twitter-img2">
          </div>
          <div class="projects-text">
            <h3>Netflixクローン</h3>
            <p class="sen">――――</p>
            <p class="projects-p1">Netflixの複製サービスです<br>Laravel / MySQLを利用しています。</p>
            <p class="projects-p2">テストアカウント</p>
            <p class="projects-p3">Email : Test@gmail.com<br>Pass : 123456</p>
            <ul id="projects-link-ul">
              <li>
                <a href="#">WebSite</a>
              </li>
              <li>
                <a href="#">GitHub</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>

  <!-- コンタクト -->
    <div id="contact">
      <h2><span class="glay">Contact </span><span class="red">Me</span></h2>
      <p class="tensen">............ <span class="v">∨</span> ............</p>
      <br>
      <ul id="contact-ul">
        <li>
          <img src="/images/works6/phone.png" alt=" スマホの画像" class="contact-img">
          <p class="contact-text1">PHONE</p>
          <p class="sen">――――</p>
          <p class="contact-text1">+12 345 6789</p>
        </li>
        <li>
          <img src="/images/works6/email.png" alt=" スマホの画像" class="contact-img">
          <p class="contact-text1">EMAIL</p>
          <p class="sen">――――</p>
          <p class="contact-text2">support@techis.com</p>
        </li>
      </ul>
    </div>
  </div>
<!-- ～～～～～～～～～～～～～～～～～～フッター～～～～～～～～～～～～～～～～～～ -->
  <footer>
    <p class="glay">© Fuyuko Matsui All rights reserved</p>
  </footer>
</body>
</html>