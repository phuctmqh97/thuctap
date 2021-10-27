<?php
$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('Lỗi kết nối');
 mysqli_set_charset($conn, "utf8");

if(isset($_POST['dangky'])){
$username = trim($_POST['username']);
$password = md5($_POST['password']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$errors = array();

if (empty($username)) {
   array_push($errors, "Username");
}
if (empty($email)) {
   array_push($errors, "Email");
}
if (empty($phone)) {
   array_push($errors, "phone");
}
if (empty($password)) {
   array_push($errors, "password");
}

$sql = "SELECT * FROM sinh_vien WHERE username = '$username' OR email = '$email'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
        echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="dangky.php";</script>';
   die ();
}
    else  {
    $sql = "INSERT INTO sinh_vien (username, password, email, phone) VALUES ('$username','$password','$email','$phone')";
     if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
//        if (mysqli_query($conn, $sql)){
//            echo "</br>Tên đăng nhập: ".$_POST['username']."<br/>";
//            echo "Mật khẩu: " . md5($_POST['password']) ."<br/>";
//            echo "Email đăng nhập: ". $_POST['email']."<br/>";
//            echo "Số điện thoại: ".$_POST['phone']."<br/>";
//        }
       
    }
}
?>
