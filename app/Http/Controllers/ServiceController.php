<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class ServiceController extends Controller
{
    public function index()
    {
        $services = $this->servicios();

        return view('services.index', compact('services'));
    }

    public function show(string $slug)
    {
        $servicios = $this->servicios();
        $service = $servicios->firstWhere('slug', $slug);

        // Si el slug no existe, 404 (la ruta ya filtra caracteres raros)
        abort_if(! $service, 404);

        $otros = $servicios->where('slug', '!=', $slug);

        return view('services.show', compact('service', 'otros'));
    }

    // Los servicios viven en config/servicios.php: no hace falta base de datos
    // para 6 elementos que solo cambian cuando editamos la web.
    private function servicios(): Collection
    {
        return collect(config('servicios'));
    }
}
