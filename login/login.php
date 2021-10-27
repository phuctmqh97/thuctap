<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="../../pluin/css/style.css"/>
<script src="../../pluin/js/lib/jquery.js"></script>
    <script src="../../pluin/js/dist/jquery.validate.js"></script>
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

                },
                messages: {
                    name: {
                        required: "Hãy nhập tên vào",
                        minlength: "Nhập tối thiệu 2 kí tụ",
                    },
                    password: {
                        required: "Hãy nhập vào password",
                        minlength: "nhập tối thiệu 5 ký tự",
                    },
                },
                submitHandler: function (form) {
                    form.submit();
                }
                });
            
            });
    </script>
</head> 
<body> 
    <form action='../inforuser/infor.php' id="valiform" class="form" method='POST'> 
    <p>
    <label for="name"></label><span> Tên đăng nhập :</span>
        <input type='text' name='username' require/>
     </p>
     <p>

        <label for="password"> </label><span> Mật khẩu :</span>
       <input type='password' name='password' /> 
       </p>
        <input class="BTN_SUBMIT" type='submit' class="button" name="dangnhap" value='Đăng nhập' />
        <a href='../dangky/dangky.php' title='Đăng ký'>Đăng ký</a> 
    <form> 
</body> 
</html>