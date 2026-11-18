<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::ordenados()->get();

        return view('services.index', compact('services'));
    }
}
