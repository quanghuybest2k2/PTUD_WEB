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
                    <label>Chọn phép tính: </label>
                    <input type="radio" name="PhepTinh" />
                    <label>Cộng</label>
                    <input type="radio" name="PhepTinh" />
                    <label>Trừ</label>
                    <input type="radio" name="PhepTinh" />
                    <label>Nhân</label>
                    <input type="radio" name="PhepTinh" />
                    <label>Chia</label>
                </div>
                <div class="form-group">
                    <label style="color: blue;">Số thứ Nhất:</label>
                    <input type="text" name="SoThuNhat" />
                </div>
                <div class="form-group">
                    <label style="color: blue;">Số thứ Nhì:</label>
                    <input type="text" name="SoThuNhi" />
                </div>
                <button type="submit" class="btn btn-primary" name="Tinh">Tính</button>
        </form>
    </div>
    </div>
</body>

</html>