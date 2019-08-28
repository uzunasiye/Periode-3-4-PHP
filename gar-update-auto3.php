<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>gar-update-auto3.php</title>

</head>
<div class="background">
    <body>
    <h1>Garage Update Auto 3</h1>
    <p>Autogegevens wijzigen in de tabel klant van de database garage.</p>

    <?php
    $id                = $_POST["idvak"];
    $autokenteken      = $_POST["autokentekenvak"];
    $automerk          = $_POST["automerkvak"];
    $autoype           = $_POST["autotypevak"];
    $autokmstand       = $_POST["autokmstandvak"];
    $klantid          = $_POST ["klantidvak"];
    require_once "gar-connect.php";
    $sql = $conn->prepare
    ("
        update auto set   autokenteken       = :autokenteken,
                          automerk           = :automerk,
                          autotype           = :autotype,
                          autokmstand        = :autokmstand,
                          klantid           = :klantid
                          where              id = :id
     ");
    $sql->execute
    ([
        "id"            => $id,
        "autokenteken"  => $autokenteken,
        "automerk"      => $automerk,
        "autotype"      => $autoype,
        "autokmstand"   => $autokmstand,
        "klantid"      => $klantid,
    ]);
    echo "De auto is gewijzigd. <br />";
    echo "<a href='gar-menu.php'> Terug naar menu </a>";
    ?>

    </body>
</div>
</html>