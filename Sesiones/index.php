<?
session_start();
if(isset($_SESSION['visitas'])){
    $_SESSION['visitas']++;
} else {
        $_SESSION['visitas'] = 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>
    <?
    echo "Visita numero:" . $_SESSION['visitas'];
    ?>
    </h1> 
     
</body>
</html>