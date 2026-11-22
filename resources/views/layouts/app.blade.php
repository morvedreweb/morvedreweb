<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  @hasSection('description')
    <meta name="description" content="@yield('description')">
  @endif
  <link rel="canonical" href="{{ url()->current() }}">
  @stack('meta')

  {{-- Vista previa al compartir el enlace (WhatsApp, redes, etc.) --}}
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="morvedreweb">
  <meta property="og:locale" content="es_ES">
  <meta property="og:url" content="{{ url()->current() }}">
  @hasSection('og_title')
    <meta property="og:title" content="@yield('og_title')">
  @else
    <meta property="og:title" content="@yield('title')">
  @endif
  @hasSection('og_description')
    <meta property="og:description" content="@yield('og_description')">
  @else
    @hasSection('description')
      <meta property="og:description" content="@yield('description')">
    @endif
  @endif
  <meta property="og:image" content="{{ asset('img/og-image.png') }}">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="#FF7A1A">
  {{-- Iconos: Google Search usa el favicon cuadrado (mínimo 48x48); /favicon.ico es el que piden muchos rastreadores por defecto --}}
  <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="48x48">
  <link rel="icon" href="{{ asset('img/favicon.svg') }}" type="image/svg+xml">
  <link rel="icon" href="{{ asset('img/favicon-96.png') }}" type="image/png" sizes="96x96">
  <link rel="icon" href="{{ asset('img/favicon-192.png') }}" type="image/png" sizes="192x192">
  <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
  @stack('preload')
  {{-- ?v= cambia cuando cambia el archivo: así el navegador no usa una versión antigua guardada en caché --}}
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v={{ filemtime(public_path('css/styles.css')) }}">
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
  <script src="{{ asset('js/main.js') }}?v={{ filemtime(public_path('js/main.js')) }}"></script>
</body>
</html>
