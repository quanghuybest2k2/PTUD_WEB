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
        $b = 1;
        $c = 9;
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

    </div>
</body>

</html>