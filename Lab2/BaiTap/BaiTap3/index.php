<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính điểm thi đại học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-sm border" style="background-color: #efcedf;">
        <form action="./ketqua.php" method="post">
            <h1 class="text-center" style="background-color: #c83567;">KẾT QUẢ THI ĐẠI HỌC</h1>
            <div class="form-group">
                <label for="">Toán:</label>
                <input type="text" class="form-control" placeholder="Nhập điểm toán..." name="Toan" />
            </div>
            <div class="form-group">
                <label for="">Lý:</label>
                <input type="text" class="form-control" placeholder="Nhập điểm lý..." name="Ly" />
            </div>
            <div class="form-group">
                <label for="">Hóa:</label>
                <input type="text" class="form-control" placeholder="Nhập điểm hóa..." name="Hoa" />
            </div>
            <div class="form-group">
                <label for="">Điểm chuẩn:</label>
                <input type="text" class="form-control" placeholder="Nhập điểm chuẩn..." name="DiemChuan" required />
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary" name="XemKetQua">Xem kết quả</button>
            </div>
        </form>
    </div>
</body>

</html>