<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Čaje</title>
    <style>
    img {
      max-width: 300px;
    }
  </style>
</head>
<body>

<h1>Čaje</h1>
<p>Svět chutí a vůní</p>
<hr>

<?php
// Deklarace pole $caje obsahující informace o čajích
// samotné prvky pole $caje (zde jeden vzorový) jsou asociativní: "klíč" => "hodnota"
$caje = [
    [
        "nazev" => "Černý čaj",
        "obrazek" => "tea-black.jpg",
        "popis" => "Černý čaj je plně oxidovaný čaj s výraznou chutí a vůní. Má povzbuzující účinky díky vysokému obsahu kofeinu.",
        "vyuziti" => "Černý čaj se často pije samotný nebo s mlékem a cukrem. Používá se i jako základ pro ledové čaje."
    ]
    // další prvek pole se od předchozího odděluje čárkou
  
];

// Iterace přes každý čaj v poli $caje
foreach ($caje as $caj) {
    echo "<h2>{$caj['nazev']}</h2>";
    echo "<img src=\"{$caj['obrazek']}\" alt=\"{$caj['nazev']}\" title=\"{$caj['nazev']}\">";
    echo "<h3>Popis</h3>";
    echo "<p>{$caj['popis']}</p>";
    echo "<h3>Využití</h3>";
    echo "<p>{$caj['vyuziti']}</p>";
    echo "<hr>";
}
?>

<p>&copy; <?php echo date("Y"); ?> Čaje</p>

</body>
</html>
