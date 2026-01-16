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

# Úkoly

Obsahem cvičení je pomocí klonování repozitáře z GitHubu zprovoznit jednoduchý web na serveru TuX. Dále jej upravit podle zadání. 

1. Přihlas se na server Tux a přesuň se do adresáře `~/www`
2. Gitem naklonuj repozitář `https://github.com/edumach/caj2`
3. Tím vznikne adresář `~/www/caj2/`
4. Zkontroluj funkčnost webu na URL `https://tux.panska.cz/~10XPrijmeniJ/caj2`
5. Web obsahuje jeden vzorový článek o černém čaji. Podle stejného schématu a struktury přidej na stránku další dva čaje. Vhodné obrázky a doprovodné texty si dohledej na webu [www.vybornycaj.cz](https://www.vybornycaj.cz):
6. Do projektu přidej obrázek (stačí odkaz) a vytvoř kód pro zobrazení druhého čaje.
7. Do projektu přidej obrázek (stačí odkaz) a vytvoř kód pro zobrazení třetího čaje.
8. Pod každý z čajů přidej hypertextový odkaz na články o tomto čaji. Ten bude vložený v odstavci. Text bude pro každý ze tří odkazů stejný: "Více informací".

## Odevzdání
- Funkční web na URL: `https://tux.panska.cz/~10XPrijmeniJ/caj2`. Kontrolu si provedu přímo tam.

