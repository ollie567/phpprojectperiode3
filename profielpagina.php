<?php
$db = mysqli_connect("localhost","root","","projectperiode3php");

$select = "SELECT * FROM `bestelling`";
$result = mysqli_query($db, $select);
$bestelling = mysqli_fetch_assoc($result);
echo $bestelling[""];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div>
    <div class="header">
        <div class="logo"></div>
        <div class="menu">
            <form action="startpagina.php" class="hoofdmenu">
                <button type="submit">startpagina</button>
            </form>
            <form action="kooptickets.php" class="hoofdmenu">
                <button type="submit">tickets verkoop</button>
            </form>
            <form action="winkelwagen.php" class="hoofdmenu">
                <button type="submit">winkelwagen</button>
            </form>
            <form action="profielpagina.php" class="profiel">
                <button type="submit">profiel</button>
            </form>
        </div>
    </div>
    <div class="body">
        <form action="veranderwachtwoord.php" >
            <p>naam: gebruikersnaam</p>
            <p>wachtwoord: ********</p>
            <p>email: email</p>
            <p>woonplaats: woonplaats</p>
            <p>postcode: postcode</p>
            <button type="submit">verander wachtwoord</button>
        </form>
        <div>
            <table>
                <tr>
                    <th>Productnaam</th>
                    <th>Productafbeelding</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>voorbeeld product</td>
                    <td>placeholder</td>
                    <td>Bezorgd</td>
                </tr>
                <tr>
                    <td>voorbeeld product</td>
                    <td>placeholder</td>
                    <td>Bezorgd</td>
                </tr>
                <tr>
                    <td>voorbeeld product</td>
                    <td>placeholder</td>
                    <td>Bezorgd</td>
                </tr>
                <tr>
                    <td>voorbeeld product</td>
                    <td>placeholder</td>
                    <td>Bezorgd</td>
                </tr>
            </table>
            <form action="home.php" method="post">
            <button type="submit">Uitloggen</button>
            </form>
        </div>
    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>
