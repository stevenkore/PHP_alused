<!doctype html>
<html>
<head>
    <title>Koodi taaskasutamine</title>
    <style>
        menu {
            padding: 0px 0px 50px 0px;
        }
        body{
            background: lightgrey;
            font-family: "Lucida Console", Monaco, monospace;
        }
    </style>
</head>
<body>
<menu>
    <a href="index.php">Avaleht<a/>
        <a href="index.php?leht=portfoolio">Portfoolio<a/>
            <a href="index.php?leht=kaart">Kaart<a/>
                <a href="index.php?leht=kontakt">Kontakt<a/>
</menu>

<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
} else {
    ?>

    <h1>Avaleht</h1>


    <?php
}
?>

</body>
</html>