<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- CSS --}}
    <link rel="stylesheet" href="/CSS/home.css">

    <!-- ファビコン -->
    <link rel="shortcut icon" href="{{ asset('/logo.png') }}">
  </head>

  <body class="font-sans antialiased">

    {{-- カウントアップバー --}}
    <div id="splash">
      <div id="splash_text"></div>
    </div>

    {{-- 背景パーティクル --}}
    <div id="particles-js"></div>

    {{------------ ヘッダー ------------}}
    <header id="header" class="text-gray-600 body-font shadow-md fixed top-0 left-0 right-0 bg-white z-20">
      <div class="container mx-auto flex flex-wrap p-4 flex-col md:flex-row items-center">
        {{-- タイトル --}}
        <a class="flex items-center text-gray-900 mb-4 md:mb-0" href="#WORKS">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-yellow-400"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
          <h1 class="ml-3 text-3xl font-bold tracking-widest animate-spin-x heading">PORTFOLIO</h1>
        </a>
        {{-- ページ内リンク --}}
        <nav id="page-link" class="md:mr-auto md:ml-6 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
          <a class="mr-5 hover:text-yellow-400 border-b-2 border-transparent rounded-t-lg hover:border-gray-300 transition duration-500 transform hover:scale-110" href="#WORKS">WORKS</a>
          <a class="mr-5 hover:text-yellow-400 border-b-2 border-transparent rounded-t-lg hover:border-gray-300 transition duration-500 transform hover:scale-110" href="#SKILL">SKILL</a>
          <a class="mr-5 hover:text-yellow-400 border-b-2 border-transparent rounded-t-lg hover:border-gray-300 transition duration-500 transform hover:scale-110" href="#ABOUT">ABOUT</a>
        </nav>
      </div>
    </header>

    {{------------ メイン ------------}}
    <main>
      {{------------ WORKS ------------}}
      <section class="text-gray-600 body-font pt-32 pb-24" id="WORKS">
        <div class="container px-10 mx-auto">
          {{-- 見出し --}}
          <div class="flex flex-col text-center w-full my-10">
            <h2 class="text-3xl font-bold title-font text-gray-900 tracking-widest">WORKS</h2>
            <p class="mt-2 mb-1 font-bold text-gray-500">・テストアカウント(共通)・</p>
            <p class="text-gray-600">email：test@test.com</p>
            <p class="text-gray-600">password：password123</p>
          </div>
          {{-- コンテンツ --}}
          <p class="text-xl tracking-widest font-bold mx-4">ＯＲＩＧＩＮＡＬ</p>
          <div class="h-1 bg-yellow-300 mb-4 mx-2 rounded-md"></div>
          <div class="flex flex-wrap -m-4 px-5">
            {{-- 1 --}}
            <div class="lg:w-1/3 sm:w-1/2 p-4">
              <div class="flex relative">
                <a href="https://okazu-nani-6638a09d555b.herokuapp.com/" target="blank">
                  {{-- 画像 --}}
                  <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded-lg border-4 border-gray-200" src="{{ asset('images/works1.png') }}">
                  {{-- テキスト --}}
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white bg-opacity-90 rounded-lg opacity-0 transition-opacity duration-300 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-yellow-400 mb-1">2024/04(学習開始から7ヶ月目)</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">今日のおかずは？</h1>
                    <p class="leading-relaxed">冷蔵庫を管理するアプリです。食材を登録して在庫や賞味期限の確認ができます。</p>
                    <div class="bg-yellow-100 mt-4 p-2 border">
                      <p class="leading-relaxed text-sm">製作期間：1週間</p>
                      <p class="leading-relaxed text-sm">使用言語：HTML/CSS/PHP/JavaScript</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            {{-- 2 --}}
            <div class="lg:w-1/3 sm:w-1/2 p-4">
              <div class="flex relative">
                <a href="https://seal-storage-0789dc388af7.herokuapp.com/" target="blank2">
                  {{-- 画像 --}}
                  <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded-lg border-4 border-gray-200" src="{{ asset('images/works2.png') }}">
                  {{-- テキスト --}}
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white bg-opacity-90 rounded-lg opacity-0 transition-opacity duration-300 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-yellow-400 mb-1">2024/02(学習開始から5ヶ月目)</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Seal Strage</h1>
                    <p class="leading-relaxed">フレークシールを管理するアプリです。パッケージやタグの登録、検索ができます。</p>
                    <div class="bg-yellow-100 mt-4 p-2 border">
                      <p class="leading-relaxed text-sm">製作期間：2週間</p>
                      <p class="leading-relaxed text-sm">使用言語：HTML/CSS/PHP/JavaScript</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            {{-- 3 --}}
            <div class="lg:w-1/3 sm:w-1/2 p-4">
              <div class="flex relative">
                <a href="{{ route('works3') }}" target="blank3">
                  {{-- 画像 --}}
                  <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded-lg border-4 border-gray-200" src="{{ asset('images/works3.png') }}">
                  {{-- テキスト --}}
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white bg-opacity-90 rounded-lg opacity-0 transition-opacity duration-300 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-yellow-400 mb-1">2023/11(学習開始から2ヶ月目)</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">renshu-cafeホームページ</h1>
                    <p class="leading-relaxed">架空のカフェのホームページです。メニュー画像は3Dモデリングアプリで制作しました。</p>
                    <div class="bg-yellow-100 mt-4 p-2 border">
                      <p class="leading-relaxed text-sm">製作期間：1週間</p>
                      <p class="leading-relaxed text-sm">使用言語：HTML/CSS</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <p class="text-xl tracking-widest font-bold mx-4 mt-8">ＰＲＡＣＴＩＣＥ</p>
          <div class="h-1 bg-yellow-300 mb-4 mx-2 rounded-md"></div>
          <div class="flex flex-wrap -m-4 px-5">
            {{-- 4 --}}
            <div class="lg:w-1/3 sm:w-1/2 p-4">
              <div class="flex relative">
                <a href="https://item-management2-517b910a641d.herokuapp.com/login" target="blank4">
                  {{-- 画像 --}}
                  <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded-lg border-4 border-gray-200" src="{{ asset('images/works4.png') }}">
                  {{-- テキスト --}}
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white bg-opacity-90 rounded-lg opacity-0 transition-opacity duration-300 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-yellow-400 mb-1">2024/03(学習開始から6ヶ月目)</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">商品管理システム</h1>
                    <p class="leading-relaxed">既存のシステムにオリジナルの機能を追加する、というスクールの課題で制作しました。</p>
                    <div class="bg-yellow-100 mt-4 p-2 border">
                      <p class="leading-relaxed text-sm">製作期間：2週間</p>
                      <p class="leading-relaxed text-sm">使用言語：HTML/CSS/PHP/JavaScript</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            {{-- 5 --}}
            <div class="lg:w-1/3 sm:w-1/2 p-4">
              <div class="flex relative">
                <a href="https://cook-laravel-36f6337c4769.herokuapp.com/" target="blank5">
                  {{-- 画像 --}}
                  <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded-lg border-4 border-gray-200" src="{{ asset('images/works5.png') }}">
                  {{-- テキスト --}}
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white bg-opacity-90 rounded-lg opacity-0 transition-opacity duration-300 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-yellow-400 mb-1">2024/01(学習開始から4ヶ月目)</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Cook Laravel</h1>
                    <p class="leading-relaxed"><a href="https://www.udemy.com/course/laravel10/?couponCode=JPLETSLEARNNOW" target="blank" class="text-blue-500 hover:border-b hover:border-blue-300">Udemyの講座</a>を受講しながら制作したレシピ投稿サイトです。</p>
                    <div class="bg-yellow-100 mt-4 p-2 border">
                      <p class="leading-relaxed text-sm">製作期間：3週間</p>
                      <p class="leading-relaxed text-sm">使用言語：HTML/CSS/PHP/JavaScript</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            {{-- 6 --}}
            <div class="lg:w-1/3 sm:w-1/2 p-4">
              <div class="flex relative">
                <a href="{{ route('works6') }}" target="blank6">
                  {{-- 画像 --}}
                  <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded-lg border-4 border-gray-200" src="/images/works6.png">
                  {{-- テキスト --}}
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white bg-opacity-90 rounded-lg opacity-0 transition-opacity duration-300 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-yellow-400 mb-1">2023/10～2023/12</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">模写コーディング・練習アプリ集</h1>
                    <p class="leading-relaxed">プログラミングを学習していく中で、教材を参考にコーディングしたもののまとめです。</p>
                    <div class="bg-yellow-100 mt-4 p-2 border">
                      <p class="leading-relaxed texy-sm">製作期間：平均1～2日程度</p>
                      <p class="leading-relaxed text-sm">使用言語：HTML/CSS/PHP/JavaScript</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      {{------------ SKILL ------------}}
      <section class="text-gray-600 body-font py-24 bg-white bg-opacity-70" id="SKILL">
        <div class="container px-10 mx-auto">
          {{-- 見出し --}}
          <div class="flex flex-col text-center w-full mb-10">
            <h2 class="text-3xl font-bold title-font text-gray-900 tracking-widest">SKILL</h2>
          </div>
          {{-- コンテンツ --}}
          <section class="text-gray-600 body-font">
            <div class="container px-5 mx-auto flex flex-wrap">
              <div class="flex flex-wrap -m-4">
                {{-- 1 --}}
                <div class="p-4 lg:w-1/2 md:w-full bg-white">
                  <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-4">
                    {{-- アイコン --}}
                    <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 mr-4 inline-flex items-center justify-center rounded-full bg-yellow-100 flex-shrink-0">
                      <svg viewBox="0 0 128 128" class="w-6 h-6">
                        <path fill="#ff6347" d="M9.032 2l10.005 112.093 44.896 12.401 45.02-12.387L118.968 2H9.032zm89.126 26.539l-.627 7.172L97.255 39H44.59l1.257 14h50.156l-.336 3.471-3.233 36.119-.238 2.27L64 102.609v.002l-.034.018-28.177-7.423L33.876 74h13.815l.979 10.919L63.957 89H64v-.546l15.355-3.875L80.959 67H33.261l-3.383-38.117L29.549 25h68.939l-.33 3.539z"></path>
                      </svg>
                      <svg viewBox="0 0 128 128" class="w-6 h-6">
                        <path fill="#6495ed" d="M8.76 1l10.055 112.883 45.118 12.58 45.244-12.626L119.24 1H8.76zm89.591 25.862l-3.347 37.605.01.203-.014.467v-.004l-2.378 26.294-.262 2.336L64 101.607v.001l-.022.019-28.311-7.888L33.75 72h13.883l.985 11.054 15.386 4.17-.004.008v-.002l15.443-4.229L81.075 65H48.792l-.277-3.043-.631-7.129L47.553 51h34.749l1.264-14H30.64l-.277-3.041-.63-7.131L29.401 23h69.281l-.331 3.862z"></path>
                      </svg>
                    </div>
                    {{-- テキスト --}}
                    <div class="flex-grow">
                      <h2 class="text-gray-900 text-lg title-font font-bold mb-3">HTML/CSS</h2>
                      <p class="leading-relaxed text-base">★★★★☆ 基本的なコーディングができます。フレームワークはBootstrapとTailwindCSSが使えます。</p>
                    </div>
                  </div>
                </div>
                {{-- 2 --}}
                <div class="p-4 lg:w-1/2 md:w-full bg-white">
                  <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-4">
                    {{-- テキスト --}}
                    <div class="flex-grow">
                      <h2 class="text-gray-900 text-lg title-font font-bold mb-3">PHP</h2>
                      <p class="leading-relaxed text-base">★★★☆☆ 簡単なWebアプリケーションが作れます。フレームワークはLaravelが使えます。</p>
                    </div>
                    {{-- アイコン --}}
                    <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 ml-4 inline-flex items-center justify-center rounded-full bg-yellow-100 flex-shrink-0">
                      <svg viewBox="0 0 128 128" class="w-12 h-12">
                        <path fill="#6495ed" d="M64 30.332C28.654 30.332 0 45.407 0 64s28.654 33.668 64 33.668c35.345 0 64-15.075 64-33.668S99.346 30.332 64 30.332zm-5.982 9.81h7.293v.003l-1.745 8.968h6.496c4.087 0 6.908.714 8.458 2.139 1.553 1.427 2.017 3.737 1.398 6.93l-3.053 15.7h-7.408l2.902-14.929c.33-1.698.208-2.855-.365-3.473-.573-.617-1.793-.925-3.658-.925h-5.828L58.752 73.88h-7.291l6.557-33.738zM26.73 49.114h14.133c4.252 0 7.355 1.116 9.305 3.348 1.95 2.232 2.536 5.346 1.758 9.346-.32 1.649-.863 3.154-1.625 4.52-.763 1.364-1.76 2.613-2.99 3.745-1.468 1.373-3.098 2.353-4.891 2.936-1.794.585-4.08.875-6.858.875h-6.294l-1.745 8.97h-7.35l6.557-33.74zm57.366 0h14.13c4.252 0 7.353 1.116 9.303 3.348h.002c1.95 2.232 2.538 5.346 1.76 9.346-.32 1.649-.861 3.154-1.623 4.52-.763 1.364-1.76 2.613-2.992 3.745-1.467 1.373-3.098 2.353-4.893 2.936-1.794.585-4.077.875-6.855.875h-6.295l-1.744 8.97h-7.35l6.557-33.74zm-51.051 5.325-2.742 14.12h4.468c2.963 0 5.172-.556 6.622-1.673 1.45-1.116 2.428-2.981 2.937-5.592.485-2.507.264-4.279-.666-5.309-.93-1.032-2.79-1.547-5.584-1.547h-5.035zm57.363 0-2.744 14.12h4.47c2.965 0 5.17-.556 6.622-1.673 1.449-1.116 2.427-2.981 2.935-5.592.487-2.507.266-4.279-.664-5.309-.93-1.032-2.792-1.547-5.584-1.547h-5.035z"></path>
                        </svg>
                    </div>
                  </div>
                </div>
                {{-- 3 --}}
                <div class="p-4 lg:w-1/2 md:w-full bg-white">
                  <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-4">
                    {{-- アイコン --}}
                    <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 mr-4 inline-flex items-center justify-center rounded-full bg-yellow-100 flex-shrink-0">
                        <svg viewBox="0 0 128 128" class="w-9 h-9">
                          <path fill="#ffd700" d="M2 1v125h125V1H2zm66.119 106.513c-1.845 3.749-5.367 6.212-9.448 7.401-6.271 1.44-12.269.619-16.731-2.059-2.986-1.832-5.318-4.652-6.901-7.901l9.52-5.83c.083.035.333.487.667 1.071 1.214 2.034 2.261 3.474 4.319 4.485 2.022.69 6.461 1.131 8.175-2.427 1.047-1.81.714-7.628.714-14.065C58.433 78.073 58.48 68 58.48 58h11.709c0 11 .06 21.418 0 32.152.025 6.58.596 12.446-2.07 17.361zm48.574-3.308c-4.07 13.922-26.762 14.374-35.83 5.176-1.916-2.165-3.117-3.296-4.26-5.795 4.819-2.772 4.819-2.772 9.508-5.485 2.547 3.915 4.902 6.068 9.139 6.949 5.748.702 11.531-1.273 10.234-7.378-1.333-4.986-11.77-6.199-18.873-11.531-7.211-4.843-8.901-16.611-2.975-23.335 1.975-2.487 5.343-4.343 8.877-5.235l3.688-.477c7.081-.143 11.507 1.727 14.756 5.355.904.916 1.642 1.904 3.022 4.045-3.772 2.404-3.76 2.381-9.163 5.879-1.154-2.486-3.069-4.046-5.093-4.724-3.142-.952-7.104.083-7.926 3.403-.285 1.023-.226 1.975.227 3.665 1.273 2.903 5.545 4.165 9.377 5.926 11.031 4.474 14.756 9.271 15.672 14.981.882 4.916-.213 8.105-.38 8.581z"></path>
                          </svg>
                    </div>
                    {{-- テキスト --}}
                    <div class="flex-grow">
                      <h2 class="text-gray-900 text-lg title-font font-bold mb-3">JavaScript</h2>
                      <p class="leading-relaxed text-base">★★★☆☆ アプリケーションに簡単な動作を追加できます。フレームワークはJQueryが使えます。</p>
                    </div>
                  </div>
                </div>
                {{-- 4 --}}
                <div class="p-4 lg:w-1/2 md:w-full bg-white">
                  <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-4">
                    {{-- テキスト --}}
                    <div class="flex-grow">
                      <h2 class="text-gray-900 text-lg title-font font-bold mb-3">MySQL</h2>
                      <p class="leading-relaxed text-base">★★★☆☆ 基本的なデータベースの構築、操作が行えます。</p>
                    </div>
                    {{-- アイコン --}}
                    <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 ml-4 inline-flex items-center justify-center rounded-full bg-yellow-100 flex-shrink-0">
                      <svg viewBox="0 0 128 128" class="w-9 h-9">
                        <path fill="#6495ed" d="M117.688 98.242c-6.973-.191-12.297.461-16.852 2.379-1.293.547-3.355.559-3.566 2.18.711.746.82 1.859 1.387 2.777 1.086 1.754 2.922 4.113 4.559 5.352 1.789 1.348 3.633 2.793 5.551 3.961 3.414 2.082 7.223 3.27 10.504 5.352 1.938 1.23 3.859 2.777 5.75 4.164.934.684 1.563 1.75 2.773 2.18v-.195c-.637-.812-.801-1.93-1.387-2.777l-2.578-2.578c-2.52-3.344-5.719-6.281-9.117-8.719-2.711-1.949-8.781-4.578-9.91-7.73l-.199-.199c1.922-.219 4.172-.914 5.949-1.391 2.98-.797 5.645-.59 8.719-1.387l4.164-1.187v-.793c-1.555-1.594-2.664-3.707-4.359-5.152-4.441-3.781-9.285-7.555-14.273-10.703-2.766-1.746-6.184-2.883-9.117-4.363-.988-.496-2.719-.758-3.371-1.586-1.539-1.961-2.379-4.449-3.566-6.738-2.488-4.793-4.93-10.023-7.137-15.066-1.504-3.437-2.484-6.828-4.359-9.91-9-14.797-18.687-23.73-33.695-32.508-3.195-1.867-7.039-2.605-11.102-3.57l-6.543-.395c-1.332-.555-2.715-2.184-3.965-2.977C16.977 3.52 4.223-3.312.539 5.672-1.785 11.34 4.016 16.871 6.09 19.746c1.457 2.012 3.32 4.273 4.359 6.539.688 1.492.805 2.984 1.391 4.559 1.438 3.883 2.695 8.109 4.559 11.695.941 1.816 1.98 3.727 3.172 5.352.727.996 1.98 1.438 2.18 2.973-1.227 1.715-1.297 4.375-1.984 6.543-3.098 9.77-1.926 21.91 2.578 29.137 1.383 2.223 4.641 6.98 9.117 5.156 3.918-1.598 3.043-6.539 4.164-10.902.254-.988.098-1.715.594-2.379v.199l3.57 7.133c2.641 4.254 7.324 8.699 11.297 11.699 2.059 1.555 3.68 4.242 6.344 5.152v-.199h-.199c-.516-.805-1.324-1.137-1.98-1.781-1.551-1.523-3.277-3.414-4.559-5.156-3.613-4.902-6.805-10.27-9.711-15.855-1.391-2.668-2.598-5.609-3.77-8.324-.453-1.047-.445-2.633-1.387-3.172-1.281 1.988-3.172 3.598-4.164 5.945-1.582 3.754-1.789 8.336-2.375 13.082-.348.125-.195.039-.398.199-2.762-.668-3.73-3.508-4.758-5.949-2.594-6.164-3.078-16.09-.793-23.191.59-1.836 3.262-7.617 2.18-9.316-.516-1.691-2.219-2.672-3.172-3.965-1.18-1.598-2.355-3.703-3.172-5.551-2.125-4.805-3.113-10.203-5.352-15.062-1.07-2.324-2.875-4.676-4.359-6.738-1.645-2.289-3.484-3.977-4.758-6.742-.453-.984-1.066-2.559-.398-3.566.215-.684.516-.969 1.191-1.191 1.148-.887 4.352.297 5.547.793 3.18 1.32 5.832 2.578 8.527 4.363 1.289.855 2.598 2.512 4.16 2.973h1.785c2.789.641 5.914.195 8.523.988 4.609 1.402 8.738 3.582 12.488 5.949 11.422 7.215 20.766 17.48 27.156 29.734 1.027 1.973 1.473 3.852 2.379 5.945 1.824 4.219 4.125 8.559 5.941 12.688 1.816 4.113 3.582 8.27 6.148 11.695 1.348 1.801 6.551 2.766 8.918 3.766 1.66.699 4.379 1.43 5.949 2.379 3 1.809 5.906 3.965 8.723 5.945 1.402.992 5.73 3.168 5.945 4.957zm-88.605-75.52c-1.453-.027-2.48.156-3.566.395v.199h.195c.695 1.422 1.918 2.34 2.777 3.566l1.98 4.164.199-.195c1.227-.867 1.789-2.25 1.781-4.363-.492-.52-.562-1.164-.992-1.785-.562-.824-1.66-1.289-2.375-1.98zm0 0"></path>
                        </svg>
                    </div>
                  </div>
                </div>
                {{-- 5 --}}
                <div class="p-4 lg:w-1/2 md:w-full bg-white">
                  <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-4">
                    {{-- アイコン --}}
                    <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 mr-4 inline-flex items-center justify-center rounded-full bg-yellow-100 flex-shrink-0">
                        <svg viewBox="0 0 128 128" class="w-10 h-10">
                          <g fill="#696969"><path fill-rule="evenodd" clip-rule="evenodd" d="M64 5.103c-33.347 0-60.388 27.035-60.388 60.388 0 26.682 17.303 49.317 41.297 57.303 3.017.56 4.125-1.31 4.125-2.905 0-1.44-.056-6.197-.082-11.243-16.8 3.653-20.345-7.125-20.345-7.125-2.747-6.98-6.705-8.836-6.705-8.836-5.48-3.748.413-3.67.413-3.67 6.063.425 9.257 6.223 9.257 6.223 5.386 9.23 14.127 6.562 17.573 5.02.542-3.903 2.107-6.568 3.834-8.076-13.413-1.525-27.514-6.704-27.514-29.843 0-6.593 2.36-11.98 6.223-16.21-.628-1.52-2.695-7.662.584-15.98 0 0 5.07-1.623 16.61 6.19C53.7 35 58.867 34.327 64 34.304c5.13.023 10.3.694 15.127 2.033 11.526-7.813 16.59-6.19 16.59-6.19 3.287 8.317 1.22 14.46.593 15.98 3.872 4.23 6.215 9.617 6.215 16.21 0 23.194-14.127 28.3-27.574 29.796 2.167 1.874 4.097 5.55 4.097 11.183 0 8.08-.07 14.583-.07 16.572 0 1.607 1.088 3.49 4.148 2.897 23.98-7.994 41.263-30.622 41.263-57.294C124.388 32.14 97.35 5.104 64 5.104z"></path><path d="M26.484 91.806c-.133.3-.605.39-1.035.185-.44-.196-.685-.605-.543-.906.13-.31.603-.395 1.04-.188.44.197.69.61.537.91zm2.446 2.729c-.287.267-.85.143-1.232-.28-.396-.42-.47-.983-.177-1.254.298-.266.844-.14 1.24.28.394.426.472.984.17 1.255zM31.312 98.012c-.37.258-.976.017-1.35-.52-.37-.538-.37-1.183.01-1.44.373-.258.97-.025 1.35.507.368.545.368 1.19-.01 1.452zm3.261 3.361c-.33.365-1.036.267-1.552-.23-.527-.487-.674-1.18-.343-1.544.336-.366 1.045-.264 1.564.23.527.486.686 1.18.333 1.543zm4.5 1.951c-.147.473-.825.688-1.51.486-.683-.207-1.13-.76-.99-1.238.14-.477.823-.7 1.512-.485.683.206 1.13.756.988 1.237zm4.943.361c.017.498-.563.91-1.28.92-.723.017-1.308-.387-1.315-.877 0-.503.568-.91 1.29-.924.717-.013 1.306.387 1.306.88zm4.598-.782c.086.485-.413.984-1.126 1.117-.7.13-1.35-.172-1.44-.653-.086-.498.422-.997 1.122-1.126.714-.123 1.354.17 1.444.663zm0 0"></path></g>
                          </svg>
                    </div>
                    {{-- テキスト --}}
                    <div class="flex-grow">
                      <h2 class="text-gray-900 text-lg title-font font-bold mb-3">GitHub</h2>
                      <p class="leading-relaxed text-base">基本的なGit管理ができます。スクールのグループワークで、複数人での使い方も学んでいます。</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>

      {{------------ ABOUT ------------}}
      <section class="text-gray-600 body-font py-24" id="ABOUT">
        {{-- 見出し --}}
        <div class="text-center mb-24">
          <h2 class="text-3xl font-bold text-gray-900 tracking-widest">ABOUT</h2>
        </div>
        <div class="relative p-4 w-2/3 lg:w-1/3 mx-auto">
          {{-- 3D --}}
          <div class="absolute mb-4 text-center transform translate-x-1/2 -top-16 right-1/2">
            <canvas id="myCanvas" class="mx-auto object-cover rounded-lg border-4 border-gray-200 bg-white" title="ドラッグ：回転 スクロール：拡大/縮小"></canvas>
          </div>
          <div class="w-400 py-4 pt-24 bg-white bg-opacity-70 rounded-lg shadow pic">
            {{-- 名前 --}}
            <div class="text-center">
              <p class="text-xl text-gray-800 mt-2">SUZUKA OKADA</p>
            </div>
            <div class="flex items-center justify-center w-40 pt-8 mx-auto border-t-4 border-yellow-200">
            </div>
            {{-- テキスト --}}
            <p class="mx-5">IT業界への転職を目指して、スクール+独学でプログラミングを学習中です。<br>未経験ではありますが、 努力を惜しまず学習を続け、熱意を持って業務に取り組んでまいります。よろしくお願いいたします。</p>
            {{-- GitHubリンク --}}
            <a href="https://github.com/okd08" target="_blank" title="GitHubリンク" class="flex items-center justify-center mt-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="text-xl transition-colors duration-200 hover:text-yellow-400 dark:hover:text-white" viewBox="0 0 1792 1792"><path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z"></path></svg>
            </a>
          </div>
        </div>
      </section>

      {{-- 上に戻るボタン --}}
      <button onclick="scrollToTop()"  class="fixed bottom-8 right-8 bg-yellow-300 hover:bg-yellow-400 text-white text-xl font-bold py-1 px-3 rounded-full z-20 transition duration-500 transform hover:scale-110">↑</button>
    </main>
    
    {{-- JavaScript、JQuery --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://unpkg.com/three@0.147.0/build/three.min.js"></script>
    <script src="https://unpkg.com/three@0.147.0/examples/js/controls/OrbitControls.js"></script>
    <script src="https://unpkg.com/three@0.142.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="/js/home.js"></script>
  </body>
</html>