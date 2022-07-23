<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["TinhTien"])) {
        $GioBatDau = $_POST["GioBatDau"];
        $GioKetThuc = $_POST["GioKetThuc"];
    } else {
        return false;
    }
    $ThanhToan = 0;
    $SoGio = $GioKetThuc - $GioBatDau;
    if ($GioBatDau < 10 || $GioKetThuc > 24) {
        echo "Tạm thời đóng cửa! Giờ mở từ 10h đến 24h";
    } else if ($GioKetThuc <= 17) {
        $ThanhToan = $SoGio * 20000;
    } else if ($GioKetThuc <= 24) {
        $ThanhToan = $SoGio * 45000;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền Karaoke</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https:/    /cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-sm border" style="background-color: #009faa;">
        <form method="post">
            <h1 class="text-center" style="background-color: #006f78;">TÍNH TIỀN KARAOKE</h1>
            <label for="">Giờ bắt đầu:</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php echo $GioBatDau ?>" disabled />
                <div class="input-group-append">
                    <span class="input-group-text">(h)</span>
                </div>
            </div>
            <label for="">Giờ kết thúc:</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php echo $GioKetThuc ?>" disabled />
                <div class="input-group-append">
                    <span class="input-group-text">(h)</span>
                </div>
            </div>
            <label for="">Tiền thanh toán:</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php echo $ThanhToan ?>" disabled />
                <div class="input-group-append">
                    <span class="input-group-text">(VNĐ)</span>
                </div>
            </div>
            <div class="row justify-content-center">
                <a href="./index.php"><button type="button" class="btn btn-primary">Quay lại</button></a>
            </div>
        </form>
    </div>
</body>

</html>