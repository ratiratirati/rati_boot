<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
<script>
   

    setTimeout(function() {
        $('.error').slideToggle()
    }, 3000);
</script>
<?php
include ('server.php');
include ('proces.php');
?>
<div class="header">
    <a target="_blank" href="shekitxvebi.php">შეკითხვები</a>
</div>
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
        <div class="naswavli">
            <?php
            $sql = "SELECT COUNT(id) AS list FROM naswavli";
            $res = mysqli_query($con,$sql);
            if(mysqli_num_rows($res)){
                $row = mysqli_fetch_assoc($res);
                echo 'ისწავლა: ( '.$row['list'].' )';
            }
            ?>
        </div>
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