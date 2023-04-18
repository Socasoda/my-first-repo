<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP

// Lösungen zu den Aufgaben des Moodle Tages

echo "Aufgabe 6: <br>";

/*6. Körperoberfläche per Formular berechnen.

Die Körperoberfläche eines Menschen wird nach der Formel von Mosteller wie folgt
errechnet:

KOF = Wurzel aus h*w / 3600

In der angegebenen Formel bezeichnet h die Körpergröße in cm und w das
Körpergewicht in kg. Das Ergebnis ist die Körperoberfläche in m2.
Schreiben Sie ein Programm, das die Körperoberfläche nach der Formel von
Mosteller in m2 berechnet. Runden Sie auf zwei Nachkommastellen.*/

    ?>
    <form action="kofcalc.php" method="post">
      <p>Körpergewicht in kg <input type="number" name="weight" required></p>
        <p>Größe in cm  <input type="number" name="high" required></p>
        <input type="submit" value="Berechne" >
    </form>
    
    <?PHP
    function kof($weight, $high) 
    {
        $erg = round((sqrt($high*$weight/3600)), 2);
        echo "<br>Deine Körperoberfläche KOF beträgt : ".$erg." m²";
    }
    if (isset($_POST['weight']) && isset($_POST['high'])) 
    {
    $weight = $_POST['weight'];
    $high = $_POST['high'];
    kof($weight,$high);
    }

    ?>
</body>
</html>
