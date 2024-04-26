<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>税金計算機</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">税金計算機</h1>
    </div>

    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2 m-auto">
          <div class="relative">
            <label for="name" class="leading-7">税込金額</label>
            <input type="number" id="id-number" placeholder="税込の金額を入力" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>

        <div class="p-2 w-full">
          <button id="id-btn" class="flex mx-auto text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">計算する</button>
        </div>
        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
        </div>
      </div>
    </div>

    <div class="flex flex-col text-center w-full mb-12">
      <h1 id="id-result" class="sm:text-2xl text-xl font-medium title-font mb-4 text-red-500">税金:　円</h1>
    </div>
  </div>
</section>

<script>
  'use strict';

  const number = document.getElementById('id-number');
  const result = document.getElementById('id-result');

  document.getElementById('id-btn').addEventListener('click', function() {
    const numberValue = number.value;

    const calculate = numberValue / 11;

    result.textContent = '税金:' + Math.floor(calculate) + '円';
  });
</script>
</body>
</html>