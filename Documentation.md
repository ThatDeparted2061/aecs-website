# AECS Narora Website — Technical Documentation

Complete technical documentation for every file and system in this codebase.

---

## Table of Contents

1. [Project Architecture](#1-project-architecture)
2. [Entry Point — index.php](#2-entry-point--indexphp)
3. [CSS Architecture](#3-css-architecture)
4. [JavaScript Architecture](#4-javascript-architecture)
5. [PHP Subsystems](#5-php-subsystems)
6. [htmldocs — Static Info Pages](#6-htmldocs--static-info-pages)
7. [main/ — Sub-pages](#7-main--sub-pages)
8. [images/ — Asset Inventory](#8-images--asset-inventory)
9. [fonts/](#9-fonts)
10. [Data Flow: Announcements & Circulars](#10-data-flow-announcements--circulars)
11. [Data Flow: File Download System](#11-data-flow-file-download-system)
12. [Data Flow: Image Slider](#12-data-flow-image-slider)
13. [Responsive Breakpoints](#13-responsive-breakpoints)
14. [School Content Data](#14-school-content-data)
15. [IE Compatibility Layer](#15-ie-compatibility-layer)
16. [Known Issues & Notes](#16-known-issues--notes)

---

## 1. Project Architecture

```
Browser
  │
  ▼
Apache / PHP Server
  │
  ├── index.php         ← Single entry-point homepage
  │     ├── PHP scandir() → main/gallery/*/images/   (image slider)
  │     ├── PHP scandir() → php/forms&application/   (announcements)
  │     └── PHP include  → php/footer.php
  │
  ├── main/
  │     ├── School_Info/School_Info.php  (PHP scandir → store/)
  │     ├── Tenders/Tenders.php          (PHP scandir → store/)
  │     ├── downloads/ notice/ result/ tc/ gallery/  (content-data sections)
  │     └── check.php / phpinfo.php      (diagnostics)
  │
  ├── htmldocs/          ← Pure static HTML pages (Bootstrap-styled)
  └── php/downloads.php  ← Shared file download handler
```

**No database is used.** All data is stored as files in the filesystem. PHP `scandir()` reads directory contents at request time to generate dynamic listings. This makes the site simple to maintain — adding a file to a folder is enough to publish it on the website.

---

## 2. Entry Point — `index.php`

The homepage is a single, self-contained PHP/HTML file. It is not templated — all sections are inline.

### `<head>` Section

```
Line 1: Starts with "webs" — likely a leftover stray text artifact before <!DOCTYPE html>.
```

**Meta tags:**
- `name="abstract"` and `name="description"` with AECS Narora content for search engines.
- `viewport` set to `width=device-width, initial-scale=1` for responsive behavior.
- `theme-color` set to `#ffffff`.

**CSS includes (in order):**
1. Google Fonts CDN — Lato (200, 300, 400, 400i, 500, 700)
2. `css/grid.css` — Custom float grid
3. `css/ionicons.min.css` — Ionicons icon font
4. `css/normalize.css` — CSS normalize
5. `css/style.css` — Main custom stylesheet
6. `css/footer.css` — Footer styles
7. `css/swiper.min.css` — Swiper.js slider styles
8. `css/image-slider.css` — Placeholder (empty file)
9. `css/navigation.css` — Full-screen overlay navigation (loaded but the nav markup is commented out)

**Inline `<style>` block** inside `<head>`:
- Overrides `.container` to position it at 70vw width, absolute bottom-20%
- Sets `.swiper-container` with padding, `.swiper-slide` at 300×300px
- Four media query blocks (≤1200px, ≤1023px, ≤767px, ≤480px) controlling responsive layout for the container, navigation, form, and typography

### `<body>` Structure

#### Commented-out full-screen navigation

A `.navigation` element using a CSS checkbox hack (no JS) for an animated full-screen overlay menu is commented out in its entirety. The `navigation.css` file is still loaded. This was a design alternative that was not used in the final layout.

#### `<header class="sticky">` (lines 315–372)

- School logo (`images/logo.png`) floated left, absolutely positioned, z-index 1000
- `<nav>` with `<ul id="menu" class="main-nav">` — 10 nav items:
  1. Downloads → `main/downloads/downloads.php`
  2. Results → `main/result/results.php`
  3. TC Issued → `main/tc/tc.php`
  4. Gallery → `main/gallery/gallery1/gallery.php`
  5. Notice → `main/notice/notice.php`
  6. Tenders → `main/Tenders/Tenders.php`
  7. Mandatory Public Disclosure → `main/School_Info/School_Info.php`
  8. Fee Payment (New) → SBI Collect external link (Corp ID 897239)
  9. Submission of signed Application Form — Google Forms external link (for DAE Wards Session 2022-23)
  10. International Day of Yoga 2022 → `main/gallery/others/gallery.php`

Each nav item has an Ionicon icon above the label text.

A Google Translate widget is also present but commented out.

#### `<section class="section-hero">` (lines 377–583)

**PHP image array builder (lines 382–447):**
```php
$pre = "main/gallery";
$dirs = array(
    $pre."/gallery1/images/",
    $pre."/gallery2/images/",
    $pre."/gallery3/images/",
    $pre."/NCC/images/",
    $pre."/others/images/",
);
```
- Scans each directory with `scandir()`
- Removes `.` and `..` with two `array_shift()` calls
- Takes the first 2 images (`$x <= 1`) from each of the 5 folders → maximum 10 images in the slider

**Swiper slider markup (lines 449–466):**
```html
<div class="swiper-container-self">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <!-- PHP loop outputs <img class="swiper-slide"> for each image -->
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
```
The container is positioned with `margin-left: -20%` to extend behind the hero text.

**Hero text box (lines 471–482):**
```html
<h1 class="typer" id="second-id"
    data-delay="40"
    data-words=" Fortune Favours Brave, Education makes us humble"
    data-colors="#fff,#fff,#fff">
</h1>
```
typer.js reads `data-words`, `data-delay`, and `data-colors` attributes and types each word character by character.

**Secondary nav panel (`.secondary-nav`, lines 484–582):**
- Absolutely positioned, right-side overlay, 30% width, semi-transparent black background
- **People carousel** (CarouFredSel, `.people-carousel`): cycles through Principal, Vice Principal, Head Master, Website Admin with photo + name
- `.people-navigator` ul: pagination dots
- **Separator** image (`images/separator.png`)
- **Know More links** (`.nav-links`):
  - LMC → `htmldocs/LMC.html`
  - SAC → `htmldocs/SAC.html`
  - Laboratories → `htmldocs/Labs.html`
  - Staff → `htmldocs/staff.html`
  - Syllabus → `htmldocs/syllabus/Split.html`
  - Strength → `htmldocs/Strength.html`
  - RTI → `htmldocs/RTI.pdf`
  - E-newsletter → `htmldocs/E-news letter.docx`
- **Announcements & Circulars** (dynamic, lines 554–578):
  ```php
  $dir = "php/forms&application/";
  $home = scandir($dir);
  array_shift($home); array_shift($home);
  for($x = 0; $x < sizeof($home); $x++) { ... }
  ```
  Each file generates: a display-name link (to view the file) + a download icon link (`php/downloads.php?f=filename`)

**Mobile nav (`.min-nav`, lines 587–694):**
- Hidden by default (`display:none`), shown at ≤480px
- Duplicate of the secondary nav adapted for small screens
- Download links use `downloads.php?f=` (missing `php/` prefix — appears to be a path bug)
- Laboratories link points to `htmldocs/Laboratories.html` (legacy version) instead of `htmldocs/Labs.html`

#### `<section class="testimonials">` (lines 701–752)

Static HTML carousel (CarouFredSel, `.testimonials-carousel`) showing AEES Governing Body members:
1. **Shri. Desh Deepak Jain** — Station Director NAPS, Chairman LMC
2. **Shri P. Lahiri** — Secretary AEES; Distinguished Scientist, former Director BARC Visakhapatnam Campus; B.E. Electrical from NIT Durgapur (1978); 22nd OCES BARC batch; DAE Special Achievement Award 2011; appointed Secretary AEES 07-04-2019
3. **Dr. V. P. Venugopalan** — Chairman AEES; Outstanding Scientist & former Director Bioscience Group BARC; Ph.D from NIO Goa; post-doc at TU Munich (DBT Overseas Fellow); joined BARC 1989; 150+ publications, 3 patents; Senior Professor HBNI; took charge as Chairman AEES 15 Nov 2021

Pagination dots in `.testipager`.

#### Footer include and copyright (lines 759–764)

```php
<?php include("php/footer.php") ?>
<div class="copyright-info">
    <div class="copyright-text"><p>Copyright 2020 </p></div>
</div>
```

#### JavaScript includes (lines 774–812)

Loaded at bottom of body for performance:
1. `scripts/swiper.min.js` + inline Swiper init (coverflow, autoplay 1000ms, loop)
2. `scripts/jquery.min.js`
3. `scripts/caroufredsel.js`
4. `scripts/typer.js`
5. `http://maps.google.com/maps/api/js` (Google Maps, no API key — HTTP not HTTPS)
6. `scripts/main.js`
7. `scripts/gmaps.js`
8. `scripts/selectivizr.js`
9. `scripts/respond.js`
10. `scripts/html5shiv-printshiv.js`
11. `scripts/html5shiv.js`

---

## 3. CSS Architecture

### `css/normalize.css`

Standard CSS normalization — resets browser default styles for cross-browser consistency.

### `css/grid.css`

Custom **float-based grid system** supporting grids from 2 to 12 columns.

- Class pattern: `.col.span-{N}-of-{M}` where N is the number of columns to span and M is the total columns in the grid
- Uses `float: left` with `margin: 1% 0 1% 1.6%`
- First child has no left margin (`.col:first-child { margin-left: 0 }`)
- All columns collapse to `width: 100%` at `max-width: 480px`
- Grids supported: 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 columns
- Used in: `index.php` (footer), `htmldocs/labs/` (Lab page layout)

### `css/style.css`

Main custom stylesheet for the homepage. Authored with the following sections:

**Basic Setup:**
- `@font-face` declaration for Lato (Black, Light, Thin, Regular, Bold TTF files — these local font files are not in the repo; Google Fonts CDN is the live source)
- Global `box-sizing: border-box`, zero margin/padding
- Body: `font-family: raleway, Arial`, `font-size: 14px`, `color: #555`, `overflow-x: hidden`

**Header:**
- `header` is full width, positioned sticky
- Logo: `display:inline-block`, `float:left`, absolutely positioned top:16px left:20px, width:40px, z-index:1000
- `nav` is inline-block with `margin-left: 20%`
- `.main-nav li` float left, padding 4px 20px; links colored `#282828`, hover `#ff5544`

**Hero Section:**
- `section.section-hero`: CSS Grid with 8 columns, full-viewport height
- Background: `linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7))` over `css/img/hero.png`, `background-attachment: fixed`, `height: 100vh`
- `.hero-text-box`: absolute, top 10%, left 12%; h1 is 350% font-size, white
- `.secondary-nav`: absolute, right 0, width 30%, height 100vh, `background-color: rgba(0,0,0,0.5)`
- `.min-nav`: hidden by default (`display: none`), shown at ≤480px; dark background

**People Carousel:**
- `.people-carousel li`: `float: left`, text-align center
- `.member-photo img`: width 130px
- `.people-navigator li`: float left, white dots; `.selected` turns red (`#e74c3c`)

**Announcements / Links:**
- `#forms-docs-links`: float right, 50% width, white text
- `.nav-links`: float left, 50% width
- File link icons: `.link-icons` with `vertical-align: top`

**Testimonials:**
- `section.testimonials`: centered, background image `images/members/testimonials.png`, `background-attachment: fixed`
- Carousel items: circular member photos (width:150px, `border-radius:50%`), name in red (`#e74c3c`), blockquote 70% width

**Footer:**
- Styles in `css/footer.css` (see below)
- `.copyright-info`: `background-color: #333`, white text, 0.5% padding, 80% font-size

**Form & Maps:**
- `.map-box`: 600px height, relative position
- `.form-box`: absolute, right 0, 50% width, semi-transparent white background

**Utility:**
- `.clearfix`: `clear: both`
- `.success` / `.error` / `.form-messages`: For future form validation feedback (not currently wired up to a form submit handler)

### `css/footer.css`

```
footer {
  background-color: #000 !important;
  color: #aaa;
  padding: 70px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(8rem, 1fr));
  margin: 0 auto;
}
```
- Black background grid-based footer
- Links and h2 colored `#ddd`
- `.contact-details li i` colored `#e74c3c` (red)

### `css/navigation.css`

Styles for the **full-screen CSS checkbox overlay navigation** (commented out in `index.php`):
- `.navigation__checkbox`: hidden checkbox input used as state toggle
- `.navigation__button`: circular button (7rem × 7rem, fixed top-right)
- `.navigation__background`: small circle that scales to 80× when checkbox is checked, creating the "expanding circle" animation
- `.navigation__nav`: fixed full-viewport overlay, opacity 0 / width 0 by default; becomes visible when checkbox is checked
- Animated hamburger icon (`.navigation__icon`) that morphs into an X on activation
- Links have a background gradient slide-in hover effect

### `css/swiper.min.css`

Minified Swiper.js CSS — provides base layout, transition, and effect styles for the image slider.

### `css/image-slider.css`

Empty file. Placeholder for potential future custom slider styles.

### `css/queries.css`

Additional media queries for the homepage. Currently commented out of `index.php` with:
```html
<!-- <link rel="stylesheet" type="text/css" href="css/queries.css"> -->
```

### `main/css/style.css`

Stylesheet for the `main/` sub-pages (authored by Amit kr. Patel). Uses `open_sansregular` and `texgyreadventorregular` `@font-face` declarations (referencing TTF files under `main/fonts/` — not in the repo).

Key components:
- `.header_bg`, `.header_bg1`: Header with top groove border
- `.h_search`: Search bar (30% width, custom input + submit button)
- `.h_menu`, `.navbar`: Bootstrap-based dark (`#3b3b3b`) navigation bar
- `.navbar-default` overrides: dark nav, hover/active turns red (`#FF5454`)
- `.slider_bg`: Background image slider area with dark box-shadow inset
- `.images_1_of_4`: Feature icon blocks (120×120px circular icon containers)
- `.fa-btn`, `.btn-1`, `.btn-1e`: Custom animated button styles
- `.social_network_likes`: Four-column social share bar (Twitter, Facebook, Email, Dribble)
- `.ads_nav`: Two-column ad/link navigation
- `.tag_nav`: Tag cloud with rounded dark pills
- `.news_letter`: Minimal newsletter form
- Full responsive breakpoints: 1440, 1366, 1280, 1024, 768, 640, 480, 320px

### `main/css/download.css`

Login/download form styles:
- `#login .form-wrap`: 30% width centered form
- Custom checkbox appearance
- `.btn-custom`: green (`#1fa67b`) button

### `main/css/website.css`

Bottom fixed navbar styles for `main/` pages:
- `#bottom-navbar`: relative position, `margin-top: 70px`
- `#website-developer a`: white links with hover `#ccc`
- Responsive at ≤568px

### `main/Tenders/style.css`

Minimal inline styles for the Tenders page (used within `Tenders.php` via Bootstrap, no external style.css link used in that file).

### `htmldocs/labs/grid.css`

Identical copy of the root `css/grid.css` — used by the Labs and Staff info pages.

### `htmldocs/labs/style.css`

Responsive styles for the Laboratories info page (`Labs.html`):
- Body: dark background image (`bg.png`), `height: 100vh`, Lato font, white text
- `.long-copy`: justified text, 150% line-height
- `.img-col img`: 100% width, inline-block, 2% margin, 2px border-radius
- Three-column layout: `.first`, `.second`, `.third` floated left
- At ≤1023px: `.para2` is hidden
- At ≤767px: all columns display block; side images become 33.33% float left
- `.home-btn`: orange-bordered button (`#E67E22`) with fill-on-hover

---

## 4. JavaScript Architecture

### `scripts/main.js`

Core homepage JavaScript, runs inside `jQuery(document).ready()`:

**People carousel:**
```javascript
$('.people-carousel').carouFredSel({
    responsive: true,
    width: '100%',
    circular: true,
    scroll: { items: 1, duration: 500, pauseOnHover: true },
    auto: true,
    items: { visible: { min: 1, max: 1 }, height: "variable" },
    pagination: { container: ".people-navigator", anchorBuilder: false }
});
```
Shows one staff member at a time. The `.people-navigator` ul acts as pagination.

**Testimonials carousel:**
```javascript
$('.testimonials-carousel').carouFredSel({
    // same settings as above
    pagination: { container: ".testipager", anchorBuilder: false }
});
```

**Google Maps:**
```javascript
var map = new GMaps({
    div: '.map',
    lat: 28.206371,
    lng: 78.379145,
    zoom: 17
});
map.addMarker({
    lat: 28.206371,
    lng: 78.376145,
    title: 'Lima',
    infoWindow: { content: '<p>Our School</p>' }
});
```
Note: The marker longitude (78.376145) is slightly different from the map center (78.379145).

### `scripts/swiper.min.js`

Swiper.js library. Initialized inline in `index.php`:
```javascript
var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: { rotate: 50, stretch: 0, depth: 100, modifier: 1, slideShadows: true },
    autoplay: { delay: 1000 },
    loop: true,
    pagination: { el: '.swiper-pagination' }
});
```
1-second autoplay, coverflow 3D effect, looping.

### `scripts/typer.js`

Typing animation library. Reads data attributes from the target element:
- `data-words="word1,word2"` — comma-separated list of words to type
- `data-delay="40"` — milliseconds between keystrokes
- `data-colors="#fff,#fff"` — colors cycling with each word

Used on `<h1 class="typer" id="second-id" data-words=" Fortune Favours Brave, Education makes us humble">`.

### `scripts/caroufredsel.js`

CarouFredSel — jQuery plugin for responsive carousels. Used for both the staff people carousel and the testimonials carousel.

### `scripts/jquery.min.js`

jQuery (minified). Required by CarouFredSel and main.js.

### `scripts/gmaps.js`

GMaps.js — a lightweight wrapper around the Google Maps JavaScript API providing a simpler imperative interface (`new GMaps(...)`, `map.addMarker(...)`).

### `scripts/html5shiv.js` / `scripts/html5shiv-printshiv.js`

HTML5 shiv for Internet Explorer 6–9 — allows IE to style HTML5 elements (`header`, `nav`, `section`, `footer`, etc.) which IE doesn't recognize by default. The `-printshiv` variant adds print stylesheet support.

### `scripts/respond.js`

Respond.js — polyfill for CSS3 media queries in Internet Explorer 6–8.

### `scripts/selectivizr.js`

Selectivizr — polyfill for CSS3 selectors (`:nth-child`, `:last-child`, etc.) in Internet Explorer 6–8.

### `main/js/myscript.js`

Bootstrap dropdown hover effect for `#topFixedNavbar1`:
```javascript
$("#topFixedNavbar1 li.dropdown").hover(
    function() { $(".dropdown-menu", this).fadeIn(); },
    function() { $(".dropdown-menu", this).fadeOut('fast'); }
);
```
Also sets `#home`'s parent as `.active`.

### `main/js/need.js`

Third-party obfuscated advertising/tracking script that injects a loader from `akamaihd.net`. This is not school-authored code and was likely added incidentally.

---

## 5. PHP Subsystems

### `php/footer.php`

Reusable footer HTML partial, included in `index.php` via `<?php include("php/footer.php") ?>`.

Structure (Bootstrap `.row` inside `.tight-container`):
- Column 1: "About AECS Narora" — school mission blurb
- Column 2: "Contact Details" — phone `(+91) 05734-222090`, fax `(+91) 05734-222251`
- "Stay In Touch" heading + Column 3: email link `aecsnarora@yahoo.co.in` (links to `aecskak@yahoo.co.in`)
- Column 4: "Designed by Ashok Kumar Rao / Amit Kumar Patel"

### `php/footer1.php`

Identical to `footer.php` but with a slightly different email address in the link text (`aecsnarora@yahoo.in`). The two files differ only in this email value — `footer1.php` appears to be the newer/corrected version but `index.php` includes `footer.php`.

### `php/downloads.php`

Secure file download handler based on [File Download v1.31 by ZubRag](http://www.zubrag.com/scripts/).

**Configuration constants:**
```php
define('ALLOWED_REFERRER', '');  // empty = hotlinking allowed
define('BASE_DIR', 'forms&application/');
define('LOG_DOWNLOADS', true);
define('LOG_FILE', 'downloads.log');
```

**Allowed MIME types:** zip, exe, pdf, txt, html, htm, doc, xls, ppt, gif, png, jpeg, jpg, php, mp3, wav, mpeg, mpg, mpe, mov, avi

**Security measures:**
1. Nullbyte injection prevention: `if (strpos($_GET['f'], "\0") !== FALSE) die('');`
2. Path traversal prevention: `$fname = basename($_GET['f'])` strips any directory components
3. Extension whitelist: only files with allowed extensions are served
4. Referrer check: configurable (currently disabled — `ALLOWED_REFERRER = ''`)

**`find_file()` function:**
Recursively searches `BASE_DIR` and subdirectories for the filename. Returns the full path by reference.

**Download mechanism:**
- Sets `Content-Disposition: attachment` headers to force browser download
- Streams file in 8KB chunks using `fread($file, 1024*8)` + `flush()`
- Checks `connection_status()` on each chunk to abort on disconnection

**Logging:**
Appends to `downloads.log`:
```
MM.DD.YYYY H:MMam  IP_ADDRESS  filename
```

**Usage:**
```
php/downloads.php?f=<filename>
php/downloads.php?f=<filename>&fc=<custom_save_name>
```

### `php/downloads.log`

Auto-generated text log of all download events. Format: `date  IP  filename`.

### `main/check.php`

Laravel server requirements checker (standalone diagnostic tool). Checks PHP version, OpenSSL, PDO, Mbstring, Tokenizer, XML, CTYPE, JSON, Mcrypt, BCMath, mod_rewrite against requirements for Laravel versions 4.2 through 6.0. Not part of the school website functionality — used for server diagnostics.

### `main/phpinfo.php`

Presumably calls `phpinfo()`. Not read in full — standard PHP diagnostic.

### `main/School_Info/School_Info.php`

Mandatory Public Disclosure page (CBSE requirement).

**Data source:** `store/` directory (14 official PDFs)

**Logic:**
```php
$dir = 'store/';
$home = scandir($dir);
array_shift($home); array_shift($home);   // remove . and ..
```

Generates a Bootstrap responsive table:
- Columns: Sr.No, Documents (School), Download, View Online
- Download: `download.php?f=<filename>` → Bootstrap "Download" button
- View Online: direct `<a href="store/filename" target="blank">view</a>`
- Serial numbers start at 2 (loop starts `$j = 1`, displays `$d = $j + 1`) — off-by-one, so Sr. No 1 is skipped

**Stored documents:**
1. Building Fire Sanitation Drinking water Safety Certificate.pdf
2. Fee details.pdf
3. General Information regarding School.pdf
4. Local Management Committee.pdf
5. NOC State Government.pdf
6. Recognition Certificate under RTE ACT 2009.pdf
7. Result of last three years (2018-19, 2019-20, 2020-21 of Class X and XII).pdf
8. Safety Certificate.pdf
9. Sanitation Certificate.pdf
10. School Advisory Committee.pdf
11. School Affiliation.pdf
12. School Annual Academic Calender 2021-22.pdf
13. School Area.pdf
14. Self Certification by School for Affiliation.pdf
15. Society Registration.pdf

**Layout:** Two-column Bootstrap header with AECS-LOGO2.png + sub-bar with "Currently Under Update" note and Downloads button. Footer is a Bootstrap fixed-bottom navbar.

### `main/School_Info/download.php`

Same File Download v1.31 script as `php/downloads.php` but with:
```php
define('BASE_DIR', 'store/');
```
Serves files from `main/School_Info/store/`.

### `main/Tenders/Tenders.php`

Tenders listing page.

**Data source:** `store/` directory (auto-scanned)

**Logic:**
```php
$dir = "store/";
$home = scandir($dir);
array_shift($home); array_shift($home);
```

**Two-table layout:**
- "Newer" table: loops `$x = 0` to `min(sizeof($home)-1, 2)` (first 3 files)
- "Previous" table: loops `$x = 3` onwards (remaining files)
- Each row: filename as direct `<a href>` link + `fileatime()` display date
- Shows "The notice hereby are updated on date..." using `fileatime($upDateOn)` of the first file

**Note:** `fileatime()` returns the last access time of the file, not modification time. On many Linux servers with `noatime` mount options, this may not reflect actual updates.

### `main/Tenders/download.php`

Same File Download v1.31 script with `define('BASE_DIR', 'store/')`.

---

## 6. `htmldocs/` — Static Info Pages

All pages use Bootstrap 3 CSS from `../css/bootstrap.min.css` and follow a consistent pattern: colored gradient background, a `.container` div, a heading, and a Bootstrap-styled table. All pages link to the favicon set at `favicons/` (relative to htmldocs/).

### `htmldocs/LMC.html` — Local Management Committee

**Background:** Blue-cyan gradient (`#2BC0E4` to `#EAECC6`)

**Table (10 members):**

| S. No | Name | Designation | Role |
|---|---|---|---|
| 1 | Shri Desh Deepak Jain | Station Director, NAPS | Chairman |
| 2 | Shri Sudhir B. Shelke | Chief Superintendent, NAPS | Member |
| 3 | Shri R. Murali | Maintenance Superintendent, NAPS | Member |
| 4 | Shri S K Kaware | Training Supdt. NAPS | Member |
| 5 | Shri Omprakash Sutar | Head (F & A), NAPS | Member |
| 6 | Shri M. P. Rath | DGM (HR), NAPS | Member |
| 7 | Shri H. C. Birla | DGM (CMM), NAPS | Member |
| 8 | Shri Nagendra Devrari | Sr. Commandant, CISF UNIT, NAPS NARORA | Member |
| 9 | Dr. Manju Sati | MO/G, NAPS Hospital | Parent Representative |
| 10 | Shri Mahendra Kumar Meena | Principal, AECS, Narora | Member Secretary |

### `htmldocs/SAC.html` — School Advisory Committee

**Background:** Golden gradient (`#FC3` to `#FFEDBC`)

**Table (12 members):**

| S. No | Name | Designation | Role |
|---|---|---|---|
| 1 | Shri Deshraj Kishana | Vice Principal, AECS Narora | Chairperson/Convenor |
| 2 | Shri Rajendran P R | Headmaster, AECS, Narora | Member |
| 3 | Shri Kishore Kumar | PGT, AECS, Narora | Member |
| 4 | Smt. Geeta Sharma | TGT-SS, AECS, Narora | Member |
| 5 | Smt. Ashalata Sirohiwal | TGT-SS, AECS, Narora | Member |
| 6 | Smt. Poonam M Bhagat | Prep Tr.-SS, AECS, Narora | Member |
| 7 | Shri Anuj Kumar Sharma | UDC, AECS, Narora | Member |
| 8 | Smt. Arpita Chakravorty | SO/E, TSU, NAPS, Narora | Parent Member |
| 9 | Shri Gaurav Goel | SO/F, Operation, NAPS, Narora | Parent Member |
| 10 | Shri J P Singh | SA/E, MMU, NAPS, Narora | Parent Member |
| 11 | Shri L K Gupta | SO/F, Operation, NAPS, Narora | Parent Member |
| 12 | Shri Aditya Kumar | SA/D, Civil, NAPS, Narora | Parent Member |

### `htmldocs/Labs.html` — Laboratories Page

Uses custom layout with `htmldocs/labs/grid.css` and `htmldocs/labs/style.css`.

**Layout:** Three-column — left image column (labs/1.jpg, 2.jpg, 3.jpg), center text column, right image column (labs/4.jpg, 5.jpg, 6.jpg)

**Content:**
- Paragraph 1: Description of school science labs — separate Physics, Chemistry, Biology, Mathematics, and Computer Science labs for Classes IX–XII; middle classes also use labs under teacher guidance
- Paragraph 2: ASTER Room — computer-aided interactive learning facility
- Home button link back to `../index.php`

**Images:** 6 lab photos (`labs/1.jpg` through `labs/6.jpg`), background image `labs/bg.png`

### `htmldocs/staff.html` — Staff Directory

**Background:** Teal-to-yellow gradient (`#12ffcc` to `#FFEDBC`)

Rendered as two Bootstrap tables:

**Table 1 — Teaching Staff:**

| Category | Staff |
|---|---|
| Principal | Shri Mahendra Kumar Meena |
| Vice Principal | Shri Deshraj Kishana |
| Head Master | Shri Rajendran P R |
| PGT – SR. SCALE | Shri Nand Ram (Economics) |
| PGT – Entry Scale | Shri Kishore Kumar (Commerce), Shri Ashok Kumar Rao (Computer Science), Shri Girish Kumar (Physics), Shri Rahul Soni (Chemistry), Shri Navin Kumar Bharangar (Hindi) |
| TGT – Sel. Scale | Smt. Sunita Sharma (CS), Shri R.K. Mishra (Maths), Shri Shiv Dutt Sharma (Hindi/Sanskrit) |
| TGT – Sr. Scale | Shri Phulchand (Eng-SS), Shri A.K.S. Rana (Eng-SS), Smt. Chitrangada Sharma (Eng-SS), Shri Vijay Kumar (PE), Smt. Geeta Sharma (Hindi), Shri Atul Mittal (English), Smt. Asha Lata (Arts), Shri Ved Prakash Sharma (Hindi/Sanskrit), Smt. Swarnamary Hembron (Biology), Shri Pramod Sagar (Maths) |
| Librarian | Shri S.K. Sharma |

**Table 2 — Support Staff:**

| Category | Staff |
|---|---|
| PRT – Sr. Scale | Shri A.N. Srivastava, Smt. Raj Rani Singh, Shri Neeta Mehra, Smt. Meenakshi Goyal, Smt. Renu Yadav, Smt. Pinky Lata, Smt. Satya Prabha |
| PRT – Entry Scale | Smt. Sweta Pal, Smt. Poonam M. Bhagat |
| Lab. Asst | Shri Beer Singh, Shri D.N. Goswami |
| Office Staff (UDC) | Shri Anuj Kr. Sharma, Shri Ajay Kumar |
| Auxiliary Staff | Shri Ashok Kumar, Shri Ram Babu, Shri Virendra Singh, Shri Mahendra Singh, Smt. Veerwati, Shri Mukesh Kumar |

### `htmldocs/Strength.html` — Enrollment Strength

**Background:** Teal-to-amber gradient (`rgb(34,193,195)` to `rgb(253,187,45)`)
**Session:** 2020–21

| Class | Strength | Class | Strength |
|---|---|---|---|
| Pre prep | 50 | Class-7 | 101 |
| Prep | 59 | Class-8 | 116 |
| Class-1 | 66 | Class-9 | 130 |
| Class-2 | 91 | Class-10 | 122 |
| Class-3 | 71 | 11-Sci | 67 |
| Class-4 | 69 | 11-Comm | 42 |
| Class-5 | 79 | 12-Sci | 54 |
| Class-6 | 105 | 12-Comm | 17 |
| **Total** | | | **~1239** |

### `htmldocs/Laboratories.html`

Legacy/alternate laboratories page. Contains more images (uses `Laboratories_files/` subfolder with 7 images). Not linked from the main nav (desktop nav links to `Labs.html`; only the mobile nav links to this file).

### `htmldocs/syllabus/`

- `Split.html` — Syllabus overview HTML page (generated from Word document)
- `Split_files/` — Companion files for the HTML (XML theme data)
- `3.pdf` through `10.pdf` — Syllabus PDFs for Classes 3 to 10

---

## 7. `main/` — Sub-pages

The `main/` directory contains self-contained sub-sections. Each section that has PHP pages includes its own Bootstrap CSS/JS copies to be independent.

### `main/css/`

Bootstrap 3 full set:
- `bootstrap.css`, `bootstrap.min.css`, `bootstrap.css.map`, `bootstrap.min.css.map`
- `bootstrap-theme.css`, `bootstrap-theme.min.css` (+ maps)
- `style.css` — Custom main-page styles (see CSS section above)
- `style3.css`, `style4.css` — Additional style variants
- `download.css` — Login form styles
- `downStyle.css` — Download page styles
- `font-awesome.css` — Font Awesome icon font
- `owl.carousel.css` — OWL Carousel styles (for a carousel widget in sub-pages)
- `slider.css` — Slider styles
- `website.css` — Bottom navbar styles

### `main/js/`

- `jquery.min.js` — jQuery
- `bootstrap.js`, `bootstrap.min.js` — Bootstrap JS
- `myscript.js` — Dropdown hover effect (see JS section)
- `need.js` — Third-party tracking script (see JS section)

### Content-data directories (no code inside, skipped per instructions)

- `main/downloads/` — Downloadable files + `downloads.php` listing page
- `main/gallery/` — Photo galleries (gallery1, gallery2, gallery3, NCC, others) with `images/` subfolders; each has a `gallery.php` page
- `main/notice/` — School notices + `notice.php` listing page
- `main/result/` — Board results + `results.php` listing page
- `main/tc/` — Transfer certificates issued + `tc.php` listing page

All these sections follow the same pattern as `School_Info` and `Tenders`: `scandir()` on a `store/` or `images/` directory, Bootstrap table, download handler.

### `main/favicons.php` / `main/favicons_gallery.php`

Utility pages for favicon generation or display. Not linked from public navigation.

---

## 8. `images/` — Asset Inventory

### Root-level images

| File | Purpose |
|---|---|
| `logo.png` | School logo (40px wide in header) |
| `principle.png` | Principal photo (Mahendra Kumar Meena) |
| `principle1.png` | Alternate principal photo variant |
| `vice.png` | Vice Principal photo (Deshraj Kishana) |
| `hm.png` | Head Master photo (Rajendran P R), 141×140px |
| `member.png` | Website Admin photo (Ashok Kumar Rao) |
| `tarun.png` | Staff photo (purpose unclear from code) |
| `separator.png` | Decorative horizontal separator used in carousels |
| `hero_bg.png` | Hero section background (alternate, actual background is `css/img/hero.png`) |
| `form_bg.png` | Background image for the contact form area |

### `images/favicons/`

Complete cross-browser favicon set:
- `favicon.ico` — Standard ICO format
- `favicon-16x16.png` — 16×16 PNG
- `favicon-32x32.png` — 32×32 PNG
- `apple-touch-icon.png` — 114×114 Apple touch icon
- `android-chrome-96x96.png` — 96×96 Android Chrome
- `mstile-150x150.png` — 150×150 Microsoft tile
- `safari-pinned-tab.svg` — Safari pinned tab SVG
- `manifest.json` — Web app manifest (for Progressive Web App support)
- `browserconfig.xml` — Microsoft browser config for tile color/image

### `images/gallery_preview/`

Three preview thumbnails (`1.png`, `2.png`, `3.png`) for a gallery section that is commented out in `index.php`.

### `images/members/`

AEES Governing Body carousel photos:
- `1.png` — Shri Desh Deepak Jain
- `2.png` — Shri P. Lahiri
- `3.png` — Dr. V. P. Venugopalan
- `4.png` — (Additional member, not displayed in visible code)
- `bg.png` — Background image
- `testimonials.png` — Large background image for the testimonials section

### `css/img/`

- `hero.png` — The actual hero background image referenced in `css/style.css`

---

## 9. `fonts/`

Ionicons web font in four formats for cross-browser compatibility:
- `ionicons.eot` — Internet Explorer
- `ionicons.woff` — Modern browsers (compressed)
- `ionicons.ttf` — Fallback TrueType
- `ionicons.svg` — SVG font (legacy iOS Safari)

These are referenced by `css/ionicons.min.css` via `@font-face`.

---

## 10. Data Flow: Announcements & Circulars

```
Admin adds file to:   php/forms&application/
                             │
                             ▼
                  PHP scandir() at request time
                             │
                             ▼
         for each file → generate two links:
           1. View link: <a href="php/forms&application/[filename]">[display name]</a>
           2. Download link: <a href="php/downloads.php?f=[filename]">
                               <i class="ion-ios-download">
                             </a>
                             │
                             ▼
         php/downloads.php receives ?f=filename
           → basename() strips path
           → find_file() searches BASE_DIR (forms&application/)
           → validates extension against whitelist
           → streams file with Content-Disposition: attachment headers
           → logs to downloads.log
```

---

## 11. Data Flow: File Download System

Three separate instances of the same download script exist:

| Instance | URL | Serves files from |
|---|---|---|
| `php/downloads.php` | `php/downloads.php?f=<name>` | `php/forms&application/` |
| `main/School_Info/download.php` | `main/School_Info/download.php?f=<name>` | `main/School_Info/store/` |
| `main/Tenders/download.php` | `main/Tenders/download.php?f=<name>` | `main/Tenders/store/` |

All three are identical except for `BASE_DIR`. Each maintains its own `downloads.log` in its respective directory.

**Security note:** The `?fc=` parameter allows the browser to save the file under a custom name. Characters `"`, `'`, `\`, `/` are stripped with `str_replace`.

---

## 12. Data Flow: Image Slider

```
index.php PHP block:
  $dirs = [gallery1/images/, gallery2/images/, gallery3/images/, NCC/images/, others/images/]
  for each dir:
    scandir() → remove "." and ".."
    take first 2 images → push to $imageArray
  
  Result: $imageArray = up to 10 image paths

HTML output:
  foreach($imageArray as $image):
    <img src="[path]" class="swiper-slide">

Swiper.js init (inline script):
  effect: coverflow
  autoplay: 1000ms delay
  loop: true
  centeredSlides: true
  slidesPerView: auto
  coverflowEffect: rotate 50°, depth 100, modifier 1
```

The slider container is positioned with `margin-left: -20%` in the inline style to create an effect where it bleeds into the hero background behind the text.

---

## 13. Responsive Breakpoints

The site has multiple sets of media queries across different files:

| Breakpoint | Context | Notable Changes |
|---|---|---|
| `max-width: 1200px` | `index.php` inline | (empty) |
| `max-width: 1023px` | `index.php` inline | Hero text h1 → 3.4rem; container shrinks; secondary-nav 40% width; form-box slides right |
| `max-width: 767px` | `index.php` inline | h1 → 3rem; container 100vw; nav links shrink; form goes block; map goes block; mobile nav icon appears; secondary-nav hidden |
| `max-width: 480px` | `index.php` inline | h1 → 2rem; main-nav hidden; entire `nav` hidden; `.min-nav` shown; footer adjusts; form goes full-width with margin |
| `max-width: 480px` | `css/grid.css` | All grid columns → 100% width (stacked) |
| Various | `main/css/style.css` | Responsive sub-page layouts |
| `max-width: 768px` | `main/css/style.css` | Stacked layout, collapsible nav, adjusted slider |
| `max-width: 1023px` | `htmldocs/labs/style.css` | `.para2` (second lab paragraph) hidden |
| `max-width: 767px` | `htmldocs/labs/style.css` | Columns stack; side images become inline 33.33% |

---

## 14. School Content Data

### School Mission (from footer.php)

> "AECS Narora strives to create a pupil-friendly ambience, so that the pupil can do the fullest justice to their native genius and innate potential. The first tentative steps by AECS Narora in cause of education—the first streaks of Dawn are briefly retraced."

### AEES Governing Body (from index.php testimonials section)

**Dr. V. P. Venugopalan — Chairman, AEES** (took charge 15 Nov 2021)
- Former Outstanding Scientist and Director, Bioscience Group, BARC
- M.Sc. Cochin University of Science and Technology
- Ph.D. National Institute of Oceanography, Goa
- Post-doctoral research at Technical University of Munich, Germany (DBT Overseas Fellow)
- Joined BARC 1989; worked on biofouling, biofilm, and environmental issues in coastal nuclear power plants
- 150+ publications, 3 patents
- Senior Professor, Homi Bhabha National Institute (HBNI)
- Supervised 11 Ph.Ds
- Serving as Raja Ramanna Fellow post-superannuation

**Shri P. Lahiri — Secretary, AEES** (appointed 07-04-2019)
- B.E. Electrical Engineering, Regional Engineering College Durgapur (1978)
- 22nd batch OCES training, BARC Training School
- Engineering Services Group, BARC; infrastructure projects
- Developed new BARC campus at Visakhapatnam
- Retired as Distinguished Scientist; DAE Special Achievement Award 2011
- Post-superannuation: Design Safety Review Committee, BARC projects

**Shri Desh Deepak Jain — Chairman LMC / Station Director, NAPS**

### Hero Typing Quotes (from index.php typer.js)
- "Fortune Favours Brave"
- "Education makes us humble"

---

## 15. IE Compatibility Layer

The following scripts are loaded at the bottom of `index.php` for backward compatibility with Internet Explorer:

| Script | Purpose | Target |
|---|---|---|
| `html5shiv.js` | Enables HTML5 semantic elements in IE | IE 6–9 |
| `html5shiv-printshiv.js` | Adds print stylesheet support | IE 6–9 |
| `respond.js` | CSS media query polyfill | IE 6–8 |
| `selectivizr.js` | CSS3 pseudo-class selector polyfill | IE 6–8 |

Note: The Google Maps script is loaded over `http://` (not `https://`), which may cause mixed-content warnings in modern browsers when the site is served over HTTPS.

---

## 16. Known Issues & Notes

1. **Stray text at line 1 of `index.php`:** The file begins with `webs` before `<!DOCTYPE html>` — this is a stray text artifact.

2. **Mobile nav download path bug:** In the `.min-nav` Announcements section (≤480px), download links use `href='downloads.php?f=...'` instead of `href='php/downloads.php?f=...'`. This is a relative path bug.

3. **Mobile nav Laboratory link:** `.min-nav` links to `htmldocs/Laboratories.html` (legacy file) instead of `htmldocs/Labs.html`.

4. **footer.php email inconsistency:** The visible email text says `aecsnarora@yahoo.co.in` but the `mailto:` href is `aecskak@yahoo.co.in`.

5. **Google Maps API key missing:** Maps script loaded without an API key via HTTP. Production deployments should use an HTTPS URL with a valid API key.

6. **Maps marker offset:** Map centers at `lng: 78.379145` but the marker is placed at `lng: 78.376145` (0.003° offset, ~270m difference).

7. **`need.js` tracking script:** An obfuscated third-party ad/tracking script is present in `main/js/need.js`. This may be unwanted and should be reviewed.

8. **School_Info table off-by-one:** `School_Info.php` starts the loop at `$j = 1` and displays `$d = $j + 1`, so the first document is shown as Sr. No. 2, and Sr. No. 1 is never displayed.

9. **Readme.md was empty:** The original `Readme.md` contained only one blank line. It has been replaced with full documentation.

10. **`css/image-slider.css` is empty:** The file exists and is linked but has no content.

11. **`queries.css` commented out:** `css/queries.css` is linked but immediately commented out in `index.php`.

12. **`check.php` is a Laravel diagnostic:** `main/check.php` is a third-party Laravel compatibility checker unrelated to the school website. It should be protected or removed from production.

13. **Duplicate footer files:** `php/footer.php` and `php/footer1.php` are nearly identical. Only `footer.php` is used by `index.php`. The alternate email in `footer1.php` suggests it was a draft correction.

14. **`fileatime()` for tender dates:** `Tenders.php` uses `fileatime()` which returns last access time. Many Linux servers mount with `noatime` so this value may not change when files are added.

---

*Documentation generated from full codebase review — May 2026.*
