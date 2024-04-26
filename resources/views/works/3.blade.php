<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>renshu-cafe</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- ファビコン -->
    <link rel="shortcut icon" href="/images/works3/logo.png">

    <style>
      * {
        padding: 0;
        margin: 0;
      }
      .hedder {
        height: 200px;
        background-color: rgb(244, 244, 228);
      }
      .rogo {
        padding-top: 10px;
        text-align: center;
      }
      h1 {
        text-align: center;
        font-family: 'Segoe Script';
        color: rgb(87, 61, 42);
        text-shadow: 5px 5px 0 rgba(87, 61, 42, 0.189);
        }
      .link, .modoru {
        text-align: center;
        font-family: 'Malgun Gothic';
        font-size: 18px;
        letter-spacing: 1px;
      }
      a {
        color: rgb(244, 244, 228);
      }
      h2 {
        text-align: center;
        font-family: 'Segoe Script';
        color: rgb(244, 244, 228);
        text-decoration: underline;
      }
      .main {
        background-color: rgb(78, 61, 50);
      }
      p {
        font-family: 'Malgun Gothic';
        font-size: 14px;
        text-align: center;
        color: rgb(244, 244, 228);
        margin-bottom: 10px;
      }
      .menu {
        height: 200px;
        margin-left: 5px;
        margin-right: 5px;
      }
      table {
        margin-left: auto;
        margin-right: auto;
      }
      .footer {
        height: 40px;
        line-height: 40px;
        background-color: rgb(244, 244, 228);
      }
    </style>
  </head>

  <body class="font-sans antialiased">
    {{-- ヘッダー --}}
    <div class="hedder" title="レンシュウカフェ">
      <div class="rogo">
        <img src="{{ asset('images/works3/logo.png') }}" alt="ロゴ画像" height="100px">
      </div>
      <h1 id="top">Renshu-cafe</h1>
    </div>

    {{-- リンク --}}
    <div class="main">
      <div class="link">
        <a title="このカフェについて" href="#about">About</a>
        <a title="ドリンクメニュー" href="#drink">Drink</a>
        <a title="フードメニュー" href="#food">Food</a>
        <a title="デザートメニュー" href="#dess">Dessert</a>
        <a title="テイクアウトメニュー" href="#take">Takeout</a>
        <a title="お問い合わせ" href="#cont">Contact</a>
    </div>

    {{-- メイン画像 --}}
    <img src="{{ asset('images/works3/main.jpg') }}" alt="レンシュウカフェのメイン画像" width="100%">

    <h2 id="about">・About・</h2>
    <p>HTMLとCSSの練習で作成した、架空のカフェのホームページです。<br>メニュー画像は3Dモデリングアプリで自作したものです。その他の素材はフリーのものをお借りしています。</p>
    <br><br>

    <h2 id="drink">・Drink menu・</h2>
    <p>コーヒーを中心とした、こだわりのドリンクメニューです。
    <table>
      <tr>
        <td>
          <img class="menu" src="{{ asset('images/works3/コーヒー.jpg') }}" alt="オリジナルブレンドの画像">
          <p>オリジナルブレンド(hot/ice)</p>
        </td>
        <td>
          <img class="menu" src="{{ asset('images/works3/ラテ.jpg') }}" alt="カフェラテの画像">
          <p>カフェラテ</p>
        </td>
        <td>
          <img class="menu" src="{{ asset('images/works3/紅茶.jpg') }}" alt="紅茶の画像">
          <p>紅茶(hot/ice)</p>
        </td>
      </tr>
      <tr>
        <td>
          <img class="menu" src="{{ asset('images/works3/ココア.jpg') }}" alt="ココアの画像">
          <p>ココア(hot/ice)</p>
        </td>
        <td>
          <img class="menu" src="{{ asset('images/works3/レモネード.jpg') }}" alt="レモネードの画像">
          <p>レモネード</p>
          <td>
            <img class="menu" src="{{ asset('images/works3/メロンソーダ.jpg') }}" alt="メロンソーダの画像">
          <p>メロンソーダ</p>
          </td>
        </td>
      </tr>
    </table>
    <br><br>

    <h2 id="food">・Food menu・</h2>
    <table>
      <tr>
        <td>
          <img class="menu" src="food1.jpg" alt="サンドイッチの画像">
          <p>サンドイッチ</p>
        </td>
        <td>
          <img class="menu" src="food2.jpg" alt="トマトパスタの画像">
          <p>日替わりパスタ</p>
          <td>
            <img class="menu" src="food3.jpg" alt="サラダの画像">
            <p>サラダ</p>
          </td>
        </td>
      </tr>
    </table>
    <br><br>

    <h2 id="dess">・Dessert menu・</h2>
    <table>
      <tr>
        <td>
          <img class="menu" src="dessert1.jpg" alt="ガトーショコラの画像">
          <p>ガトーショコラ</p>
        </td>
        <td>
          <img class="menu" src="dessert2.jpg" alt="チーズケーキの画像">
          <p>チーズケーキ</p>
        </td>
        <td>
          <img class="menu" src="dessert3.jpg" alt="パンケーキの画像">
          <p>パンケーキ</p>
        </td>
      </tr>
    </table>
    <br><br>

    <h2 id="take">・Takeout menu・</h2>
    <p>テイクアウトのご用意もございます。</p>
    <table>
      <tr>
        <td>
          <img class="menu" src="takeout.jpg" alt="テイクアウト用コーヒーの画像">
          <p>テイクアウト用コーヒー</p>
        </td>
        <td>
          <img class="menu" src="takeout2.jpg" alt="クッキーの画像">
          <p>クッキー(プレーン/チョコ)</p>
        </td>
      </tr>
    </table>
    <br><br>

    <h2 id="cont">・Contact・</h2>
    <p>ご意見、ご要望等がございましたらこちらにお願いいたします。</p>
    <table style="background-color: rgb(244, 244, 228); font-size: 10pt;">
      <tr>
        <td>お名前：</td><td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>電話番号：</td><td><input type="tel" name="tel"></td>
      </tr>
      <tr>
        <td>メールアドレス：</td><td><input type="email" name="email"></td>
      </tr>
      <tr>
        <td>お問い合わせ内容：</td><td><textarea name="toiawase" id="toiawase" cols="30" rows="10" placeholder="※実際に送信はできません※"></textarea></td>
      </tr>
      <tr>
        <td colspan=2 style="text-align: center;"><input type="submit"></td>
      </tr>
    </table>
    <br><br>

    {{-- topに戻る --}}
    <div class="modoru">
      <a href="#top">TOP</a>
    </div>
    <br><br>

    {{-- フッター --}}
    <div class="footer">
      <p class="copi" style="color: black; text-align: center; font-size: 16px;">©rensyu-cafe</p>
    </div>
  </body>
</html>