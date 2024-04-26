<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>おみくじアプリ</title>

  <style>
    .omikuji {
      text-align: center;
      border: 2px solid red;
      width: 600px;
      margin: auto;
    }
    .p1 {
      color: red;
      font-weight: bold;
    }
    .p3 {
      font-weight: bold;
      font-size: 30px;
      margin: 10px 0;
    }
    .p3-s {
      display: none;
    }
    .p2 {
      color: red;
      font-weight: bold;
      font-size: 30px;
    }
    .special {
      color: rgb(255, 230, 0);
      font-size: 50px;
      text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.322);
      margin: 10px 0;
    }
  </style>
</head>


<body>
<h3>おみくじ</h3>
<div class="omikuji">
  <p class="p1">今日の運勢は…</p>
  <button id="uranai-btn">占う</button>
  <br>
  <p  class="p3 p3-s" id="special-text">おめでとう！</p>
  <p class="p2" id="uranai-kekka">『？？』</p>
</div>

<script>
  'use strict';

  let omikujiList = ['大吉', '中吉', '小吉', '凶', '★スペシャル大吉★'];

  const uranaiBtn = document.getElementById('uranai-btn');
  const uranaiKekka = document.getElementById('uranai-kekka');
  const specialText = document.getElementById('special-text');

  uranaiBtn.addEventListener('click', function() {
    // 0からomikujiListのlengthまでのランダムな整数を取得する定数
    const randomNumber = Math.floor(Math.random() * omikujiList.length);
    // 選ばれたrandomNumberに応じてテキストを置き換え
    uranaiKekka.textContent = '『' + omikujiList[randomNumber] + '』';

    // 更にスペシャル大吉の場合は表示を変更
    if (randomNumber === 4) {
      specialText.classList.remove('p3-s');
      specialText.classList.add('p3');
      uranaiKekka.classList.add('special');
    } else {
      specialText.classList.add('p3-s');
      specialText.classList.remove('p3');
      uranaiKekka.classList.remove('special');
    }
  });
</script>
</body>
</html>