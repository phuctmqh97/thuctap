<?php

header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST['dangnhap']))
{
    include('db.php');
  
    $username = addslashes($_POST['username']);
    $email = addslashes($_POST['email']);
    $phone = addslashes($_POST['phone']);
    $password = addslashes($_POST['password']);
  
if (!$username || !$password) {
    echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
  
    $password = md5($password);
  
    $query = "SELECT username, password FROM sinh_vien WHERE username='$username'";

    $result = mysqli_query($connect, $query) or die( mysqli_error($connect));

if (!$result) {
    echo "Tên đăng nhập hoặc mật khẩu không đúng!";
} else {
    echo "Đăng nhập thành công!";
}
  
$row = mysqli_fetch_array($result);
  
if ($password != $row['password']) {
    echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
  
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
echo "Xin chào <b>" .$username . "</b> " . $email . $phone . $password ." . Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
die();
// $connect->close();
}
?>