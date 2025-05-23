<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>2 - Obsługa formularzy w PHP</title>
    <link href="arkusz-cwiczenia.css" rel="stylesheet">
</head>
<body>
<main>
    <article>
        <header>
            <h1>Podsumowanie zamówienia korepetycji</h1>
        </header>

<?php

if (!isset($_POST['imie'], $_POST['przedmiot'], $_POST['godziny'])) {
    header("Location: index.php");
    exit();
}

$imie = trim($_POST['imie']);
$przedmiot = $_POST['przedmiot'];
$godziny = (int)$_POST['godziny'];
$notatki = isset($_POST['notatki']);


$cennik = [
    "polski" => 50,
    "historia" => 60,
    "wos" => 45
];

if ($imie === '' || !array_key_exists($przedmiot, $cennik) || $godziny <= 0) {
    echo "<p>Błąd: nieprawidłowe dane formularza.</p>";
    echo '<p><a href="index.php">Wróć do formularza</a></p>';
} else {
    $stawka = $cennik[$przedmiot];
    $cenaPodstawowa = $stawka * $godziny;
    $cenaNotatek = $notatki ? 5 * $godziny : 0;
    $calkowityKoszt = $cenaPodstawowa + $cenaNotatek;

    echo "<p>Dziękujemy, <strong>" . htmlspecialchars($imie) . "</strong>!</p>";
    echo "<p>Zamówiłeś/aś korepetycje z przedmiotu: <strong>" . htmlspecialchars($przedmiot) . "</strong></p>";
    echo "<p>Liczba godzin: <strong>$godziny</strong></p>";
    echo "<p>Notatki: <strong>" . ($notatki ? "tak" : "nie") . "</strong></p>";
    echo "<p><strong>Łączny koszt: $calkowityKoszt zł</strong></p>";
}
?>
    </article>
</main>
</body>
</html>
