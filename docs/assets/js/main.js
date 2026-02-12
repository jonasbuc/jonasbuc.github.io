document.addEventListener('DOMContentLoaded', () => {
  // Mobile navigation toggle (opens the stacked nav panel on small screens).
  const toggle = document.querySelector('[data-nav-toggle]');
  const mobilePanel = document.querySelector('[data-mobile-panel]');

  if (toggle && mobilePanel) {
    toggle.addEventListener('click', () => {
      const isOpen = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!isOpen));
      mobilePanel.style.display = isOpen ? 'none' : 'flex';
    });
  }

  // Accordion controls (used on service FAQ-style sections).
  document.querySelectorAll('[data-accordion] .accordion-button').forEach((button) => {
    button.addEventListener('click', () => {
      const item = button.closest('.accordion-item');
      if (!item) return;
      const isActive = item.classList.contains('active');
      item.classList.toggle('active');
      button.setAttribute('aria-expanded', String(!isActive));
    });
  });

  // Language toggle: swaps text between data-lang-en / data-lang-da attributes.
  const langToggle = document.querySelector('[data-lang-toggle]');
  const applyLanguage = (lang) => {
    document.body.classList.toggle('lang-da', lang === 'da');
    document.querySelectorAll('[data-lang-en][data-lang-da]').forEach((el) => {
      const value = lang === 'da' ? el.dataset.langDa : el.dataset.langEn;
      if (!value) return;
      if (el.matches('input, textarea')) {
        el.setAttribute('placeholder', value);
      } else {
        el.textContent = value;
      }
    });
    if (langToggle) {
      const isActive = lang === 'da';
      langToggle.classList.toggle('is-active', isActive);
      langToggle.setAttribute('aria-pressed', String(isActive));
      langToggle.textContent = isActive ? 'DA / EN' : 'EN / DA';
    }
  };

  if (langToggle) {
    const storedLang = localStorage.getItem('sixtus-lang') || 'en';
    applyLanguage(storedLang);
    langToggle.addEventListener('click', () => {
      const nextLang = document.body.classList.contains('lang-da') ? 'en' : 'da';
      localStorage.setItem('sixtus-lang', nextLang);
      applyLanguage(nextLang);
    });
  }

  // Active navigation highlighting for primary + mobile menus.
  const normalizePath = (value) => {
    const cleaned = value.replace(/\/+$/, '');
    return cleaned === '' ? '/' : cleaned;
  };

  const isHomePath = (value) => value === '/' || value === '/index.html';

  const markActiveLinks = () => {
    const currentPath = normalizePath(window.location.pathname || '/');
    document.querySelectorAll('.primary-nav a, [data-mobile-panel] a').forEach((link) => {
      const href = link.getAttribute('href') || '';
      if (!href || href.startsWith('#')) return;
      let targetPath = href;
      try {
        targetPath = new URL(href, window.location.origin).pathname;
      } catch (error) {
        return;
      }
      const normalizedTarget = normalizePath(targetPath);
      const isActive =
        normalizedTarget === currentPath ||
        (isHomePath(normalizedTarget) && isHomePath(currentPath));
      if (isActive) {
        link.classList.add('is-active');
        link.setAttribute('aria-current', 'page');
      }
    });
  };

  markActiveLinks();

  // Demo contact form handler (prevents POST and shows confirmation text).
  document.querySelectorAll('[data-demo-form]').forEach((form) => {
    const status = form.querySelector('[data-form-status]');
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      if (status) {
        const isDa = document.body.classList.contains('lang-da');
        const message = isDa ? status.dataset.langDa : status.dataset.langEn;
        if (message) {
          status.textContent = message;
        }
        status.classList.add('is-visible');
      }
      form.reset();
    });
  });
});
