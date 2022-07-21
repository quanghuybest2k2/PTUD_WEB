<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép tính</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="./ketquapheptinh.php" method="post">
            <div class="content">
                <h1>PHÉP TÍNH TRÊN HAI SỐ</h1>
                <div class="form-group" id="lableChonPT">
                    <label>Chọn phép tính: Hiển thị phép tính chọn</label>
                </div>
                <div class="form-group">
                    <label style="color: blue;">Số 1:</label>
                    <input type="text" />
                </div>
                <div class="form-group">
                    <label style="color: blue;">Số 2:</label>
                    <input type="text" />
                </div>
                <div class="form-group">
                    <label style="color: blue;">Kết quả:</label>
                    <input type="text" />
                </div>
                <a href="./pheptinh.php">Quay lại trang trước</a>
        </form>
    </div>
    </div>
</body>

</html>