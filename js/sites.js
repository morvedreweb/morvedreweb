// Webs de ejemplo. Son negocios inventados: cambiadlos por clientes reales cuando los tengáis.
// Se usan en la cabecera y en «Proyectos».

const art = {
  pan: `<svg viewBox="0 0 120 120"><ellipse cx="60" cy="74" rx="48" ry="24" fill="#B9712F"/><ellipse cx="60" cy="66" rx="46" ry="26" fill="#DD9A50"/><ellipse cx="52" cy="58" rx="30" ry="12" fill="#EDB975" opacity=".7"/><path d="M30 60l12 14M50 52l12 16M70 50l12 16" stroke="#9C5A22" stroke-width="5" stroke-linecap="round"/></svg>`,
  diente: `<svg viewBox="0 0 120 120"><path d="M36 26c9-7 18-2 24 0 6-2 15-7 24 0 11 9 7 27 3 37-4 9-4 31-11 31-7 0-7-20-16-20s-9 20-16 20c-7 0-7-22-11-31-4-10-8-28 3-37z" fill="#fff" stroke="#0D3B45" stroke-width="4"/><path d="M44 36c4-3 9-3 12 0" stroke="#17A2A2" stroke-width="4" stroke-linecap="round" fill="none"/></svg>`,
  taller: `<svg viewBox="0 0 120 120"><g transform="translate(60 60)" fill="#FFC21A"><rect x="-7" y="-46" width="14" height="18" rx="3"/><rect x="-7" y="-46" width="14" height="18" rx="3" transform="rotate(45)"/><rect x="-7" y="-46" width="14" height="18" rx="3" transform="rotate(90)"/><rect x="-7" y="-46" width="14" height="18" rx="3" transform="rotate(135)"/><rect x="-7" y="-46" width="14" height="18" rx="3" transform="rotate(180)"/><rect x="-7" y="-46" width="14" height="18" rx="3" transform="rotate(225)"/><rect x="-7" y="-46" width="14" height="18" rx="3" transform="rotate(270)"/><rect x="-7" y="-46" width="14" height="18" rx="3" transform="rotate(315)"/><circle r="34"/><circle r="14" fill="#16181B"/></g></svg>`,
  arroz: `<svg viewBox="0 0 120 120"><rect x="2" y="56" width="22" height="8" rx="4" fill="#2B2B2B"/><rect x="96" y="56" width="22" height="8" rx="4" fill="#2B2B2B"/><ellipse cx="60" cy="62" rx="44" ry="34" fill="#3A3A3A"/><ellipse cx="60" cy="60" rx="38" ry="28" fill="#E3A126"/><path d="M38 52c4-6 10-6 12 0M66 70c4-6 10-6 12 0" stroke="#E86A4A" stroke-width="5" fill="none" stroke-linecap="round"/><circle cx="74" cy="48" r="5" fill="#3E7A3A"/><circle cx="46" cy="70" r="5" fill="#3E7A3A"/><path d="M84 60a9 9 0 0 1 16 0z" fill="#F7E36B"/></svg>`,
  tijeras: `<svg viewBox="0 0 120 120"><circle cx="38" cy="86" r="14" fill="none" stroke="#3A1B2A" stroke-width="7"/><circle cx="82" cy="86" r="14" fill="none" stroke="#3A1B2A" stroke-width="7"/><path d="M46 74L86 18M74 74L34 18" stroke="#3A1B2A" stroke-width="8" stroke-linecap="round"/><circle cx="60" cy="56" r="4" fill="#D9467A"/></svg>`,
};

const sites = [
  {
    tab: "Panadería", word: "panadería", url: "forn-lamuralla.es", msg: "¿Me guardáis dos barras?",
    name: "Forn La Muralla", nav: ["Productos", "Horario", "Encargos"],
    kicker: "Panadería artesana desde 1987", title: "Pan de leña, cada mañana a las 7.",
    cta: "Encarga por WhatsApp", cta2: "Ver productos",
    info: [["Hoy", "Abierto hasta las 20:30"], ["Dónde", "Calle Mayor, 12"], ["Encargos", "Roscón y cocas"]],
    art: "pan",
    brief: "Una panadería de barrio que recibe muchos encargos por teléfono. La web enseña el pan de cada día y los encargos llegan por WhatsApp, ya escritos.",
    includes: ["Encargos por WhatsApp", "Horario que se actualiza", "Productos con fotos"],
    vars: "--bg:#FBF2E4;--fg:#3B2314;--ac:#C8742B;--card:#F3E2C9;--font:Georgia,serif;--blob:46% 54% 42% 58% / 52% 44% 56% 48%",
  },
  {
    tab: "Clínica", word: "clínica", url: "dentalalbada.es", msg: "¿Tenéis cita el jueves?",
    name: "Dental Albada", nav: ["Tratamientos", "Equipo", "Cita"],
    kicker: "Clínica dental", title: "Tu primera visita, sin coste y sin esperas.",
    cta: "Pide cita online", cta2: "Tratamientos",
    info: [["Pago", "Financiación sin intereses"], ["Urgencias", "Te atendemos hoy"], ["Parking", "Gratis para pacientes"]],
    art: "diente",
    brief: "Una clínica que busca pacientes nuevos. Cada tratamiento tiene su página para salir en Google, y la cita se pide en un minuto.",
    includes: ["Cita online", "Página por tratamiento", "Equipo y financiación"],
    vars: "--bg:#EEF8F7;--fg:#0D3B45;--ac:#13A3A0;--card:#DDF0EE;--radius:12px;--blob:24%",
  },
  {
    tab: "Taller", word: "taller", url: "tallerroig.es", msg: "¿Me pasáis presupuesto?",
    name: "Taller Roig", nav: ["Servicios", "Precios", "Cita"],
    kicker: "Taller mecánico multimarca", title: "Revisión y pre-ITV en el mismo día.",
    cta: "Reserva tu cita", cta2: "Precios",
    info: [["Presupuesto", "En menos de 24 h"], ["Extra", "Coche de cortesía"], ["Marcas", "Todas"]],
    art: "taller",
    brief: "Un taller donde siempre preguntan lo mismo: cuánto cuesta y cuándo hay hueco. La web da precios orientativos y deja pedir cita.",
    includes: ["Cita y presupuesto online", "Precios orientativos", "Cómo llegar"],
    vars: "--bg:#16181B;--fg:#F3F3F3;--ac:#FFC21A;--btn-fg:#16181B;--card:#23262A;--radius:6px;--blob:18%;--art-op:.12",
  },
  {
    tab: "Restaurante", word: "restaurante", url: "arroceriabrisa.es", msg: "¿Mesa para 4 el domingo?",
    name: "Arrocería Brisa", nav: ["Carta", "Arroces", "Reservas"],
    kicker: "Arrocería frente al mar", title: "Arroces a leña con vistas al Mediterráneo.",
    cta: "Reserva mesa", cta2: "Ver carta",
    info: [["Terraza", "Junto a la playa"], ["Domingos", "Abierto mediodía"], ["Para llevar", "Encarga tu arroz"]],
    art: "arroz",
    brief: "Un restaurante de playa que se llena los fines de semana. Reservas online, carta siempre al día y arroces para llevar.",
    includes: ["Reservas de mesa", "Carta digital", "Encargos para llevar"],
    vars: "--bg:#F2F7FC;--fg:#0B2A4A;--ac:#0B5CAD;--ac2:#D58A00;--card:#E1ECF7;--blob:50%",
  },
  {
    tab: "Peluquería", word: "peluquería", url: "estudionura.es", msg: "¿Hay hueco el sábado?",
    name: "Estudio Nura", nav: ["Servicios", "Precios", "Reservar"],
    kicker: "Peluquería y estética", title: "Reserva tu cita en 20 segundos.",
    cta: "Reservar ahora", cta2: "Precios",
    info: [["Horario", "Martes a sábado"], ["Online", "Reserva 24 h"], ["Productos", "Veganos"]],
    art: "tijeras",
    brief: "Una peluquería que pierde media mañana cogiendo el teléfono. Ahora los clientes reservan solos, a cualquier hora.",
    includes: ["Reserva 24 horas", "Lista de precios", "Galería de trabajos"],
    vars: "--bg:#FBEFF2;--fg:#3A1B2A;--ac:#D9467A;--card:#F5DDE4;--font:Georgia,serif;--blob:58% 42% 50% 50% / 46% 56% 44% 54%",
  },
];

function siteMarkup(s) {
  const nav = s.nav.map((n) => `<span>${n}</span>`).join("");
  const info = s.info.map(([k, v]) => `<span><b>${k}</b>${v}</span>`).join("");

  return `
    <div class="site" style="${s.vars}">
      <div class="s-nav"><span class="s-logo"><i></i>${s.name}</span><span class="s-links">${nav}</span><span class="s-burger"></span></div>
      <div class="s-hero">
        <div>
          <p class="s-kicker">${s.kicker}</p>
          <p class="s-title">${s.title}</p>
          <span class="s-btn">${s.cta}</span><span class="s-btn2">${s.cta2}</span>
        </div>
        <div class="s-art">${art[s.art]}</div>
      </div>
      <div class="s-info">${info}</div>
    </div>`;
}
