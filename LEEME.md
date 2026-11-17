# morvedreweb

Web estática: HTML, CSS y JavaScript sin frameworks. Para verla en local basta con abrir `index.html`, aunque es mejor usar un servidor (por ejemplo, Live Server en VS Code) para que carguen las fuentes.

```
index.html          portada
conocenos.html      página del equipo
aviso-legal.html    aviso legal
privacidad.html     política de privacidad
cookies.html        política de cookies
css/styles.css      estilos comunes (los colores están arriba, en :root)
css/conocenos.css   estilos solo de Conócenos
css/legal.css       estilos de las páginas legales
js/sites.js         proyectos de muestra (negocios inventados)
js/main.js          menú, cabecera, proyectos, pasos y formulario de maqueta
fonts/              Unbounded y Figtree, alojadas en la propia web
img/favicon.svg     icono de la pestaña
```

## Pendiente antes de publicar

- Fotos del equipo en `conocenos.html` (ahora salen las iniciales). Revisad que los roles os parezcan bien.
- Dominio: `https://www.morvedreweb.es/` sale en `index.html` (canonical y datos para Google). Cambiadlo si compráis otro.
- Páginas legales: están hechas, pero los datos del titular (nombre o razón social, NIF y domicilio) y el proveedor de hosting están marcados en amarillo. Rellenadlos cuando os deis de alta y que los revise vuestra gestoría.
- Formulario: envía las solicitudes a morvedreweb@gmail.com con FormSubmit (gratis, sin servidor). La primera vez que alguien lo use, FormSubmit manda un correo de activación a esa cuenta: hay que confirmarlo o no llegará nada. Si el envío falla, el formulario ofrece mandar lo mismo por WhatsApp. El correo está en `js/main.js` (`FORM_EMAIL`).
- Proyectos: son de muestra. Cuando tengáis clientes reales, cambiadlos en `js/sites.js` (se actualizan solos en la cabecera y en Proyectos) y quitad la etiqueta «Proyecto de muestra».
- Precios: están en `index.html` (sección `#precios`) y en los datos para Google (`priceRange`).
- El número de WhatsApp está en `js/main.js` (`WHATSAPP`) y en los enlaces `tel:` del HTML.

## Publicarla gratis

Cloudflare Pages, Netlify o GitHub Pages: se sube la carpeta tal cual y se conecta el dominio.
