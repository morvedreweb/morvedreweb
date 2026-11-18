@extends('layouts.legal')

@section('title', 'Aviso legal | morvedreweb')
@section('legal_title', 'Aviso legal')
@section('legal_intro', 'Información sobre quién está detrás de esta web y las condiciones para usarla.')

@section('legal_content')
  {{-- pega TODO lo que hay dentro de <article class="legal-text"> de aviso-legal.html --}}
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aviso legal | morvedreweb</title>
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
      <h1>Aviso legal</h1>
      <p>Información sobre quién está detrás de esta web y las condiciones para usarla.</p>
    </div>
  </header>

  <main id="main" class="legal">
    <div class="wrap legal-grid">
      <aside class="legal-nav" aria-label="Textos legales">
        <a href="aviso-legal.html" aria-current="page">Aviso legal</a>
        <a href="privacidad.html">Privacidad</a>
        <a href="cookies.html">Cookies</a>
        <p class="updated">Última actualización: noviembre de 2026</p>
      </aside>
      <article class="legal-text">

        <h2>1. Quiénes somos</h2>
        <p>En cumplimiento de la Ley 34/2002, de servicios de la sociedad de la información y de comercio electrónico (LSSI-CE), estos son los datos del titular de morvedreweb.es:</p>
        <ul class="data">
          <li><b>Titular:</b> <mark class="todo">nombre y apellidos o razón social</mark></li>
          <li><b>NIF:</b> <mark class="todo">NIF</mark></li>
          <li><b>Domicilio:</b> <mark class="todo">dirección completa</mark></li>
          <li><b>Correo:</b> <a href="mailto:morvedreweb@gmail.com">morvedreweb@gmail.com</a></li>
          <li><b>Teléfono:</b> <a href="tel:+34691200175">691 20 01 75</a></li>
        </ul>

        <h2>2. Para qué sirve esta web</h2>
        <p>Esta web da a conocer los servicios de morvedreweb: diseño, desarrollo y mantenimiento de páginas web para negocios. Navegar por ella es gratuito y no hace falta registrarse.</p>

        <h2>3. Uso de la web</h2>
        <p>Al usar esta web te comprometes a hacerlo de forma lícita y a no dañar su funcionamiento ni el de los equipos de otras personas. Podemos cambiar el contenido y el diseño de la web en cualquier momento.</p>

        <h2>4. Propiedad intelectual</h2>
        <p>Los textos, el diseño, el logotipo, el código y el resto de elementos de esta web son de morvedreweb o se usan con permiso. No se pueden copiar, distribuir ni modificar sin nuestra autorización por escrito. Los negocios que aparecen en los ejemplos son inventados.</p>

        <h2>5. Responsabilidad</h2>
        <p>Intentamos que la información de esta web sea correcta y esté al día, pero no podemos garantizar que no haya errores. No nos hacemos responsables de los daños que pueda causar un uso indebido de la web ni de interrupciones del servicio ajenas a nosotros.</p>

        <h2>6. Enlaces a otras webs</h2>
        <p>Esta web tiene enlaces a servicios de terceros, como WhatsApp. No controlamos esos servicios y no somos responsables de su contenido ni de cómo tratan tus datos.</p>

        <h2>7. Ley aplicable</h2>
        <p>Este aviso legal se rige por la ley española. Para cualquier conflicto, las partes se someten a los juzgados y tribunales que correspondan según la ley; si eres consumidor, los de tu domicilio.</p>

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
