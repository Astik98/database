<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="">
        <tr>
            <td>s no.</td>
            <td>username</td>
            <td>email</td>
            <td>message</td>
        </tr>

        <?php
        $db = mysqli_connect("localhost", "root", "", "databaseport");
        $select = "SELECT * FROM `portform`";
        $query = mysqli_query($db, $select);

        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['message'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>