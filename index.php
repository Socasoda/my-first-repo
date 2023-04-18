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

/* 1. In einer FOR-Schleife sollen die Zahlen von 0 bis 100 untereinander und
 rückwärts mit PHP ausgegeben werden. */
 echo "Aufgabe 1: <br>";
    for ($i=100; $i>=0; $i--) 
    {
        echo $i."<br>";
    }
echo "<br><br>";
echo "Aufgabe 2: <br>";
/*2. Ein Array mit dem Bezeichner letters solle die Buchstaben A-Z halten.
Iterieren Sie mit einer While-Schleife über das Array und geben die
Buchstaben nacheinander mit einem whitespace dazwischen aus.
Tipp 1: count()
Tipp 2: Arrays sind Index basiert.*/
 
    $letters = range('A','Z');
    $elements = count($letters)-1;
    $i = 0;
    while ($i <= $elements) 
    {
        echo $letters[$i]." ";
        $i++;

    }
echo "<br><br>";
echo "Aufgabe 3: <br>";

/*3. Mit einer Do While Schleife soll der aktuelle Wert der Zählvariablen gefolgt von
dem Satz "PHP macht Spaß." ausgegeben werden. Jede itereation soll in
einer neuen Zeile ausgegeben werden. Die Zählvariablen hat den
Initialisierungswert 11. Es soll so lange iteriert werden, wie der Wert der
Zählvariablen größer als 5 ist.*/
    $zaehlvariable = 11; // Sollte wahrscheinlich 1 heißen ? - halte mich an Text!
    do 
    {
        echo"PHP macht spaß<br>";
        $zaehlvariable--;
    } while($zaehlvariable > 5);

echo "<br><br>";
echo "Aufgabe 4: <br>";
/*4. Definieren Sie ein Assoziatives Array mit dem Bezeichner cars. Folgende
Werte beinhaltet das Array als Key Value Pairs
"BMW" "7er"
"Mercedes" "A-Klasse"
"Nissan">"X-Trail"
Iterieren Sie mit einer Foreach Schleife über das Array cars und geben die
zusammengehoerigen Key Value Pairs in einer Zeile aus.*/

    $cars = ["BMW" => "7er"
            ,"Mercedes" => "A-Klasse"
            ,"Nissan" => "X-Trail"];
            
    foreach($cars as $marke => $modell) {
        echo $marke." => ".$modell."<br>";
    }
    ?>
</body>
</html>
