<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xuất mảng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <input type="text" name="SoNhap" placeholder="Nhập sô cần tìm..." />
        <button type="submit" onclick="Tim()">Tìm</button>
        <?php
        $arr_length = $_GET["dodaimang"]; 
        echo "<p>Mảng có độ dài: $arr_length</p>";
        $array = array();
        $min = 1;
        $max = 100;
        for($i=0; $i < $arr_length; $i++){
            $rand = rand($min,$max);
            echo $rand."\t";
            $array[] = $rand;
            $max_value = max($array);
            $min_value = min($array);
            $sort[] = sort($array);
            $rsort[]= rsort($array);
        }
        echo "<br/> Phần tử lớn nhất trong mảng là: ".$max_value;
        echo "<br/> Phần tử nhỏ nhất trong mảng là: ".$min_value."<br/>";
        echo "<br/> Mảng sắp xếp tăng dần: "; 
        for($i = 0; $i < count($sort); $i++) {
            echo $array[$i];
            echo "\t";
        }
        echo "<br/> Mảng sắp xếp giảm dần: "; 
        for($i = 0; $i < count($rsort); $i++) {
            echo $array[$i];
            echo "\t";
        }
        // tim
        function Tim(){
            $soNhap = $_GET["SoNhap"];
            if(in_array($soNhap, $array)){
            echo "<br />Tìm thấy ".$soNhap;
            }
            else{
            echo "<br />Không tìm thấy ".$soNhap;
            }
        }
        ?>
    </div>
</body>

</html>