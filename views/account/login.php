<!DOCTYPE html>
<html lang="vi">

<!-- Mirrored from hutech.tech/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Mar 2025 06:27:44 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - Hệ Thống Quản Lý Thực Tập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            color: #333;
            background-color: #f4f4f4;
        }

        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #3498db;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn {
            display: inline-block;
            background: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .btn:hover {
            background: #2980b9;
        }

        .alert {
            padding: 10px;
            background-color: #f44336;
            color: white;
            margin-bottom: 15px;
            border-radius: 4px;
        }

        .invalid-feedback {
            color: #f44336;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Đăng nhập</h2>
        <p>Vui lòng nhập thông tin đăng nhập của bạn.</p>


        <form action="https://hutech.tech/login.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input type="text" name="username" class="form-control " value="">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="password" class="form-control ">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="Đăng nhập">
            </div>
        </form>
    </div>
</body>

<!-- Mirrored from hutech.tech/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Mar 2025 06:27:44 GMT -->

</html>