<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="POST">
        <table>
            <tr>
                <th>First Name</th>
                <td><input type="text" name="first-name"></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="last-name"></td>
            </tr>
            <tr>
                <th>Full Name</th>
                <td><input type="text" value="<?php echo isset($result)? $result : ''?>"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="btn"></td>
            </tr>
        </table>
    </form>

</body>
</html>