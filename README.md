# Web o čajích (dynamický)

## Příprava

1. Přihlas se **v terminálu** na server TuX a přesuň se do adresáře `~/www`
2. Gitem naklonuj repozitář `https://github.com/edumach/caj2`
3. Tím vznikne adresář `~/www/caj2/`
    ```
    $ cd www
    $ git clone https://github.com/edumach/caj2
    cd caj2
    ```
4. Zkontroluj funkčnost webu na URL `https://tux.panska.cz/~10XPrijmeniJ/caj2`

## Teorie (logika kódu)

- **PHP skript** generuje obsah na stránce z **[asociativního pole](https://www.w3schools.com/php/php_arrays_associative.asp)**:

    Běžné 1D asociativní pole vypadá takto:

    ```php
    $pole_1d = ["klic1" => "hodnota1", "klic2" => "hodnota2"]
    ```

    V následujícím ukázkovém případě jde o 2D pole. Jeho prvky jsou vnořené 1D pole: 

    ```php
    $pole_2d = [
      ["klic1.1" => "hodnota1.1", "klic1.2" => "hodnota1.2"],
      ["klic2.1" => "hodnota2.1", "klic2.2" => "hodnota2.2"],
      ["klic3.1" => "hodnota3.1", "klic3.2" => "hodnota3.2"]
    ]
    ```
    
    >Asociativní pole není nic speciálního. Podporují jej i jiné jazyky. Např. Python má datový typ [Slovník](https://www.w3schools.com/python/python_dictionaries.asp) (dictionary).

**Jak skript funguje:**

- Pole `$caje` – uchovává informace o jednotlivých čajích (název, obrázek, popis, využití).
- Smyčka `foreach` prochází všechny prvky pole a generuje HTML kód sekcí pro každý čaj ([https://www.w3schools.com/php/php_looping_foreach.asp](https://www.w3schools.com/php/php_looping_foreach.asp)).
- Funkce `date()` – dynamické zobrazení aktuálního roku v zápatí.

**Výhody tohoto dynamického řešení**:
- Při přidání nového čaje stačí upravit pouze pole `$caje`, není nutné zasahovat do HTML kódu.
- Lze snadno rozšířit o nové sekce (např. recenze, formuláře).
- Vkládání obsahu do HTML pomocí `echo`.
- Možnost snadné úpravy nebo rozšíření o nové čaje bez změny HTML.


## Úkoly (jsou DVA a prolínají se!)

1. Web obsahuje jeden vzorový článek o černém čaji. Podle stejného schématu a struktury přidej na stránku další čaj. Název čaje, obrázek (hypertextový odkaz) a doprovodný text. Informace čerpej z webu [www.vybornycaj.cz](https://www.vybornycaj.cz).

2. Vytvoř git commit, popis bude název čaje, např. "Přidaný čaj..."

3. Přidej třetí čaj a dokonči commitem jako v předchozím případě.

4. Pod každým z čajů bude odkaz hypertextový odkaz "**Více informací**", který povede na nějaký jiný web s tímto druhem čaje. Ten si dohledejte. Tato URL budou vloženy jako prvky pole stejně, jako jiné údaje. Do těla cyklu `foreach` vlož odstavec, který vypíše vytvoří odkaz "Více informací" s příslušnou URL.
   
5. Dokonči commitem "Přidány URL"

## Odevzdání a hodnocení

Z tohoto cvičení budou celkem **dvě známky**:

### (1) Funkční web

Funkční web na URL: `https://tux.panska.cz/~10XPrijmeniJ/caj2`.

### (2) Repozitář na GitLabu

Git repozitář (adresář **`caj2`**) bude nahraný na vašem úložišti **`gitlab.panska.cz`**. Kontrolu si provedu přímo na něm.




