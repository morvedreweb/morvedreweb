@extends('layouts.legal')

@section('title', 'Política de cookies | morvedreweb')
@section('legal_title', 'Política de cookies')
@section('legal_intro', 'Información sobre qué son las cookies y cuáles usa esta web.')

@section('legal_content')
  {{-- pega TODO lo que hay dentro de <article class="legal-text"> de aviso-legal.html --}}
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Política de cookies | morvedreweb</title>
  <meta name="robots" content="noindex, follow">
  <meta name="theme-color" content="#FF7A1A">
  <link rel="icon" href="img/favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/legal.css">
</head>
<body>
  <a class="skip" href="#main">Saltar al contenido</a>

  <header class="hero hero-legal">
    <nav class="topbar wrap" aria-label="Principal">
      <a href="index.html" class="logo" aria-label="morvedreweb, inicio">
        <span class="logo-mark" aria-hidden="true"><svg viewBox="0 0 40 40"><rect class="lm-bg" width="40" height="40" rx="11"/><path class="lm-m" d="M10.5 29V19.5a4.75 4.75 0 0 1 9.5 0V29M20 19.5a4.75 4.75 0 0 1 9.5 0v3.5"/><circle class="lm-dot" cx="29.5" cy="29" r="3.1"/></svg></span>
        <span class="logo-word">morvedre<b>web</b></span>
      </a>
      <div class="links" id="links">
        <a href="index.html#proyectos">Proyectos</a>
        <a href="index.html#proceso">Cómo trabajamos</a>
        <a href="index.html#precios">Precios</a>
        <a href="conocenos.html">Conócenos</a>
      </div>
      <a class="btn btn-dark btn-sm nav-cta" href="index.html#solicitar">Solicitar maqueta</a>
      <button class="burger" aria-expanded="false" aria-controls="links" aria-label="Abrir menú"><span></span><span></span></button>
    </nav>

    <div class="wrap legal-hero">
      <h1>Política de cookies</h1>
      <p>Qué son las cookies y cuáles usa esta web.</p>
    </div>
  </header>

  <main id="main" class="legal">
    <div class="wrap legal-grid">
      <aside class="legal-nav" aria-label="Textos legales">
        <a href="aviso-legal.html">Aviso legal</a>
        <a href="privacidad.html">Privacidad</a>
        <a href="cookies.html" aria-current="page">Cookies</a>
        <p class="updated">Última actualización: noviembre de 2026</p>
      </aside>
      <article class="legal-text">

        <div class="good-news">
            <p class="gn-title">Solo usamos cookies técnicas.</p>
            <p>No usamos cookies de publicidad ni de análisis, ni propias ni de terceros.</p>
            </div>

            <h2>Cookies que usamos</h2>
            <ul>
            <li><b>morvedreweb-session</b>: mantiene tu sesión mientras navegas. Se borra al cabo de 2 horas sin actividad.</li>
            <li><b>XSRF-TOKEN</b>: protege los formularios para que nadie pueda enviarlos en tu nombre desde otra web. Misma duración.</li>
            </ul>
            <p>Son cookies técnicas, necesarias para que la web funcione de forma segura, y por eso no requieren tu consentimiento (artículo 22.2 de la LSSI).</p>
          <p>Ni propias ni de terceros. Por eso no te sale ningún aviso de cookies al entrar.</p>
        </div>

        <h2>1. Qué son las cookies</h2>
        <p>Las cookies son pequeños archivos que algunas webs guardan en tu navegador para recordar cosas, como tus preferencias, o para saber cómo se usa la web.</p>

        <h2>2. Por qué esta web no las necesita</h2>
        <ul>
          <li>No tiene estadísticas de visitas ni herramientas de análisis.</li>
          <li>No tiene publicidad ni botones de redes sociales que rastreen.</li>
          <li>Las fuentes están alojadas en nuestro propio servidor, así que tu navegador no se conecta a Google para cargarlas.</li>
        </ul>
        <p>Si pulsas el botón de WhatsApp, sales de esta web y pasas a WhatsApp, que tiene su propia política de cookies.</p>

        <h2>3. Si esto cambia</h2>
        <p>Si algún día añadimos cookies que no sean imprescindibles, como estadísticas, te pediremos permiso antes con un aviso y actualizaremos esta página con la lista de cookies, para qué sirven y cuánto duran.</p>

        <h2>4. Cómo gestionar las cookies en tu navegador</h2>
        <p>Puedes ver y borrar las cookies de cualquier web desde los ajustes de tu navegador:</p>
        <ul>
          <li><a href="https://support.google.com/chrome/answer/95647?hl=es" rel="noopener">Google Chrome</a></li>
          <li><a href="https://support.mozilla.org/es/kb/Borrar%20cookies" rel="noopener">Mozilla Firefox</a></li>
          <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" rel="noopener">Safari</a></li>
          <li><a href="https://support.microsoft.com/es-es/microsoft-edge" rel="noopener">Microsoft Edge</a></li>
        </ul>

      </article>
    </div>
  </main>

  <footer class="footer">
    <div class="wrap footer-inner">
      <a href="index.html" class="logo" aria-label="morvedreweb, inicio">
        <span class="logo-mark" aria-hidden="true"><svg viewBox="0 0 40 40"><rect class="lm-bg" width="40" height="40" rx="11"/><path class="lm-m" d="M10.5 29V19.5a4.75 4.75 0 0 1 9.5 0V29M20 19.5a4.75 4.75 0 0 1 9.5 0v3.5"/><circle class="lm-dot" cx="29.5" cy="29" r="3.1"/></svg></span>
        <span class="logo-word">morvedre<b>web</b></span>
      </a>
      <nav aria-label="Pie">
        <a href="conocenos.html">Conócenos</a>
        <a href="aviso-legal.html">Aviso legal</a>
        <a href="privacidad.html">Privacidad</a>
        <a href="cookies.html">Cookies</a>
      </nav>
      <p>© <span class="year">2026</span> morvedreweb. Todos los derechos reservados.</p>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>

@endsection
