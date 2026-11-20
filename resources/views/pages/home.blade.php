@extends('layouts.app')

@section('title', 'Diseño web en Sagunto para negocios | morvedreweb')
@section('description', 'Diseño web en Sagunto y el Camp de Morvedre: hacemos la web de tu negocio y la mantenemos cada mes, con dominio, hosting y Google incluidos.')
@section('og_title', 'morvedreweb | Webs que dan ganas de entrar')
@section('og_description', 'Webs para negocios, hechas a medida y mantenidas cada mes. Desde Sagunto, para cualquier sitio.')

@push('preload')
  <link rel="preload" href="{{ asset('fonts/unbounded-latin-800-normal.woff2') }}" as="font" type="font/woff2" crossorigin>
@endpush

@php
  // Datos estructurados para Google (schema.org). Revisad areaServed: solo zonas donde trabajéis de verdad.
  // Cuando tengáis la ficha de Google Business Profile, añadid su enlace en 'sameAs'.
  $negocio = [
      '@context'    => 'https://schema.org',
      '@type'       => 'ProfessionalService',
      '@id'         => url('/') . '#negocio',
      'name'        => 'morvedreweb',
      'description' => 'Diseño web en Sagunto: creamos y mantenemos páginas web para negocios del Camp de Morvedre y Valencia por una cuota mensual.',
      'url'         => url('/'),
      'logo'        => asset('img/logo.png'),
      'image'       => asset('img/og-image.png'),
      'telephone'   => '+34691200175',
      'email'       => 'morvedreweb@gmail.com',
      'address'     => [
          '@type'           => 'PostalAddress',
          'addressLocality' => 'Sagunto',
          'addressRegion'   => 'Valencia',
          'addressCountry'  => 'ES',
      ],
      'areaServed'  => [
          ['@type' => 'City', 'name' => 'Sagunto'],
          ['@type' => 'City', 'name' => 'Canet d\'en Berenguer'],
          ['@type' => 'City', 'name' => 'Puçol'],
          ['@type' => 'AdministrativeArea', 'name' => 'Camp de Morvedre'],
          ['@type' => 'City', 'name' => 'Valencia'],
      ],
      'priceRange'  => '90€-600€ + mantenimiento mensual',
      // 'sameAs'   => ['https://g.page/...'],
  ];
@endphp

@push('head')
  <script type="application/ld+json">
{!! json_encode($negocio, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_PRETTY_PRINT) !!}
  </script>
@endpush

@section('hero')
  <div class="hero-grid wrap">
      <div class="hero-copy">
        <p class="hero-pre">Diseño web en Sagunto para pymes y negocios</p>
        <h1 class="hero-title">
          <span class="line"><span>Webs que dan</span></span>
          <span class="line"><span>ganas de entrar</span></span>
          <span class="line"><span>a tu <span class="rot-word">panadería</span></span></span>
        </h1>
        <p class="hero-sub">Te enseñamos una maqueta de tu web gratis. Si te gusta, la publicamos y la cuidamos cada mes. Tú solo nos escribes cuando quieras cambiar algo.</p>
        <div class="hero-actions">
          <a href="#solicitar" class="btn btn-dark js-open-form">Solicitar maqueta de mi web</a>
          <a href="#precios" class="btn btn-light">Ver precios</a>
        </div>
      </div>

      <div class="stage" aria-hidden="true">
        <div class="stage-inner">
          <div class="laptop">
            <div class="laptop-screen">
              <div class="browser-bar"><i></i><i></i><i></i><span class="url">forn-lamuralla.es</span></div>
              <div class="screen" data-screen="hero"></div>
            </div>
            <div class="laptop-base"></div>
          </div>
          <div class="phone">
            <div class="screen is-phone" data-screen="hero"></div>
          </div>
          <div class="chip chip-msg">
            <span class="chip-wa"></span>
            <span><b>Nuevo mensaje</b><br><span class="chip-text">¿Me guardáis dos barras?</span></span>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('content')
  {{-- pega desde <section class="portfolio"> hasta el final de <section class="faq"> --}}
    <section class="portfolio" id="proyectos">
      <div class="wrap">
        <div class="portfolio-head">
          <h2>Proyectos</h2>
          <p>Cinco negocios inventados para que veas cómo trabajamos: cada uno con su diseño, sus colores y lo que de verdad necesita. Pronto, aquí, los de nuestros primeros clientes.</p>
        </div>

        <div class="showcase">
          <div class="show-tabs" role="tablist" aria-label="Proyectos de muestra"></div>
          <div class="show-stage" aria-hidden="true">
            <div class="show-desk">
              <div class="window-bar"><i></i><i></i><i></i><span class="window-url"></span></div>
              <div class="screen" data-screen="show"></div>
            </div>
            <div class="show-phone"><div class="screen is-phone" data-screen="show"></div></div>
          </div>
          <div class="show-note" role="tabpanel" aria-live="polite">
            <p class="show-brief"></p>
            <ul class="show-list"></ul>
          </div>
        </div>
      </div>
    </section>

    <section class="process" id="proceso">
      <div class="wrap">
        <div class="process-head">
          <h2>Cómo trabajamos</h2>
          <p>Así sería con una peluquería, de la primera llamada a la web publicada. Unas dos semanas, y sin pagar nada hasta que te guste.</p>
        </div>
        <ol class="steps">
          <li>
            <div class="step-art art-chat" aria-hidden="true">
              <p class="bubble">Hola, tengo una peluquería en Sagunto. ¿Me hacéis la web?</p>
              <p class="bubble ours">Claro. ¿Te llamamos mañana a las 10?</p>
              <p class="bubble">Perfecto, hablamos</p>
            </div>
            <p class="step-meta"><span class="step-n">1</span>Día 1</p>
            <h3>Nos cuentas tu negocio</h3>
            <p>Una llamada o un café de 15 minutos: qué haces, a quién quieres llegar y qué te gusta.</p>
            <p class="step-you">Tú: contarnos tu negocio</p>
          </li>
          <li>
            <div class="step-art art-mock" aria-hidden="true">
              <div class="mock-phone"><div class="screen is-phone" data-screen="step"></div></div>
              <p class="bubble">¡Me encanta! Cambiad el rosa por uno más oscuro</p>
            </div>
            <p class="step-meta"><span class="step-n">2</span>2-3 días</p>
            <h3>Te enseñamos la maqueta</h3>
            <p>Diseñamos tu web y te la enseñamos funcionando, en tu móvil. Gratis y sin compromiso.</p>
            <p class="step-you">Tú: decirnos qué te parece</p>
          </li>
          <li>
            <div class="step-art art-files" aria-hidden="true">
              <div class="photos"><span></span><span></span><span></span></div>
              <ul>
                <li>Fotos del local</li>
                <li>Lista de precios</li>
                <li>Horario y reservas</li>
              </ul>
            </div>
            <p class="step-meta"><span class="step-n">3</span>1 semana</p>
            <h3>La terminamos contigo</h3>
            <p>Añadimos tus fotos, textos, servicios y lo que necesites: reservas, citas, carta o catálogo.</p>
            <p class="step-you">Tú: pasarnos fotos y datos</p>
          </li>
          <li>
            <div class="step-art art-google" aria-hidden="true">
              <p class="g-search">peluquería sagunto</p>
              <div class="g-result">
                <p class="g-name">Estudio Nura</p>
                <p class="g-url">estudionura.es</p>
                <p class="g-open">Abierto ahora</p>
                <p class="g-actions"><span>Sitio web</span><span>Llamar</span><span>Cómo llegar</span></p>
              </div>
            </div>
            <p class="step-meta"><span class="step-n">4</span>2 semanas</p>
            <h3>Publicada y en Google</h3>
            <p>Con tu dominio, tu ficha de Google al día y probada en móvil y ordenador. Desde ahí, la mantenemos nosotros.</p>
            <p class="step-you">Tú: nada más</p>
          </li>
        </ol>
        <div class="process-cta">
          <a href="#solicitar" class="btn btn-orange btn-xl js-open-form">Solicitar maqueta de mi web</a>
        </div>
      </div>
    </section>

    <section class="pricing" id="precios">
      <div class="wrap">
        <div class="pricing-head">
          <h2>Precios</h2>
          <p>Pagas la web una sola vez y después una cuota al mes para mantenerla. IVA incluido.</p>
        </div>

        <div class="plans">
          <article class="plan">
            <h3>Esencial</h3>
            <p class="plan-for">Para estar bien presente: quién eres, dónde estás y cuándo abres.</p>
            <div class="price">
              <p><b>90 €</b>la web, una vez</p>
              <p class="monthly">+ 30 € al mes de mantenimiento</p>
            </div>
            <ul>
              <li>Web de una página</li>
              <li>Ficha de Google configurada</li>
              <li>Botón de WhatsApp y llamada</li>
              <li>2 cambios al mes</li>
            </ul>
            <a href="#solicitar" class="btn btn-outline js-open-form" data-plan="Esencial">Lo quiero</a>
          </article>

          <article class="plan plan-main">
            <p class="plan-flag">Recomendado</p>
            <h3>Profesional</h3>
            <p class="plan-for">Para que la web te traiga clientes: clínicas, talleres, academias, restaurantes.</p>
            <div class="price">
              <p><b>210 €</b>la web, una vez</p>
              <p class="monthly">+ 60 € al mes de mantenimiento</p>
            </div>
            <ul>
              <li>Web de hasta 6 secciones</li>
              <li>Reservas y citas online</li>
              <li>Google y SEO local cada mes</li>
              <li>Cambios sin límite</li>
            </ul>
            <a href="#solicitar" class="btn btn-orange js-open-form" data-plan="Profesional">Lo quiero</a>
          </article>

          <article class="plan">
            <h3>Completo</h3>
            <p class="plan-for">Para pymes que quieren llegar más lejos, también desde el móvil de sus clientes.</p>
            <div class="price">
              <p><b>600 €</b>la web, una vez</p>
              <p class="monthly">+ 150 € al mes de mantenimiento</p>
            </div>
            <ul>
              <li>Todo lo del Profesional</li>
              <li>Web instalable como app en el móvil</li>
              <li>Catálogo, carta digital o tienda</li>
              <li>Informe mensual de resultados</li>
            </ul>
            <a href="#solicitar" class="btn btn-outline js-open-form" data-plan="Completo">Lo quiero</a>
          </article>
        </div>

        <p class="plans-hint">Desliza para ver los tres planes</p>
        <p class="always">Siempre incluido en el mantenimiento: dominio a tu nombre, hosting, certificado de seguridad, copias de seguridad y textos legales (aviso legal, privacidad y cookies).</p>
      </div>
    </section>

    <section class="faq" id="preguntas">
      <div class="wrap faq-grid">
        <h2>Lo que nos suelen preguntar</h2>
        <div class="faq-list">
          <details>
            <summary>¿La web es mía?</summary>
            <p>Sí. El dominio va a tu nombre desde el primer día y la web la pagas tú, así que es tuya.</p>
          </details>
          <details>
            <summary>¿Y si un día quiero dejar el mantenimiento?</summary>
            <p>Nos avisas con un mes de antelación. La web y el dominio son tuyos: te damos una copia de todo para que la lleve quien quieras.</p>
          </details>
          <details>
            <summary>¿Me aseguráis salir el primero en Google?</summary>
            <p>No, y desconfía de quien te lo prometa. Hacemos todo lo que depende de nosotros para que subas, y cada mes te enseñamos cómo va.</p>
          </details>
          <details>
            <summary>¿Cómo pido un cambio?</summary>
            <p>Por WhatsApp o por correo. Los cambios pequeños los hacemos en uno o dos días laborables.</p>
          </details>
          <details>
            <summary>Ya tengo web. ¿Podéis mejorarla?</summary>
            <p>Sí. La miramos gratis y te decimos qué cambiaríamos. Si sale mejor hacerla de nuevo, te enseñamos la maqueta antes.</p>
          </details>
        </div>
      </div>
    </section>

  <x-cta titulo="¿Vemos cómo quedaría tu web?" texto="Dinos qué negocio tienes y te preparamos una maqueta gratis.">
    <a class="btn btn-dark btn-xl js-open-form" href="#solicitar">Solicitar maqueta de mi web</a>
    <a class="btn btn-light btn-xl js-wa" href="https://wa.me/34691200175">
      <x-icon-whatsapp />
      Escríbenos por WhatsApp
    </a>
    <x-slot:pie>
      O llámanos al <a href="tel:+34691200175">691 20 01 75</a> y escríbenos a <a href="mailto:morvedreweb@gmail.com">morvedreweb@gmail.com</a>
    </x-slot:pie>
  </x-cta>
@endsection

@section('modal')
  {{-- pega el <div class="form-overlay" id="solicitar"> ... </div> completo --}}
    <div class="form-overlay" id="solicitar" role="dialog" aria-modal="true" aria-labelledby="form-title" hidden>
    <div class="form-shell">
      <button class="form-close" type="button" aria-label="Cerrar">
        <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/></svg>
      </button>

      <div class="form-side">
        <h2 id="form-title">Solicita la maqueta de tu web</h2>
        <p>Gratis y sin compromiso. Te la enseñamos funcionando en 2-3 días.</p>
        <ul>
          <li>Diseño a medida para tu negocio</li>
          <li>Pagas solo si te gusta</li>
          <li>Te contestamos en menos de 24 horas</li>
        </ul>
        <p class="form-alt">¿Prefieres hablar? <a class="js-wa" href="https://wa.me/34691200175">WhatsApp</a> o <a href="tel:+34691200175">691 20 01 75</a></p>
      </div>

      <form class="lead-form" action="{{ route('solicitud.store') }}" method="POST" novalidate>
        @csrf
        <div class="row">
          <label>Tu nombre<input name="nombre" autocomplete="name" required></label>
          <label>Nombre del negocio<input name="negocio" autocomplete="organization" required></label>
        </div>
        <div class="row">
          <label>Teléfono<input name="telefono" type="tel" autocomplete="tel" required></label>
          <label>Correo <span class="opt">(opcional)</span><input name="email" type="email" autocomplete="email"></label>
        </div>
        <div class="row">
          <label>Sector
            <select name="sector">
              <option>Restaurante o bar</option>
              <option>Clínica o salud</option>
              <option>Taller</option>
              <option>Estética o peluquería</option>
              <option>Comercio</option>
              <option>Servicios profesionales</option>
              <option>Otro</option>
            </select>
          </label>
          <label>Plan que te interesa
            <select name="plan">
              <option>Aún no lo sé</option>
              <option>Esencial</option>
              <option>Profesional</option>
              <option>Completo</option>
            </select>
          </label>
        </div>
        <label>¿Ya tienes web? <span class="opt">(pega el enlace si tienes)</span><input name="web_actual" type="text" inputmode="url"></label>
        <label>¿Algo que debamos saber? <span class="opt">(opcional)</span><textarea name="mensaje" rows="3"></textarea></label>
        <label class="check"><input type="checkbox" name="privacidad" required> <span>He leído y acepto la <a href="{{ route('legal.privacidad') }}" target="_blank">política de privacidad</a>.</span></label>
        <p class="opt" style="font-size: .8rem; line-height: 1.4;">
          Responsable: morvedreweb. Finalidad: responder a tu solicitud y prepararte la maqueta.
          Legitimación: medidas precontractuales a petición tuya. Destinatarios: Resend (EE. UU., con garantías adecuadas) para hacernos llegar el formulario.
          Derechos: acceso, rectificación, supresión y otros, en morvedreweb@gmail.com.
          Más información en la <a href="{{ route('legal.privacidad') }}" target="_blank">política de privacidad</a>.
        </p>
        <input type="text" name="_honey" class="honey" tabindex="-1" autocomplete="off" aria-hidden="true">
        <p class="form-error" role="alert" hidden></p>
        <button class="btn btn-orange btn-xl" type="submit">Solicitar maqueta gratis</button>
      </form>

      <div class="form-done" hidden>
        <h2>¡Recibido!</h2>
        <p>Te escribimos en menos de 24 horas para hablar de tu web.</p>
        <button class="btn btn-dark form-close-2" type="button">Volver a la web</button>
      </div>

      <div class="form-fallback" hidden>
        <h2>Casi listo</h2>
        <p>No hemos podido enviar el formulario desde aquí. Pulsa el botón y nos llega por WhatsApp con tus datos.</p>
        <a class="btn btn-dark btn-xl fallback-wa" href="#">Enviar por WhatsApp</a>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="{{ asset('js/sites.js') }}"></script>
@endpush
