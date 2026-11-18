<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $servicios = [
            [
                'slug' => 'diseno-web',
                'nombre' => 'Diseño y desarrollo web',
                'resumen' => 'Tu web hecha a medida, sin plantillas, pensada para que te escriban.',
                'incluye' => ['Maqueta gratis antes de pagar', 'Adaptada a móvil, tablet y ordenador', 'Tus textos, fotos y colores', 'Publicada en unas dos semanas'],
            ],
            [
                'slug' => 'seo-local',
                'nombre' => 'SEO y ficha de Google',
                'resumen' => 'Que te encuentren cuando buscan lo que haces cerca de ti.',
                'incluye' => ['Ficha de Google configurada', 'SEO local cada mes', 'Reseñas y horarios al día', 'Informe mensual de resultados'],
                'destacado' => true,
            ],
            [
                'slug' => 'google-ads',
                'nombre' => 'Campañas de Google Ads',
                'resumen' => 'Anuncios en Google para conseguir clientes desde el primer día.',
                'incluye' => ['Campañas de búsqueda local', 'Presupuesto controlado', 'Seguimiento de llamadas y mensajes', 'Ajustes cada mes'],
            ],
            [
                'slug' => 'reservas',
                'nombre' => 'Reservas y citas online',
                'resumen' => 'Tus clientes reservan a cualquier hora, sin llamarte.',
                'incluye' => ['Calendario con tu disponibilidad', 'Confirmación automática', 'Recordatorios al cliente', 'Gestión de cancelaciones'],
            ],
            [
                'slug' => 'pagos',
                'nombre' => 'Pagos online y tienda',
                'resumen' => 'Cobra señales, reservas o pedidos desde tu web.',
                'incluye' => ['Pago con tarjeta y Bizum', 'Catálogo o carta digital', 'Tienda online sencilla', 'Avisos de cada pedido'],
            ],
            [
                'slug' => 'mantenimiento',
                'nombre' => 'Mantenimiento mensual',
                'resumen' => 'Nos encargamos de todo para que tú solo nos escribas cuando quieras cambiar algo.',
                'incluye' => ['Dominio a tu nombre y hosting', 'Certificado de seguridad', 'Copias de seguridad', 'Cambios por WhatsApp o correo'],
            ],
        ];

        foreach ($servicios as $orden => $servicio) {
            Service::updateOrCreate(
                ['slug' => $servicio['slug']],
                $servicio + ['orden' => $orden]
            );
        }
    }
}
