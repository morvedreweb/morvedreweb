@extends('layouts.legal')

@section('title', 'Política de cookies | morvedreweb')
@section('legal_title', 'Política de cookies')
@section('legal_intro', 'Qué son las cookies y cuáles usa esta web.')

@section('legal_content')
        <div class="good-news">
          <p class="gn-title">Solo usamos cookies técnicas.</p>
          <p>No usamos cookies de publicidad ni de análisis, ni propias ni de terceros. Por eso no te sale ningún aviso de cookies al entrar.</p>
        </div>

        <h2>Cookies que usamos</h2>
        <ul>
          <li><b>morvedreweb-session</b>: mantiene tu sesión mientras navegas. Se borra al cabo de 2 horas sin actividad.</li>
          <li><b>XSRF-TOKEN</b>: protege los formularios para que nadie pueda enviarlos en tu nombre desde otra web. Misma duración.</li>
        </ul>
        <p>Son cookies técnicas, necesarias para que la web funcione de forma segura, y por eso no requieren tu consentimiento (artículo 22.2 de la LSSI).</p>

        <h2>1. Qué son las cookies</h2>
        <p>Las cookies son pequeños archivos que algunas webs guardan en tu navegador para recordar cosas, como tus preferencias, o para saber cómo se usa la web.</p>

        <h2>2. Por qué no usamos más cookies</h2>
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
@endsection
