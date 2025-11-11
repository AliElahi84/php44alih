<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $height = 1.86 ;
        $weight = 83 ;
        $bmi = $weight/($height*$height);
        echo "$bmi<br>";
        if ($bmi >=30){
            echo "fat";
        }elseif($bmi>25){
            echo "over weight";
        }elseif($bmi>=18.5){
            echo "normal";
        }else{
            echo "under weight";
        }
    ?>
</body>
</html>