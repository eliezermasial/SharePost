<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <title>Admin Dashboard</title>

    <!-- Dashboard - Links -->
    @include('back.partials.styles')
    <!--# Fin Dashbord Link #}-->

    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    
  </head>

  <body class="">
    <!-- Main wrapper #-->
    <div class="main-wrapper">
      <!-- {# Debut Header #}-->

      @include('back.partials.header')

      <!--{# Fin Header #} -->

      <!--# Debut Sidebar #}-->
      @include('back.partials.sidebar')
      <!--{# Fin Sidebar #}-->
      
      <!--{# Contenu de la page #-->
      
      <div class="page-wrapper tw-bg-[#c2fcf650]">
        <div class="content container-fluid">
            <div class="page-header">
                @yield('dashboard-header-title')
            </div>
            @yield('Dashboard-content')
        </div>
    </div>
      <!-- # Fin Contenu de la page #-->
    </div>
    <!-- # Scripts dashboard # -->
    @include('back.partials.scripts')
    <!-- # Fin Script Dashboard #-->
  </body>
</html>
