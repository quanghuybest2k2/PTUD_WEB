<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random ngẫu nhiên nên không từ chối được</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    $member = array("Quang Huy", "Sang", "Trang", "Sương", "Nhật Huy", "Minh Nhật");
    $random = array_rand($member, 5);
    echo $member[$random[0]] . "<br>";
    echo $member[$random[1]] . "<br>";
    echo $member[$random[2]] . "<br>";
    echo $member[$random[3]] . "<br>";
    echo $member[$random[4]] . "<br>";
    ?>
    <div class="container">
        <div class="text-center">Random ngẫu nhiên</div>
        <div class="form-group">
            <label for="chonSoNguoi">Chọn số người random:</label>
            <select class="form-control" id="chonSoNguoi" name="chonSoNguoi">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ten1">Người số 1:</label>
            <input type="text" class="form-control" placeholder="Nhập tên thứ 1" id="ten1">
        </div>
        <div class="form-group">
            <label for="ten2">Người số 2:</label>
            <input type="text" class="form-control" placeholder="Enter password" id="ten2">
        </div>
        <div class="form-group">
            <label for="ten3">Người số 3:</label>
            <input type="text" class="form-control" placeholder="Enter password" id="ten3">
        </div>
        <div class="form-group">
            <label for="ten4">Người số 4:</label>
            <input type="text" class="form-control" placeholder="Enter password" id="ten4">
        </div>
        <button type="submit" class="btn btn-success">Random</button>
    </div>


</body>

</html>