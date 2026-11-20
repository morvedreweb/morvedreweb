<?php

// Servicios que se muestran en /servicios y en /servicios/{slug}.
// El orden del array es el orden en la web: para añadir, quitar o cambiar un servicio, edita este archivo.
// 'destacado' => true pinta la tarjeta en verde con la etiqueta "El más pedido".
// En producción se cachea con config:cache: tras cambiarlo hay que volver a desplegar.

return [
    [
        'slug' => 'diseno-web',
        'nombre' => 'Diseño y desarrollo web',
        'resumen' => 'Tu web hecha a medida, sin plantillas, pensada para que te escriban.',
        'contenido' => [
            'Diseñamos la web de tu negocio desde cero, sin plantillas compradas: con tus colores, tus fotos y tu forma de hablar a los clientes. Antes de que pagues nada, te enseñamos una maqueta funcionando en tu móvil para que veas cómo quedaría.',
            'Trabajamos con negocios de Sagunto, el Puerto, Canet, Puçol y el resto del Camp de Morvedre, y también con negocios de fuera por videollamada. Si estás cerca, podemos vernos en persona.',
            'Cada web se adapta al móvil, a la tableta y al ordenador, carga rápido y está pensada para que quien entra te llame, te escriba por WhatsApp o reserve. Si ya tienes web, la revisamos gratis y te decimos qué cambiaríamos.',
        ],
        'incluye' => [
            'Maqueta gratis antes de pagar',
            'Adaptada a móvil, tablet y ordenador',
            'Tus textos, fotos y colores',
            'Publicada en unas dos semanas',
        ],
    ],
    [
        'slug' => 'seo-local',
        'nombre' => 'SEO y ficha de Google',
        'resumen' => 'Que te encuentren cuando buscan lo que haces cerca de ti.',
        'contenido' => [
            'El SEO local es lo que hace que te encuentren cuando alguien busca lo que haces cerca de ti: «peluquería en Sagunto», «taller en el Puerto», «restaurante en Canet». Para un negocio de barrio, salir en el mapa de Google suele traer más clientes que cualquier otra cosa.',
            'Configuramos y cuidamos tu ficha de Google Business Profile: categorías, horarios, fotos, servicios y respuestas a las reseñas. En la web trabajamos los títulos, los textos y los datos que Google necesita para entender dónde estás y qué ofreces.',
            'Nadie puede garantizarte la primera posición, y desconfía de quien lo haga. Lo que sí hacemos es trabajar cada mes en lo que depende de nosotros y enseñarte en un informe cómo evolucionan tus visitas y tus contactos.',
        ],
        'incluye' => [
            'Ficha de Google configurada',
            'SEO local cada mes',
            'Reseñas y horarios al día',
            'Informe mensual de resultados',
        ],
        'destacado' => true,
    ],
    [
        'slug' => 'google-ads',
        'nombre' => 'Campañas de Google Ads',
        'resumen' => 'Anuncios en Google para conseguir clientes desde el primer día.',
        'contenido' => [
            'El SEO tarda meses en dar resultados; Google Ads te pone delante de quien está buscando tu servicio desde el primer día. Es la forma más rápida de conseguir llamadas mientras tu web gana posiciones por sí sola.',
            'Preparamos campañas pequeñas y bien acotadas: solo en tu zona, solo con las búsquedas que de verdad traen clientes y con un presupuesto máximo que decides tú. No pagas por mostrar el anuncio, solo cuando alguien hace clic.',
            'Medimos las llamadas, los mensajes y los formularios que llegan desde los anuncios y ajustamos la campaña cada mes para que cada euro rinda más.',
        ],
        'incluye' => [
            'Campañas de búsqueda local',
            'Presupuesto controlado',
            'Seguimiento de llamadas y mensajes',
            'Ajustes cada mes',
        ],
    ],
    [
        'slug' => 'reservas',
        'nombre' => 'Reservas y citas online',
        'resumen' => 'Tus clientes reservan a cualquier hora, sin llamarte.',
        'contenido' => [
            'Si tienes una peluquería, una clínica, un taller o un restaurante, cada llamada para pedir cita es una interrupción. Con un sistema de reservas en tu web, tus clientes eligen día y hora a cualquier hora, también por la noche o en festivo.',
            'Configuramos tu calendario con tus horarios, tus servicios y su duración, para que nunca se solapen dos citas. El cliente recibe la confirmación al momento y un recordatorio antes de venir, y tú ves todas las reservas en un solo sitio.',
            'Si alguien no puede venir, puede cancelar o cambiar la cita desde el enlace del correo, sin llamarte, y el hueco queda libre para otro cliente.',
        ],
        'incluye' => [
            'Calendario con tu disponibilidad',
            'Confirmación automática',
            'Recordatorios al cliente',
            'Gestión de cancelaciones',
        ],
    ],
    [
        'slug' => 'pagos',
        'nombre' => 'Pagos online y tienda',
        'resumen' => 'Cobra señales, reservas o pedidos desde tu web.',
        'contenido' => [
            'Cobrar desde tu web te ahorra tiempo y reduce las citas a las que nadie se presenta. Puedes pedir una señal al reservar, vender bonos o tarjetas regalo o recibir pedidos de tu catálogo.',
            'Integramos pasarelas de pago conocidas para que tus clientes paguen con tarjeta o Bizum de forma segura. El dinero va directamente a tu cuenta; nosotros nunca vemos los datos de pago.',
            'Si lo que necesitas es una carta digital o un catálogo sin pago online, también lo hacemos: tus clientes ven tus productos y precios actualizados y te piden por WhatsApp o por teléfono.',
        ],
        'incluye' => [
            'Pago con tarjeta y Bizum',
            'Catálogo o carta digital',
            'Tienda online sencilla',
            'Avisos de cada pedido',
        ],
    ],
    [
        'slug' => 'mantenimiento',
        'nombre' => 'Mantenimiento mensual',
        'resumen' => 'Nos encargamos de todo para que tú solo nos escribas cuando quieras cambiar algo.',
        'contenido' => [
            'Una web no se termina el día que se publica: hay que renovar el dominio, mantener el hosting, actualizar el certificado de seguridad, hacer copias y cambiar horarios, precios o fotos. Con el mantenimiento mensual, de todo eso nos encargamos nosotros.',
            'Cuando quieras cambiar algo, nos escribes por WhatsApp o por correo y lo hacemos en uno o dos días laborables. El dominio está a tu nombre desde el primer día, así que la web es tuya.',
            'Si un día decides dejar el mantenimiento, nos avisas con un mes de antelación y te damos una copia de todo para que la lleve quien quieras.',
        ],
        'incluye' => [
            'Dominio a tu nombre y hosting',
            'Certificado de seguridad',
            'Copias de seguridad',
            'Cambios por WhatsApp o correo',
        ],
    ],
];
