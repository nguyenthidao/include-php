<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
    <h2>Tu dien Anh - Viet</h2>
    <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="search" placeholder="Nhap tu diem">
        <input type="submit" value="Tim">
    </form>

    <?php
        $dic = array("age"     => "tuoi",
                     "address" => "dia chi",
                     "server"  => "may chu",
                     "computer"=> "may tinh"

            );

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $search_word = $_POST['search'];
            $flag = 0;

            foreach($dic as $key => $value){
                if($search_word == $key){
                    echo "<br> Nghia cua" . $key . "la $value";
                    $flag = 1;
                }
            }

            if($flag == 0){
                echo "khong tim thay";
            }
        }
    ?>
</body>
</html>