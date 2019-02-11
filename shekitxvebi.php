<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/shekitxva.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>
<body>
<?php
include ('server.php');
include ('proces.php');
?>
    <?php

    $sql = "SELECT * FROM naswavli";
    $res = mysqli_query($con,$sql);
    if(mysqli_num_rows($res)){
       while ($row = mysqli_fetch_assoc($res)){
           echo '<div class="shekitxvebi">'.$row['shekitxva'].'</div>';
       }
    }


    ?>
</body>
</html>