# Web o čajích (dynamický)

**PHP skript**, který generuje obsah na stránce z PHP pole `$caje`.

## Konstrukční prvky

**PHP logika:**
- Pole `$caje` – uchovává informace o jednotlivých čajích (název, obrázek, popis, využití).
- Smyčka `foreach` – automatické generování sekcí pro každý čaj.
- Funkce `date()` – dynamické zobrazení aktuálního roku.

**Dynamické vykreslování:**
- Vkládání obsahu do HTML pomocí `echo`.
- Možnost snadné úpravy nebo rozšíření o nové čaje bez změny HTML.

**Modularita:**
- Lze snadno rozšířit o nové sekce (např. recenze, formuláře).

**Výhoda dynamického řešení**: 

- Při přidání nového čaje stačí upravit pouze pole `$caje`, není nutné zasahovat do HTML kódu.
