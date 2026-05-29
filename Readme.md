# AECS Narora — Official School Website

**Atomic Energy Central School, Narora (AECS Narora)** is an English-medium, co-educational school run by the **Atomic Energy Education Society (AEES)**, under the **Department of Atomic Energy (DAE), Government of India**. The school is affiliated with **CBSE** and located in the Anu Vihar Township, Narora, on the banks of the River Ganges, District Bulandshahar, Uttar Pradesh.

This repository contains the complete source code for the official AECS Narora website — a PHP-driven, file-system-based web application with no database dependency.

---

## Table of Contents

- [School Overview](#school-overview)
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Directory Structure](#directory-structure)
- [Getting Started](#getting-started)
- [Key Pages](#key-pages)
- [Contact Information](#contact-information)
- [Credits](#credits)

---

## School Overview

| Detail | Information |
|---|---|
| **Full Name** | Atomic Energy Central School, Narora |
| **Short Name** | AECS Narora |
| **Society** | Atomic Energy Education Society (AEES) |
| **Parent Body** | Department of Atomic Energy (DAE), Govt. of India |
| **Affiliation** | Central Board of Secondary Education (CBSE) |
| **Location** | Anu Vihar Township, Narora, Dist. Bulandshahar, U.P. |
| **Nearest Landmark** | Narora Atomic Power Station (NAPS) |
| **Phone** | (+91) 05734-222090 |
| **Fax** | (+91) 05734-222251 |
| **Email** | aecsnarora@yahoo.co.in |
| **GPS** | 28.206371° N, 78.379145° E |
| **Fee Payment** | SBI Collect (Corp ID: 897239) |

### School Leadership

| Role | Name |
|---|---|
| Principal | Shri Mahendra Kumar Meena |
| Vice Principal | Shri Deshraj Kishana |
| Head Master | Shri Rajendran P R |
| Website Admin | Shri Ashok Kumar Rao (PGT Computer Science) |
| Website Admin | Harsh Rao | 

### AEES Governing Body

| Name | Role |
|---|---|
| Dr. V. P. Venugopalan | Chairman, AEES |
| Shri P. Lahiri | Secretary, AEES |
| Shri Desh Deepak Jain | Chairman LMC / Station Director, NAPS |

---

## Features

- **Dynamic Homepage** — Full-viewport hero section with a Swiper.js coverflow image slider that auto-loads images from all gallery sub-folders
- **Typing Animation** — Motivational quotes displayed with a typewriter animation effect
- **Staff Carousel** — Auto-scrolling profile carousel (Principal, Vice Principal, Head Master, Website Admin)
- **Announcements & Circulars** — Dynamic listing of all files in `php/forms&application/` with view and download links
- **Know More Panel** — Quick-access sidebar links to LMC, SAC, Laboratories, Staff, Syllabus, Strength, RTI, E-newsletter
- **AEES Governing Body** — Testimonials-style carousel with member bios
- **Google Maps** — Embedded map pinpointing the school location
- **Downloads** — Secure PHP file download handler with extension whitelist, path traversal prevention, and access logging
- **Mandatory Public Disclosure** — Auto-generated table of official CBSE-mandated documents with download/view links
- **Tenders** — Two-section table (Newer / Previous) listing procurement tenders
- **Static Info Pages** — Bootstrap-styled HTML pages for LMC, SAC, Staff Directory, Enrollment Strength, Laboratories
- **Syllabus PDFs** — Downloadable syllabi for Classes 3 through 10
- **Fully Responsive** — Media queries for desktop (>1200px), tablet (1023px), mobile (767px), and small phone (480px)
- **IE Compatibility** — html5shiv, respond.js, and selectivizr polyfills included

---

## Technology Stack

### Backend
- **PHP** (no framework) — file-system-based data, PHP `scandir()` for dynamic listings

### Frontend
| Layer | Libraries / Tools |
|---|---|
| CSS Framework | Bootstrap 3.x |
| Icon Font | Ionicons, Font Awesome, Glyphicons |
| CSS Reset | normalize.css |
| Layout | Custom float-based grid (`css/grid.css`) supporting 2 to 12 columns |
| Slider | Swiper.js (coverflow effect, autoplay) |
| Carousel | CarouFredSel (people/testimonials carousels) |
| Typing Effect | typer.js |
| Maps | GMaps.js wrapper over Google Maps API |
| jQuery | jQuery (used by CarouFredSel and main.js) |
| IE Polyfills | html5shiv, respond.js, selectivizr |
| Fonts | Lato (Google Fonts + local TTF fallback), Raleway |

---

## Directory Structure

```
/
├── index.php                   # Main homepage (PHP + HTML)
├── Readme.md                   # This file
├── Documentation.md            # Full technical documentation
│
├── css/                        # Root-level CSS
│   ├── style.css               # Primary custom stylesheet
│   ├── grid.css                # Custom float grid (cols 2–12)
│   ├── footer.css              # Footer styles
│   ├── navigation.css          # Full-screen overlay nav (unused/commented)
│   ├── image-slider.css        # Placeholder (empty)
│   ├── normalize.css           # CSS normalize
│   ├── bootstrap.min.css       # Bootstrap 3
│   ├── ionicons.min.css        # Ionicons icon font
│   ├── swiper.min.css          # Swiper.js styles
│   ├── queries.css             # Additional media queries (commented out)
│   └── img/hero.png            # Hero background image
│
├── fonts/                      # Ionicons web font files (eot/woff/ttf/svg)
│
├── images/                     # Homepage images
│   ├── logo.png                # School logo
│   ├── principle.png           # Principal photo
│   ├── vice.png                # Vice Principal photo
│   ├── hm.png                  # Head Master photo
│   ├── member.png              # Website Admin photo
│   ├── separator.png           # Decorative divider
│   ├── hero_bg.png             # (Hero background variant)
│   ├── form_bg.png             # Contact form background
│   ├── favicons/               # Complete favicon set (16×16, 32×32, 192×192, ICO, SVG, manifest, browserconfig)
│   ├── gallery_preview/        # Gallery preview thumbnails (1–3.png)
│   └── members/                # AEES Governing Body photos (1–4.png, bg.png, testimonials.png)
│
├── scripts/                    # JavaScript files
│   ├── main.js                 # Core JS (carousels, Google Maps init)
│   ├── jquery.min.js           # jQuery
│   ├── swiper.min.js           # Swiper.js
│   ├── caroufredsel.js         # CarouFredSel carousel
│   ├── typer.js                # Typing animation
│   ├── gmaps.js                # GMaps.js
│   ├── html5shiv.js            # HTML5 shiv (IE compat)
│   ├── html5shiv-printshiv.js  # Print shiv (IE compat)
│   ├── respond.js              # Media query polyfill (IE)
│   └── selectivizr.js          # CSS3 selector polyfill (IE)
│
├── php/                        # PHP includes and download handler
│   ├── footer.php              # Footer HTML partial
│   ├── footer1.php             # Footer HTML partial (alternate email variant)
│   ├── downloads.php           # Secure file download handler
│   ├── downloads.log           # Download access log (auto-generated)
│   └── forms&application/      # Circulars & forms for download
│       ├── FEE CIRCULAR Session 2022-23.pdf
│       ├── How to pay fee (DAE Wards Session 2022-23).pdf
│       ├── International Day of Yoga 2022.pdf
│       ├── LIST OF DAE STUDENTS PROVISIONALLY ADMITTED- 2022-23.xlsx
│       └── Student Admission number.xlsx
│
├── htmldocs/                   # Static HTML informational pages
│   ├── LMC.html                # Local Management Committee
│   ├── SAC.html                # School Advisory Committee
│   ├── Labs.html               # Laboratories (with images)
│   ├── Laboratories.html       # Legacy labs page
│   ├── staff.html              # Full staff directory
│   ├── Strength.html           # Enrollment strength (2020–21)
│   ├── RTI.pdf                 # Right to Information document
│   ├── E-news letter1.docx     # School e-newsletter
│   ├── syllabus/               # Class 3–10 syllabus PDFs + Split.html overview
│   ├── labs/                   # Lab photos (1–6.jpg) + CSS (grid.css, style.css) + bg.png
│   └── Laboratories_files/     # Legacy lab images + CSS
│
└── main/                       # Sub-section pages
    ├── check.php               # Laravel server requirements checker (diagnostic)
    ├── phpinfo.php             # PHP info page (diagnostic)
    ├── favicons.php            # Favicon utility
    ├── favicons_gallery.php    # Favicon gallery utility
    ├── css/                    # CSS for sub-pages (Bootstrap + custom styles)
    ├── js/                     # JS for sub-pages (jQuery, Bootstrap, myscript.js)
    ├── School_Info/            # Mandatory Public Disclosure
    │   ├── School_Info.php     # Auto-listing table of official documents
    │   ├── download.php        # Download handler for School_Info docs
    │   ├── store/              # 14 official disclosure PDFs
    │   ├── css/, js/, fonts/   # Self-contained Bootstrap assets
    │   └── images/             # AECS logo variant
    └── Tenders/                # School procurement tenders
        ├── Tenders.php         # Two-section tender listing
        ├── download.php        # Download handler for tenders
        ├── style.css           # Tenders page styles
        └── store/              # Tender PDFs
```

> **Note:** The `main/` subdirectory also contains `downloads/`, `gallery/`, `notice/`, `result/`, and `tc/` folders which are the content-data directories for those sections. Those are not included above as they hold data files rather than code.

---

## Getting Started

### Prerequisites

- **PHP 7.x+** (recommended; PHP 5.6+ minimum)
- **Apache** or any PHP-capable web server
- No database required

### Deployment

1. Clone or upload the repository to your web server's document root:
   ```bash
   git clone <repo-url> /var/www/html/
   ```

2. Ensure the web server has **read** access to all files and **write** access to log files:
   ```bash
   chmod 644 php/downloads.log
   ```

3. Verify PHP is enabled and the server can execute `.php` files.

4. Access `index.php` in your browser.

5. For the Google Maps embed to function, the browser must be able to reach `maps.google.com/maps/api/js`. No API key is currently set; for production use, add a key to the Maps script URL in `index.php`.

### Adding Announcements / Circulars

Drop any PDF, DOCX, XLSX, or other supported file into `php/forms&application/`. It will automatically appear in the Announcements section on the homepage with view and download icons.

### Adding Gallery Images

Place images inside any of the gallery subfolders under `main/gallery/`:
- `gallery1/images/` — Main gallery
- `gallery2/images/` — Secondary gallery
- `gallery3/images/` — Third gallery
- `NCC/images/` — NCC activity photos
- `others/images/` — Miscellaneous (e.g. International Day of Yoga 2022)

The homepage slider auto-scans these folders and picks the first 2 images from each.

### Adding Tender Documents

Drop PDF files into `main/Tenders/store/`. They will appear automatically in the Tenders page. The first 3 files are shown under "Newer"; remaining files appear under "Previous".

### Adding School Info Documents

Drop PDF files into `main/School_Info/store/`. They appear automatically in the Mandatory Public Disclosure table with serial numbers, download, and view links.

---

## Key Pages

| URL | Description |
|---|---|
| `index.php` | Homepage |
| `main/downloads/downloads.php` | Downloads section |
| `main/result/results.php` | Board results |
| `main/tc/tc.php` | Transfer Certificates issued |
| `main/gallery/gallery1/gallery.php` | Main photo gallery |
| `main/notice/notice.php` | School notices |
| `main/Tenders/Tenders.php` | Procurement tenders |
| `main/School_Info/School_Info.php` | Mandatory Public Disclosure |
| `htmldocs/LMC.html` | Local Management Committee |
| `htmldocs/SAC.html` | School Advisory Committee |
| `htmldocs/Labs.html` | Laboratories |
| `htmldocs/staff.html` | Staff directory |
| `htmldocs/Strength.html` | Enrollment strength |
| `htmldocs/syllabus/Split.html` | Syllabus overview |
| `htmldocs/RTI.pdf` | RTI document |
| `php/downloads.php?f=<filename>` | Secure file download |

---

## Contact Information

- **Phone:** (+91) 05734-222090
- **Fax:** (+91) 05734-222251
- **Email:** aecsnarora@yahoo.co.in

---

## Credits

**Website Designed & Developed by:**
- Shri Ashok Kumar Rao (PGT Computer Science, AECS Narora)
- Shri Amit Kumar Patel

**Third-Party Libraries Used:**
- [Bootstrap 3](https://getbootstrap.com/) — MIT License
- [Swiper.js](https://swiperjs.com/) — MIT License
- [jQuery](https://jquery.com/) — MIT License
- [CarouFredSel](https://github.com/gilbitron/carouFredSel) — MIT License
- [Ionicons](https://ionicons.com/) — MIT License
- [GMaps.js](https://github.com/HPNeo/gmaps) — MIT License
- [html5shiv](https://github.com/aFarkas/html5shiv) — MIT/GPL2
- [Respond.js](https://github.com/scottjehl/Respond) — MIT License
- [Selectivizr](https://github.com/keithclark/selectivizr) — MIT License
- [File Download script](http://www.zubrag.com/scripts/) v1.31 by ZubRag
- typer.js — Typing animation effect

---

*Copyright © 2020 AECS Narora. All rights reserved.*
