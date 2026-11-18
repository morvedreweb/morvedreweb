@props(['service'])

<article id="{{ $service->slug }}" @class(['plan', 'plan-main' => $service->destacado])>
  @if ($service->destacado)
    <p class="plan-flag">El más pedido</p>
  @endif

  <h3>{{ $service->nombre }}</h3>
  <p class="plan-for">{{ $service->resumen }}</p>

  <ul>
    @foreach ($service->incluye as $item)
      <li>{{ $item }}</li>
    @endforeach
  </ul>

  <a href="{{ route('home') }}#solicitar" @class(['btn', 'btn-orange' => $service->destacado, 'btn-outline' => ! $service->destacado])>
    Pedir información
  </a>
</article>
