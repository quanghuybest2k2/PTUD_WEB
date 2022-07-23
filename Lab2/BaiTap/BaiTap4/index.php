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
        <form action="./TinhTien.php" method="post">
            <h1 class="text-center" style="background-color: #006f78;">TÍNH TIỀN KARAOKE</h1>
            <label for="">Giờ bắt đầu:</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Bắt đầu lúc mấy giờ?" name="GioBatDau" />
                <div class="input-group-append">
                    <span class="input-group-text">(h)</span>
                </div>
            </div>
            <label for="">Giờ kết thúc:</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Kết thúc lúc mấy giờ?" name="GioKetThuc" />
                <div class="input-group-append">
                    <span class="input-group-text">(h)</span>
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary" name="TinhTien">Tính tiền</button>
            </div>
        </form>
    </div>
</body>

</html>