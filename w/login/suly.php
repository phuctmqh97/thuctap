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
<?
$result = '';
if (isset($_POST['tinh'])){
    $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
    $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';

    if ($a == ''){
        $result = 'bạn chưa nhập vào số a';
    }elseif ($a == 0){
        $result = 'bạn nhập số a khác 0';
    }elseif ($b == ''){
        $result = 'bạn chưa nhập số b';
    }else {
        $result = -($b) / $a;
    }
    var_dump($result);die;
}

?>
     <form METHOD="post" action="">
         <input type="text" style="width: 12px" name="a" value="">x
         +
         <input type="text" style="width: 12px" name="b" value="">
         <br>
         <button name="tinh" type="submit">tính</button>
     </form>
<?
echo $result;
?>
</body>
</html>