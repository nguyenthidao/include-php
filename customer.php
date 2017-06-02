<!doctype html>
<html lang="en">
<head>
    <title>Customer</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #000;
        }

        form{
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        Tu: <input type="text" name="fromDate" placeholder="From">
        Den <input type="text" name="toDate" placeholder="To">
        <button type="submit" value="Tim">Tim</button>
    </form>

    <?php
        function searchByDate($formDate, $toDate, $customerlist){
            $flag = 0;

            foreach($customerlist as $key=>$values){
                $customer_birthday = $values['ngaysinh'];

                if($customer_birthday >= $formDate && $customer_birthday <= $toDate) {
                    echo "<tr>";
                    echo "<td>". $key. "</td>";
                    echo "<td>". $values['ten'] ."</td>";
                    echo "<td>". $values['diachi'] ."</td>";
                    echo "<td>". $values['ngaysinh'] ."</td>";
                    echo "</tr>";
                    $flag = 1;
                } elseif(empty($formDate) || empty($toDate)){
                    $flag = 0;
                }
            }

            if($flag == 0){
                echo "Sorry, not found!";
            }

        }
    ?>

    <table>
        <caption><h1>Danh sach khach hang</h1></caption>
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>Ngay sinh</th>
            <th>Dia chi</th>
        </tr>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $fromDate = $_POST['fromDate'];
                $toDate   = $_POST['toDate'];

                $customerlist = array(
                    "1" => array(
                        "ten" => "kaki",
                        "diachi" => "hanoi",
                        "ngaysinh" => "1994-03-20"
                    ),
                    "2" => array(
                        "ten" => "kaki",
                        "diachi" => "hanoi",
                        "ngaysinh" => "1994-03-20"
                    ),
                    "3" => array(
                        "ten" => "kaki",
                        "diachi" => "hanoi",
                        "ngaysinh" => "1994-03-20"
                    ),
                    "4" => array(
                        "ten" => "kaki",
                        "diachi" => "hanoi",
                        "ngaysinh" => "1994-03-20"
                    )
                );

                searchByDate($formDate, $toDate, $customerlist);
            }
        ?>
    </table>



</body>
</html>