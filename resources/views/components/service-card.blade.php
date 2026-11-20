@props(['service'])

@php($destacado = $service['destacado'] ?? false)

<article id="{{ $service['slug'] }}" @class(['plan', 'plan-main' => $destacado])>
  @if ($destacado)
    <p class="plan-flag">El más pedido</p>
  @endif

  <h3>{{ $service['nombre'] }}</h3>
  <p class="plan-for">{{ $service['resumen'] }}</p>

  <ul>
    @foreach ($service['incluye'] as $item)
      <li>{{ $item }}</li>
    @endforeach
  </ul>

  <a href="{{ route('services.show', $service['slug']) }}" @class(['btn', 'btn-orange' => $destacado, 'btn-outline' => ! $destacado])>
    Ver el servicio
  </a>
</article>
