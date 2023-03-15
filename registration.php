<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Registrationt</title>
    <style>
        .box {
            width: 450px;
            height: 400px;
            background-color: #F4EBE0;
            border-radius: 20px;
            border: 3px solid #4A352A; 
            text-align: center;
            font-size: 20px;
            color: #4A352A;
            margin-left: auto;
            margin-right: auto;
            margin-top: 13%;
        }
        .inputs {
            background: #F4EBE0; 
            width: 400px; 
            height: 40px; 
            border: 3px solid #4A352A; 
            border-radius: 17px; 
            margin-top: 20px;
        }
        .role_input {
            margin-top: 20px;
            border-radius: 13px;
            border: 3px solid #4A352A; 
        }
        .reg_btn {
            margin-top: 10px;
            border-radius: 13px;
            border: 3px solid #4A352A; 
            background: #4A352A;
            color: #F4EBE0;
        }
    </style>
</head>
<body style="background: url(img/bgw.png)">

    <form action="registrationCheak.php" method="POST">
            <div class="box">
                <span>Добро Пожаловать!</span>

                <input name="login_log" type="text" class=" inputs" placeholder="Имя" >

                <input name="surname_log" type="text" class=" inputs" placeholder="Фамилия" >
            
                <input name="email_log" type="text" class="inputs" placeholder="почта" >

                <input name="password_log" type="password" class="inputs" placeholder="пароль">

                <select class="role_input" name="role_log" style="background: #F4EBE0;">
                    <option class="options">Покупатель</option>
                    <option class="options">Продавец</option>
                </select>
                    <div>
                        <button class="reg_btn">Зарегестрироваться</button>
                    </div>      
            </div>
    </form>
</body>
</html>