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
    <form method="post" action="winkelwagen.php" class="body">
        <p><a href="ticketinfo.php">Basic ticket</a> €40 Aantal(max 6):<input type="text" name="basic" value="0"></p>
        <p><a href="ticketinfo.php">Premium ticket</a> €60 Aantal(max 6):<input type="text" name="premium" value="0"></p>
        <p><a href="ticketinfo.php">VIP ticket</a> €100 Aantal(max 6):<input type="text" name="vip" value="0"></p>
        <button type="submit">winkelwagen</button>
    </form>
    <div class="footer">

    </div>
</div>
</body>
</html>
