<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("db_module.php");
    if (isset($_GET["id"])) {
        echo "<table border='1px' width='50%'>
        <tr style='text-align:left'>
            <th>username</th>
            <th>fullname</th>
            <th>email</th>
            </tr>";
        $result = executeQuery("SELECT * from tb_user where id=" . $_GET["id"]);

        while ($rows = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $rows['username'] . "</td>";
            echo "<td>" . $rows['fullname'] . "</td>";
            echo "<td>" . $rows['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    };
    ?>
</body>

</html>