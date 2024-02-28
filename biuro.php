<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Wycieczki krajoznawcze</title>
</head>
<body>
    <div id="baner">
        <h1>WITAMY W BIURZE</h1>
    </div>
    <div id="dane">
        <h3>ARCHIWUM WYCIECZEK</h3>
        <?php
        $host="localhost";
        $user="root";
        $pass="";
        $dbname="egzamin4";

        $conn=mysqli_connect($host,$user,$pass,$dbname);

        if(!$conn){
            echo ("failed" . mysqli_connect_error());
        } //else echo "connected";

        $sql="SELECT id,cel,cena FROM `wycieczki` WHERE dostepna=0";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo $row["id"] . ". " . $row["cel"] . "cena: " . $row["cena"] . "<br>";
            }
        }
        ?>
    </div>
    <div id="lewy">
        <h3>NAJTANIEJ...</h3>
        <table>
            <tr>
                <td>Włochy</td>
                <td>od 1200zł</td>
            </tr>
            <tr>
                <td>Francja</td>
                <td>od 1200zł</td>
            </tr>
            <tr>
                <td>Hiszpania</td>
                <td>od 1400zł</td>
            </tr>
        </table>
    </div>
    <div id="srodkowy">
        <h3>TU BYLIŚMY</h3>
        <?php
        $host="localhost";
        $user="root";
        $pass="";
        $dbname="egzamin4";

        $conn=mysqli_connect($host,$user,$pass,$dbname);

        if(!$conn){
            echo ("failed" . mysqli_connect_error());
        } //else echo "connected";

        $sql1="SELECT nazwaPliku,podpis FROM `zdjecia` ORDER BY podpis DESC";
        $result1=mysqli_query($conn,$sql1);

        if(mysqli_num_rows($result1)>0){
            while($row=mysqli_fetch_assoc($result1)){
                echo "<img src='" . $row["nazwaPliku"] . "' alt='" . $row["podpis"] . "'class=obraz>";
            }
        }
        ?>
    </div>
    <div id="prawy">
        <h3>SKONTAKTUJ SIE</h3>
        <a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: Mateusz Pogoda</p>
    </div>
</body>
</html>