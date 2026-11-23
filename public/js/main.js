const WHATSAPP = "34691200175";
const reduceMotion = matchMedia("(prefers-reduced-motion: reduce)").matches;



const $ = (sel, root = document) => root.querySelector(sel);
const $$ = (sel, root = document) => [...root.querySelectorAll(sel)];

// Menú en móvil
const burger = $(".burger");
const links = $("#links");

if (burger) {
  burger.addEventListener("click", () => {
    const open = links.classList.toggle("open");
    burger.setAttribute("aria-expanded", open);
    burger.setAttribute("aria-label", open ? "Cerrar menú" : "Abrir menú");
    document.body.classList.toggle("no-scroll", open);
  });
  links.addEventListener("click", (e) => {
    if (e.target.matches("a") && links.classList.contains("open")) burger.click();
  });
}

// WhatsApp con mensaje ya escrito
$$(".js-wa").forEach((a) => {
  const text = "Hola, me gustaría ver una maqueta de la web de mi negocio";
  a.href = `https://wa.me/${WHATSAPP}?text=${encodeURIComponent(text)}`;
});

$$(".year").forEach((el) => (el.textContent = new Date().getFullYear()));

// A partir de aquí, solo la portada
initForm();

if (typeof sites !== "undefined") {
  initHero();
  initPortfolio();
  initProcess();
}

function initHero() {
  const word = $(".rot-word");
  const url = $(".stage .url");
  const msg = $(".chip-text");
  let current = 0;

  // En la cabecera todas las webs están cargadas y se van turnando
  $$('.screen[data-screen="hero"]').forEach((screen) => {
    screen.innerHTML = sites.map(siteMarkup).join("");
    screen.firstElementChild.classList.add("active");
  });

  function next() {
    current = (current + 1) % sites.length;
    const s = sites[current];

    $$('.screen[data-screen="hero"]').forEach((screen) => {
      [...screen.children].forEach((el, i) => el.classList.toggle("active", i === current));
    });

    word.classList.add("leaving");
    url.style.opacity = msg.style.opacity = 0;

    setTimeout(() => {
      word.textContent = s.word;
      url.textContent = s.url;
      msg.textContent = s.msg;
      url.style.opacity = msg.style.opacity = 1;
      word.classList.replace("leaving", "entering");
      requestAnimationFrame(() => requestAnimationFrame(() => word.classList.remove("entering")));
    }, 350);
  }

  if (!reduceMotion) {
    setInterval(() => !document.hidden && next(), 3400);
  }

  // Inclinación con el ratón
  const stage = $(".stage");
  const inner = $(".stage-inner");
  if (!reduceMotion && matchMedia("(pointer: fine)").matches) {
    $(".hero").addEventListener("pointermove", (e) => {
      const r = stage.getBoundingClientRect();
      const x = (e.clientX - r.left - r.width / 2) / innerWidth;
      const y = (e.clientY - r.top - r.height / 2) / innerHeight;
      inner.style.setProperty("--mx", Math.max(-1, Math.min(1, x * 2)).toFixed(3));
      inner.style.setProperty("--my", Math.max(-1, Math.min(1, y * 2)).toFixed(3));
    });
  }
}

function initPortfolio() {
  const tabs = $(".show-tabs");
  if (!tabs) return; // la sección de proyectos se quitó hasta tener clientes reales
  const screens = $$('.screen[data-screen="show"]');
  const url = $(".show-desk .window-url");
  const brief = $(".show-brief");
  const list = $(".show-list");

  tabs.innerHTML = sites
    .map((s, i) => `
      <button role="tab" id="tab-${i}" aria-selected="false" tabindex="-1">
        <span class="tab-name">${s.name}</span>
        <span class="tab-sector">${s.tab}</span>
      </button>`)
    .join("");
  screens.forEach((screen) => (screen.innerHTML = sites.map(siteMarkup).join("")));

  const buttons = $$("button", tabs);

  function show(i) {
    const s = sites[i];
    buttons.forEach((b, j) => {
      b.setAttribute("aria-selected", i === j);
      b.tabIndex = i === j ? 0 : -1;
    });
    screens.forEach((screen) => {
      [...screen.children].forEach((el, j) => el.classList.toggle("active", i === j));
    });
    url.textContent = s.url;
    brief.textContent = s.brief;
    list.innerHTML = s.includes.map((x) => `<li>${x}</li>`).join("");
    $(".show-note").setAttribute("aria-labelledby", `tab-${i}`);
  }

  tabs.addEventListener("click", (e) => {
    const b = e.target.closest("button");
    if (b) show(buttons.indexOf(b));
  });

  // flechas del teclado para moverse entre pestañas
  tabs.addEventListener("keydown", (e) => {
    const i = buttons.indexOf(document.activeElement);
    const step = { ArrowDown: 1, ArrowRight: 1, ArrowUp: -1, ArrowLeft: -1 }[e.key];
    if (i < 0 || !step) return;
    e.preventDefault();
    const next = (i + step + buttons.length) % buttons.length;
    buttons[next].focus();
    show(next);
  });

  show(0);
}

// El paso 2 enseña la maqueta de la peluquería en un móvil
function initProcess() {
  const screen = $('.screen[data-screen="step"]');
  if (!screen) return;
  const nura = sites.find((s) => s.art === "tijeras");
  screen.innerHTML = siteMarkup(nura);
  screen.firstElementChild.classList.add("active");
}

function initForm() {
  const overlay = $("#solicitar");
  if (!overlay) return;
  const form = $(".lead-form", overlay);
  const done = $(".form-done", overlay);
  const fallback = $(".form-fallback", overlay);
  const error = $(".form-error", overlay);
  const submit = $("button[type=submit]", form);
  let lastFocus = null;

  function open(plan) {
    lastFocus = document.activeElement;
    overlay.hidden = false;
    document.body.classList.add("no-scroll");
    if (plan) form.plan.value = plan;
    requestAnimationFrame(() => overlay.classList.add("open"));
    setTimeout(() => form.nombre.focus(), 50);
  }

  function close() {
    overlay.classList.remove("open");
    document.body.classList.remove("no-scroll");
    setTimeout(() => {
      overlay.hidden = true;
      form.hidden = false;
      done.hidden = fallback.hidden = true;
    }, 250);
    if (location.hash === "#solicitar") history.replaceState(null, "", location.pathname);
    lastFocus?.focus();
  }

  $$(".js-open-form").forEach((btn) =>
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      open(btn.dataset.plan);
    })
  );
  $$(".form-close, .form-close-2", overlay).forEach((b) => b.addEventListener("click", close));
  overlay.addEventListener("click", (e) => e.target === overlay && close());
  document.addEventListener("keydown", (e) => e.key === "Escape" && !overlay.hidden && close());
  if (location.hash === "#solicitar") open();

  form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const data = Object.fromEntries(new FormData(form));
    if (data._honey) return;

    const missing = [];
    if (!data.nombre.trim()) missing.push("tu nombre");
    if (!data.negocio.trim()) missing.push("el nombre del negocio");
    if (!/\d{9}/.test(data.telefono.replace(/\D/g, ""))) missing.push("un teléfono válido");
    if (!form.privacidad.checked) missing.push("marcar la casilla de privacidad");
    if (missing.length) {
      error.textContent = `Te falta: ${missing.join(", ")}.`;
      error.hidden = false;
      return;
    }
    error.hidden = true;
    submit.disabled = true;
    submit.textContent = "Enviando…";

    const { _honey, privacidad, ...fields } = data;
        try {
      const res = await fetch(form.action, {
        method: "POST",
        headers: { "Content-Type": "application/json", Accept: "application/json" },
        body: JSON.stringify(data),
      });

      if (res.status === 422) {
        const { errors } = await res.json();
        error.textContent = Object.values(errors).flat().join(" ");
        error.hidden = false;
        return;
      }
      if (res.status === 429) {
        error.textContent = "Has enviado varias solicitudes seguidas. Espera unos minutos o escríbenos por WhatsApp.";
        error.hidden = false;
        return;
      }
      if (!res.ok) throw new Error(res.status);

      form.hidden = true;
      done.hidden = false;
      form.reset();
    } catch {
      const text =
        `Hola, quiero una maqueta de mi web.\n` +
        `Nombre: ${fields.nombre}\nNegocio: ${fields.negocio} (${fields.sector})\n` +
        `Teléfono: ${fields.telefono}\nPlan: ${fields.plan}` +
        (fields.web_actual ? `\nWeb actual: ${fields.web_actual}` : "") +
        (fields.mensaje ? `\n${fields.mensaje}` : "");
      $(".fallback-wa", overlay).href = `https://wa.me/${WHATSAPP}?text=${encodeURIComponent(text)}`;
      form.hidden = true;
      fallback.hidden = false;
    } finally {
      submit.disabled = false;
      submit.textContent = "Solicitar maqueta gratis";
    }
  });
}
