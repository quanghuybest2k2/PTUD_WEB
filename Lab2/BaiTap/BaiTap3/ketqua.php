<?php
$previous = "javascript:history.go(-1)"; // go back

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['XemKetQua'])) {
        if (empty($_POST['Toan'] && $_POST['Ly'] && $_POST['Hoa'])) {
            echo "<script>alert('Bạn cần nhập đẩy đủ tổ hợp 3 môn! Vui lòng nhập lại');</script>";
            echo "<a href='$previous'><button type='submit'>Quay trở về</button></a>";
            //header('location: index.php');
            return false;
        } else {
            $Toan = $_POST['Toan'];
            $Ly = $_POST['Ly'];
            $Hoa = $_POST['Hoa'];
        }
    }
    $TongDiem = $Toan + $Ly + $Hoa;
    $DiemChuan = $_POST['DiemChuan'];
    $KetQuaThi;
    if ($TongDiem >= $DiemChuan) {
        $KetQuaThi =  "Đậu";
    } else {
        $KetQuaThi = "Rớt";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tỉnh điểm thi đại học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-sm border" style="background-color: #efcedf;">
        <form action="./index.php" method="post">
            <h1 class="text-center" style="background-color: #c83567;">KẾT QUẢ THI ĐẠI HỌC</h1>
            <div class="form-group">
                <label for="">Toán:</label>
                <input type="text" class="form-control" value="<?php echo $Toan ?>" disabled />
            </div>
            <div class="form-group">
                <label for="">Lý:</label>
                <input type="text" class="form-control" value="<?php echo $Ly ?>" disabled />
            </div>
            <div class="form-group">
                <label for="">Hóa:</label>
                <input type="text" class="form-control" value="<?php echo $Hoa ?>" disabled />
            </div>
            <div class="form-group">
                <label for="">Điểm chuẩn:</label>
                <input type="text" class="form-control" value="<?php echo $DiemChuan ?>" disabled />
            </div>
            <div class="form-group">
                <label for="">Tổng điểm:</label>
                <input type="text" class="form-control" <?php echo "value='$TongDiem'" ?> disabled />
            </div>
            <div class="form-group">
                <label for="">Kết quả thi:</label>
                <input type="text" class="form-control" <?php echo "value='$KetQuaThi'" ?> disabled />
            </div>
            <div class="row justify-content-center">
                <?php echo "<a href='$previous'><button type='submit' class='btn btn-primary'>Quay trở về</button></a>" ?>
            </div>
        </form>
    </div>
</body>

</html>