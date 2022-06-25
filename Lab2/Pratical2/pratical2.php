<!-- Form and URL -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and URL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- Cau 1 -->
        <form action="querystr.php">
            Full name: <input type="text" name="username"> <br>
            Password: <input type="Password" name="pass"> <br>
            Gender:
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <br>
            Branch:
            <select name="branch">
                <option>C.E.</option>
                <option>Mech</option>
                <option>E.C.</option>
                <option>I.T.</option>
                <option>E.E.</option>
            </select>
            <input type="Submit" value="Save"> <input type="Reset" value="Cancel">
        </form>
    </div>
</body>

</html>