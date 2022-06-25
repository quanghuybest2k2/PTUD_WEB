<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo input</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Cau 2 Demo input -->
    Information:
    <?php 
    echo "Fullname: ".$_GET["username"]."<br/>";
    echo "Password: ".$_GET["pass"]."<br/>";
    echo "Fullname: ".$_GET["gender"]."<br/>";
    echo "Fullname: ".$_GET["branch"]."<br/>";
    ?>
</body>

</html>