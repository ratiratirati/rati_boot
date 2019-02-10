<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>
<body>
<?php
include ('server.php');
include ('proces.php');
?>
<div class="form_box">
    <form method="post" action="index.php">
        <input type="text" name="shekitxva" placeholder="შეკითხვა">
        <br>
        <input type="text" name="pasuxi" placeholder="პასუხი">
        <br>
        <button name="swavleba">სწავლება</button>
        <br>
        <input type="text" name="shekitxvas" placeholder="შეკითხვა">
        <br>
        <button name="pasuxis">პასუხი</button>
        <div class="msg">
            <?php echo $msg;?>
        </div>
        <div class="error">
            <?php include ('error.php')?>
        </div>
    </form>
</div>
</body>
</html>