<?php
$msg='';
if(isset($_POST['swavleba'])){
    $shekitxva = mysqli_real_escape_string($con,$_POST['shekitxva']);
    $pasuxi = mysqli_real_escape_string($con,$_POST['pasuxi']);

    if(empty($shekitxva)){
        array_push($errors,'შეკითხვის ველი ცარიელია');
    }

    if(empty($pasuxi)){
        array_push($errors,'პასუხის ველი ცარიელია');
    }


    if(count($errors) == 0 ){
        $sql = "INSERT INTO naswavli (shekitxva,pasuxi) VALUES ('$shekitxva','$pasuxi')";
        if(mysqli_query($con,$sql)){
            $smg = "წარმატებით ისწავლა";
        }
    }
}


if(isset($_POST['pasuxis'])){
    $shekitxvas = mysqli_real_escape_string($con,$_POST['shekitxvas']);

    if(empty($shekitxvas)){
        array_push($errors,'შეკითხვის ველი ცარიელია');
    }

    if(count($errors) == 0 ){
        $sql = "SELECT * FROM naswavli WHERE shekitxva='$shekitxvas'";
        $res = mysqli_query($con,$sql);
        if(mysqli_num_rows($res)){
            $row = mysqli_fetch_assoc($res);
            $msg= $row['pasuxi'];
        }else{
            array_push($errors,'მაპატიე შეკითხვა ვერ გავიგე :(');
        }
    }
}


?>