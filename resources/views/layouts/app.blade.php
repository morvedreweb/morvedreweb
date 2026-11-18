<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  @hasSection('description')
    <meta name="description" content="@yield('description')">
  @endif
  @stack('meta')
  <meta name="theme-color" content="#FF7A1A">
  <link rel="icon" href="{{ asset('img/favicon.svg') }}" type="image/svg+xml">
  @stack('preload')
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  @stack('styles')
  @stack('head')
</head>
<body>
  <a class="skip" href="#main">Saltar al contenido</a>

  <header class="hero @yield('hero_class')" id="top">
    @include('partials.nav')
    @yield('hero')
  </header>

  <main id="main" @hasSection('main_class') class="@yield('main_class')" @endif>
    @yield('content')
  </main>

  @yield('modal')

  @include('partials.footer')

  @stack('scripts')
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
