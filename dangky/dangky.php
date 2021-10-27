<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="../../pluin/css/style.css">
<script src="pluin/js/lib/jquery.js"></script>
    <script src="pluin/js/dist/jquery.validate.js"></script>
  

       <script>
            $.validator.setDefaults({
        submitHandler: function () {
          alert("submitted!");
        },
      });

            $().ready(function () {    
                $("#valiform").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 2,
                    },
                        password: {
                        required: true,
                        minlength: 5,
                    },
                        phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                },
                messages: {
                    username: {
                        required: "Hãy nhập tên vào",
                        minlength: "Nhập tối thiệu 2 kí tụ",
                    },
                    password: {
                        required: "Hãy nhập vào password",
                        minlength: "nhập tối thiệu 5 ký tự",
                    },
                    phone: {
                        required: "Hãy nhập vào số điện thoại",
                        minlength: "tối thiệu là 10 ký tự",
                        maxlength: "tối đa 10 ký tự",
                    },
                    email: "Hãy nhập đúng địa chỉ email",
                },
                submitHandler: function (form) {
                    form.submit();
                }
                });
            
            });
    </script>
</head>
<body>
    <form method="POST" id="valiform" action="dangky.php" class="form">

            <h2>Đăng ký thành viên</h2>
            <p>
            <label class="err" id="err" for="name"></label><span>Username: </span>
            <input type="text" id="name" name="username"  value="" >
            </p>
            <p>
            <label for="password"></label><span> Password:  </span>
            <input type="password" id="password" name="password" value="" />
            </p>
            <p>
            <label for="email"></label><span> Email:  </span>
            <input type="email" name="email" id="email" value=""/>
            </p>
            <p>
            <label for="phone"></label><span>Phone: </span>
            <input type="text" name="phone" id="phone" value="" />
            </p>
            <input class="BTN_SUBMIT" type="submit" id="submit" name="dangky" value="Đăng Ký"/>
    <?php

     require 'xuly.php';?>
     <br>
    <a class="a" href="../login/login.php">&#8592; Quay lại</a>

    </form>

</body>
</html>