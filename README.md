# Sixtus Modern Demo

Denne repo indeholder et moderne demo‑design til **Sixtus Compliance** i to varianter:

- **WordPress classic theme** i `wp-theme/sixtus-modern-demo`
- **Statisk HTML/CSS/JS demo** i `static-demo`

Alt indhold og styling er holdt ens mellem de to varianter.

---

## ✅ Projektstruktur

```
Demo af Sixtus/
├─ static-demo/                 # Statisk demo (HTML/CSS/JS)
│  ├─ assets/
│  │  ├─ css/                    # styles.css + tokens.css
│  │  ├─ images/                 # logo, favicon, team fotos, ikoner
│  │  └─ js/                     # main.js
│  ├─ index.html
│  ├─ compliance.html
│  ├─ technologies.html
│  ├─ about.html
│  ├─ team.html
│  ├─ partners.html
│  ├─ contact.html
│  └─ privacy-policy.html
└─ wp-theme/
   └─ sixtus-modern-demo/        # WordPress tema
      ├─ assets/
      │  ├─ css/                 # theme.css + tokens.css
      │  ├─ images/              # logo, favicon, team fotos, ikoner
      │  └─ js/                  # main.js
      ├─ header.php
      ├─ footer.php
      ├─ page-*.php               # side‑skabeloner
      └─ template-parts/          # del‑sektioner
```

---

## ✅ Statisk demo (lokal preview)

1. Gå til `static-demo/` mappen.
2. Start en lokal server (rekommenderet så billeder/JS loader korrekt):

```bash
python3 -m http.server 8000
```

3. Åbn i browser:

```bash
http://localhost:8000/index.html
```

### Kontaktformular (demo)
Formularen er demo‑only og posts ikke til serveren. JavaScript forhindrer POST og viser en success‑besked.
- Script: `static-demo/assets/js/main.js`
- Markup: `static-demo/contact.html`

---

## ✅ WordPress theme (lokal install)

1. Kopiér mappen `wp-theme/sixtus-modern-demo` til WordPress:

```
wp-content/themes/sixtus-modern-demo
```

2. Aktivér temaet i WordPress Admin → **Appearance → Themes**.
3. Opret sider og vælg template:

| Side | Template |
|------|----------|
| Home | Brug som *Front Page* |
| Compliance | **Compliance** |
| Technologies | **Technologies** |
| About Sixtus | **About Sixtus** |
| Our team | **Our Team** |
| Partners | **Partners** |
| Contact | **Contact** |

4. Opret menuer:

| Menu | Placering |
|------|-----------|
| Primary Menu | Primary Menu |
| Footer Menu | Footer Menu |

---

## 🎨 Design tokens (farver/typografi)

Brand tokens ligger her:
- `static-demo/assets/css/tokens.css`
- `wp-theme/sixtus-modern-demo/assets/css/tokens.css`

Skift farver og typografi direkte i CSS‑variablerne.

---

## 🖼️ Logo & favicon

Logo og favicon peger nu på `cannon.png`:
- Statisk: `static-demo/assets/images/cannon.png`
- WordPress: `wp-theme/sixtus-modern-demo/assets/images/cannon.png`

Hvis du vil erstatte logoet, så læg en ny fil i begge mapper og opdater:
- **Statisk:** alle HTML‑filer (logo + favicon)
- **WP:** `header.php` (favicon + logo) og `footer.php` (logo)

---

## 🌍 Sprogskifte (DA/EN)

Sprogskiftet styres i `main.js` i begge versioner:
- Statisk: `static-demo/assets/js/main.js`
- WP: `wp-theme/sixtus-modern-demo/assets/js/main.js`

Tekster bruger `data-lang-en` og `data-lang-da` attributter. Eksempel:
```
<h1 data-lang-en="Contact" data-lang-da="Kontakt">Contact</h1>
```

---

## 🧭 Navigation

Der er aktiv “current page” styling i menu og mobilmenu:
- Automatisk via `main.js`
- Styling i `styles.css` + `theme.css`

---

## ✅ Fejlfinding

**404 på billeder:**
- Start server i `static-demo/` (ikke i root‑mappen).

**501 på kontaktform:**
- `http.server` understøtter ikke POST. Formularen kører derfor demo‑mode.

**Cache problemer:**
- Luk preview‑fanen og åbn igen, eller rydd browser cache.

---

## ✅ Indhold og sider

- Home
- Compliance (med anchor‑sektioner)
- Technologies
- About
- Our team (med bios + LinkedIn)
- Partners
- Contact
- Privacy policy

---

## 🧩 Komponenter

- Sticky header + dropdown nav
- Mobilmenu
- Cards og grids
- CTA panel
- Accordion
- Kontaktformular (demo)
- Team cards med ekspanderbare bios

---

Hvis du vil, kan jeg også tilføje build‑scripts, linting eller deploy‑guide.
