# Tabulka chování typů v PHP

Tento projekt obsahuje PHP program, který generuje tabulku s možnými kombinacemi deklarovaných typů a chováním v PHP v závislosti na režimu (striktním nebo ne-striktním). Program lze spustit v webovém prostředí, kde je vygenerovaná tabulka zobrazena ve formě webové stránky.

## Použití

1. Stáhněte si projekt nebo zkopírujte obsah souboru `index.php`.
2. Vložte soubor `index.php` do vašeho webového adresáře nebo projektu.
3. Otevřete stránku souboru `index.php` ve webovém prohlížeči.

## Ukázka

Výsledná tabulka zobrazuje kombinace deklarovaných typů a chování v závislosti na režimu (striktním nebo ne-striktním). V základním stavu jsou deklarovány různé typy (int, float, bool, atd.) a vstupní argumenty (int, float, bool, atd.). Program vyhodnocuje chování na základě deklarovaných typů a vstupních argumentů.

## Příklad výstupu

| Deklarovaný typ | Předaný argument | Striktní režim | Ne-striktní režim |
|-----------------|------------------|----------------|------------------|
| int             | int              | OK             | N/A              |
| int             | float            | Chyba          | Přetypování      |
| float           | int              | OK             | N/A              |
| float           | string           | Chyba          | Přetypování      |
| bool            | bool             | OK             | N/A              |
| bool            | int              | Chyba          | Přetypování      |
| ...             | ...              | ...            | ...              |