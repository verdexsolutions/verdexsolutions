=== Verdex ===
Contributors: verdex
Requires at least: 6.0
Tested up to: 6.7
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Dark, conversion-focused theme for Verdex Web Solutions.

== Setup after activating ==

1. Pages. Create five pages with these exact slugs, so the templates and the
   internal links line up: home, services, portfolio, about, contact.
   Settings > Reading > "Your homepage displays" > a static page > Home.
   WordPress picks up front-page.php for the home page and page-{slug}.php for
   the other four automatically. Any of them can also be set manually under
   Page Attributes > Template.

2. Menus. Appearance > Menus. Create a menu, assign it to "Primary menu", and
   add Services, Portfolio and About. Two more locations are available for the
   footer columns: "Footer: services" and "Footer: company". Until menus are
   assigned, the theme falls back to a sensible default list.

3. Contact details. Appearance > Customize > "Verdex contact details" sets the
   email, phone/WhatsApp number and the three social links used in the footer.

4. Images. Drop files into the theme at assets/images/:
     why.jpg         the photo beside the "why choose" section
     project-01.jpg  optional, project tiles on the portfolio page
   Anything missing falls back to a styled placeholder, never a broken image.

5. The quote form. The three-step brief validates and shows a recap, but it does
   not send anywhere yet. Wire it to Contact Form 7, WPForms, Fluent Forms or
   your own endpoint by handling the submit in assets/js/theme.js, or by
   replacing the form markup in template-parts/content-contact.php.

== Notes ==

* Styles live in style.css, scripts in assets/js/theme.js, both enqueued from
  functions.php with filemtime() versioning.
* Google Fonts (Fraunces + Hanken Grotesk) are enqueued, not hardcoded.
* The theme is page-builder independent.
