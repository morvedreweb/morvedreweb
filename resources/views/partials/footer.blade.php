<footer class="footer">
  <div class="wrap footer-inner">
    <x-logo />
    <nav aria-label="Pie">
      <a href="{{ route('services.index') }}">Servicios</a>
      <a href="{{ route('about') }}">Conócenos</a>
      <a href="{{ route('legal.aviso') }}">Aviso legal</a>
      <a href="{{ route('legal.privacidad') }}">Privacidad</a>
      <a href="{{ route('legal.cookies') }}">Cookies</a>
    </nav>
    <p>© <span class="year">{{ date('Y') }}</span> morvedreweb. Todos los derechos reservados.</p>
  </div>
</footer>
