<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(^_^)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    $de = "Đề bài: ";
    $gachNgang = "<hr/>";
    ?>
    <div class="container">
        <!-- Bai 1 -->
        <h2>Bài 1:</h2>
        <p><?php echo $de; ?>Tạo 1 trang web php và xuất ra câu "Hello World!"</p>
        <?php echo "Hello World!"?>
        <?php echo $gachNgang; ?>
        <!-- Bai 2 -->
        <h2>Bài 2:</h2>
        <p><?php echo $de; ?>Viết chương trình php để tìm số lớn nhất trong 3 số:</p>
        <?php
        $a = 2;
        $b = 14;
        $c = 1;
        if($a>$b){
            if($a>$c)
                echo "Số lớn nhất là a: $a";
            else
            echo "Số lớn nhất là c: $c";
        }
        else{
            if($c>$b)
            echo "Số lớn nhất là c: $c";
            else

            echo "Số lớn nhất là b: $b";
        }
        ?>
        <?php echo $gachNgang; ?>
        <!-- Bai 3 -->
        <h2>Bài 3:</h2>
        <p><?php echo $de; ?>Viết chương trình php để hoán đổi 2 số.</p>
        <?php 
            $a = 10;
            $b = 20;
            echo "a = $a"."<br/>"."b = $b"."<br/>";
            $a = $a + $b; // a = 30
            $b = $a - $b; // b = 10
            $a = $a - $b; // a = 20
            echo "<b> Sau khi hoán đổi"."</br>"." a = $a"."<br/>"."b = $b<b/>";
        ?>
        <?php echo $gachNgang; ?>
        <!-- Bai 4 -->
        <h2>Bài 4:</h2>
        <p><?php echo $de; ?>Viết chương trình php để hiểu hàm Gettype()</p>
        <?php 
        $no = 5;
        $value = 13.5;
        $name = "Bipin R. Prjapati";
        $var = true;
        $myarray = array(110, 45, "Bipin", 1.5, true);
        echo gettype($no)."<br/>";
        echo gettype($value)."<br/>";
        echo gettype($name)."<br/>";
        echo gettype($var)."<br/>";
        echo gettype($myarray)."<br/>";
        echo $gachNgang; 
        $data = array(1,1.5,null, "Bipin", new stdclass, true);
        foreach($data as $value){
            echo gettype($value)."|";
        }
        ?>
        <?php echo $gachNgang; ?>
        <!-- Bai 5 -->
        <h2>Bài 5:</h2>
        <p><?php echo $de; ?>Cho ví dụ về hàm substr():</p>
        <b>Nếu bắt đầu bằng số dương, chuối trả về vị trị bắt đầu trong chuỗi, bắt đầu từ 0.</b><br /><br />
        <?php 
          echo "Vị trí cắt từ đầu: ".substr("abcdef", 2)."<br/>";
        ?>
        <b>Nếu bắt đầu bằng số âm, chuối trả về vị trị từ cuối tới trong chuỗi</b><br /><br />
        <?php 
          echo "Vị trí cắt từ cuối: ".substr("abcdef", -2)."<br/>";
        ?>
        <b>Nếu bắt đầu <= string, trả về false.</b><br /><br />
                <?php 
          echo "Bắt đầu <= chuỗi ".substr("abcdef", 7)."<br/>";
          echo "Finish";
        ?>
                <?php echo $gachNgang; ?>
                <!-- Bai 6 -->
                <h2>Bài 6:</h2>
                <p><?php echo $de; ?>Cho ví dụ về hàm so sánh chuỗi strcmp()</p>
                <?php 
                $str1 = "a"; //ascii = 97
                $str2 = "b"; //ascii = 98
                echo strcmp($str1, $str2)."<br/>"; // so sánh bằng mã ascii, trả về -1 khi str1 < str2
                $str3 = "b";
                $str4 = "b";
                echo strcmp($str3, $str4)."<br/>"; // trả về 0 khi cả 2 bằng nhau.
                $str5 = "Anil";
                $str6 = "anil";
                echo strcmp($str5, $str6)."<br/>"; //trả về 1 khi str5 > str6
        ?>
    </div>
</body>

</html>