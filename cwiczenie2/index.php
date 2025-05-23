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
            <h1>Zamów korepetycje online</h1>
        </header>

        <form action="korepetycje.php" method="post">
            <div>
                <label>Imię: <input type="text" name="imie" required></label>
            </div>

            <div>
                <label>Przedmiot:
                    <select name="przedmiot" required>
						<option style="display: none;" value="" disabled selected>Wybierz przedmiot</option>
                        <option value="polski">Język polski</option>
                        <option value="historia">Historia</option>
                        <option value="wos">Wiedza o społeczeństwie</option>
                    </select>
                </label>
            </div>

            <div>
                <label>Liczba godzin:
                    <input type="number" name="godziny" min="1" required>
                </label>
            </div>

            <div>
                <label>
                    <input type="checkbox" name="notatki"> Chcę otrzymać notatki (+5 zł za każdą godzinę)
                </label>
            </div>

            <div>
                <input type="submit" value="Zamów korepetycje">
            </div>
        </form>
    </article>
</main>
</body>
</html>
