<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>模写コーディング・練習アプリ集</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="font-sans antialiased bg-sky-50">
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        {{-- 見出し --}}
        <div class="flex flex-col text-center w-full mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">模写コーディング・練習アプリ集</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base mb-20">スクールやドットインストール等の教材を参考にしながらコーディングしたものや、簡単な自作アプリのまとめです。</p>
          <a href="{{ route('works6-1') }}" class="text-blue-500 hover:text-blue-300 w-8/12 mx-auto text-lg">・ポートフォリオサイト(HTML/CSS)</a>
          <p class="mb-5 text-sm">スクールのデザイン案を忠実に再現し、レスポンシブにも対応させました。</p>
          <a href="{{ route('works6-2') }}" class="text-blue-500 hover:text-blue-300 w-8/12 mx-auto text-lg">・税金計算機(PHP)</a>
          <p class="mb-5 text-sm">税込の金額を入力すると、税のみの金額を計算できます。</p>
          <a href="{{ route('works6-3') }}" class="text-blue-500 hover:text-blue-300 w-8/12 mx-auto text-lg">・おみくじアプリ(JavaScript)</a>
          <p class="mb-5 text-sm">JavaScriptの練習で制作したおみくじアプリです。</p>
        </div>
        {{-- コンテンツ --}}

      </div>
    </section>
  </body>
</html>