<?php
 require ("edit.php");
 $students = getAllStudent();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add.php">ADD</a>
    <table border="1" ceilspacnig="0" cellpadding="10"> 
        <tr>
            <td>ID</td>
            <td>name</td>
            <td>old</td>
            <td>action</td>
        </tr>
        <?php foreach ($students as $s){?>
            <tr>
                <td><?echo $s['id']?></td>
                <td><?echo $s['name']?></td>
                <td><?echo $s['old']?></td>
                <td><a href="edit.php"> sửa</a>
                    <a href="delete.php"> xóa</a>
               </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>