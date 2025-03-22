<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <title>@yield('title')</title>
    <meta name="description" content="Dashboard" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('back_auth/assets/img/logo.png') }}" width="100" height="100">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=67deb75059793500196aaf8d&product=inline-share-buttons&source=platform" async="async"></script>
  </head>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    [x-cloak] { display: none !important; }
  </style>

 <body class="tw-font-sans" x-data="{ open: false, start: false }">

    <!-- Header -->
    @include('home.partials.header')

    @if (Route::currentRouteName() == 'home')
      <!-- sider -->
      @include('home.partials.sider')
    @endif
    
    <!-- Main Content -->
    <main class="tw-h-full tw-bg-gray-100 tw-py-10">
      @yield('content')
    </main>

    <!-- footer -->
    @include('home.partials.footer')

    <!-- script BreakNews -->
    <style>
      @keyframes tickerScroll {
        from {
          transform: translateX(100%);
        }
        to {
          transform: translateX(-100%);
        }
      }

      .tw-animate-scroll {
        animation: tickerScroll 40s linear infinite;
        display: flex;
        min-width: max-content;
      }
    </style>



    @if (session('success'))
      <script>
        iziToast.success({
          title: 'succès',
          message: '{{ session('success') }}',
          position: 'topRight'
        });
      </script>
    @endif

    <!-- Scripts 
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
     <script>
         var swiper = new Swiper(".mySwiper", {
             slidesPerView: 3,
             spaceBetween: 20,
             loop: true,
             autoplay: {
                 delay: 3000,
                 disableOnInteraction: false,
             },
             pagination: {
                 el: ".swiper-pagination",
                 clickable: true,
             },
             navigation: {
                 nextEl: ".swiper-button-next",
                 prevEl: ".swiper-button-prev",
             },
             breakpoints: {
                 1024: { slidesPerView: 3 },
                 768: { slidesPerView: 2 },
                 480: { slidesPerView: 1 },
             }
         });
     </script>
  </body>
</html>
