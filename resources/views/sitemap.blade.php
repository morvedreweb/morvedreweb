{!! '<' . '?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ([route('home'), route('services.index'), route('about')] as $url)
  <url>
    <loc>{{ $url }}</loc>
  </url>
@endforeach
@foreach ($services as $service)
  <url>
    <loc>{{ route('services.show', $service) }}</loc>
    @if ($service->updated_at)
    <lastmod>{{ $service->updated_at->toAtomString() }}</lastmod>
    @endif
  </url>
@endforeach
</urlset>
