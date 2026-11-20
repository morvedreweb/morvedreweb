<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SolicitudRequest extends FormRequest
{
    public const SECTORES = [
        'Restaurante o bar', 'Clínica o salud', 'Taller', 'Estética o peluquería',
        'Comercio', 'Servicios profesionales', 'Otro',
    ];

    public const PLANES = ['Aún no lo sé', 'Esencial', 'Profesional', 'Completo'];

    public function authorize(): bool
    {
        return true; // formulario público: cualquiera puede enviarlo
    }

    public function rules(): array
    {
        return [
            'nombre'     => ['required', 'string', 'max:100'],
            'negocio'    => ['required', 'string', 'max:150'],
            'telefono'   => ['required', 'string', 'regex:/^[0-9+\s().-]{9,20}$/'],
            'email'      => ['nullable', 'email:rfc', 'max:150'],
            'sector'     => ['required', Rule::in(self::SECTORES)],
            'plan'       => ['required', Rule::in(self::PLANES)],
            'web_actual' => ['nullable', 'string', 'max:255'],
            'mensaje'    => ['nullable', 'string', 'max:2000'],
            'privacidad' => ['accepted'],
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'     => 'Falta tu nombre.',
            'negocio.required'    => 'Falta el nombre del negocio.',
            'telefono.required'   => 'Falta el teléfono.',
            'telefono.regex'      => 'El teléfono no es válido.',
            'email.email'         => 'El correo no es válido.',
            'sector.in'           => 'Elige un sector de la lista.',
            'plan.in'             => 'Elige un plan de la lista.',
            'privacidad.accepted' => 'Tienes que aceptar la política de privacidad.',
            '*.max'               => 'Uno de los campos es demasiado largo.',
        ];
    }
}
