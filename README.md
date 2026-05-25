# 🚀 LaraCore

**LaraCore** je moderan web projekat razvijen u Laravel framework-u. Služi kao čvrsta osnova za učenje i implementaciju naprednih programerskih koncepata, prateći najbolje "Senior" prakse razvoja softvera.

---

## ✨ Glavne funkcionalnosti

* **Sistem objava (Posts CRUD):** Kreiranje, čitanje, ažuriranje i brisanje objava sa dinamičkim SEO-friendly URL-ovima (slugovima).
* **Sistem komentara:** Povezivanje korisnika, objava i komentara putem naprednih Eloquent relacija (`hasMany`, `belongsTo`), uz automatsko kaskadno brisanje (`cascadeOnDelete`).
* **Rich Text Editor:** Integrisan **TinyMCE** editor za stilizovanje teksta objava i komentara.
* **Maksimalna bezbednost:** Implementiran **HTML Purifier** za čišćenje unosa i sprečavanje XSS napada.
* **Čista arhitektura:** * Korišćenje **Repository Pattern-a** za odvajanje logike baze podataka od kontrolera.
    * Korišćenje **Form Requests-a** za izolovanu validaciju podataka.
* **Moderni UI/UX:** Tamna (Dark Mode) staklena (Glassmorphism) tema dizajnirana pomoću Tailwind CSS-a.

---

## 🛠️ Korišćene tehnologije

* **Backend:** PHP 8+ & Laravel 10/11
* **Baza podataka:** MySQL (tabela custom naziva `lara_posts`)
* **Frontend:** Blade šabloni & Tailwind CSS
* **Dodaci (Paketi):** * `mews/purifier` (HTML Purifier)
    * `TinyMCE` (preko CDN-a)


