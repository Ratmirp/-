<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <style>
        @font-face {
            font-family: ubuntu;
            src: url(Ubuntu-Light.ttf);
        }
        .inputs {
            background: #F4EBE0; 
            width: 400px; 
            height: 40px; 
            border: 3px solid #4A352A; 
            border-radius: 17px; 
            margin-top: 20px;
            font-size: 20px;
        }
        .enter_plate {
            width: 450px;
            height: 750px;
            background: #F4EBE0;
            border: 3px solid #4A352A;
            z-index: 5;
            left: 1050px;
            top: 75px;
            border-radius: 20px;
            font-family: ubuntu;
        }
        .enter_btn {
            background: #4A352A;
            height: 40px;
            border-radius: 18px;
            font-size: 20px;
            width: 70px;
            color: #F4EBE0;
            text-align: center;
            border: none;
            padding-top: 3px;
            margin-top: 15px;
            transition: 0.5s;
            border: 3px solid #4A352A;
        }
        .enter_btn:hover {
            color: #4A352A;
            background: #F4EBE0;
            border: 3px solid #4A352A;
        }
        .redistr_btn {
            background: #F4EBE0;
            color: #4A352A;
            border: 3px solid #4A352A; 
            height: 35px;
            width: 150px;
            border-radius: 50px;
            text-align: center;
            margin-left:auto;
            margin-right: auto;
            margin-top: 15px;
            transition: 0.5s;
            font-size: 20px;
        }
        .redistr_btn:hover{
            color: #F4EBE0;
            background: #4A352A;
        }
            </style>
</head>
<body>
            <!-- Вход в аккаунт-->
            <div class="enter_plate">
            
            <form action="login.php" method="POST">
                <div style="text-align: center;">
                    <input name="login" type="text" class="enterInput inputs" placeholder="Имя">
                    <input name="password" type="text" class="enterInput inputs" placeholder="Пароль">
                </div>
                
                <div style="text-align: center;"><button class="enter_btn">Вход</button></div>
                
            </form>
            
            <div class="redistr_btn col-7">Регистрация</div>
            <? $connect = mysqli_connect('127.0.0.1','root','', 'furmarket');
				$user = mysqli_query($connect, "SELECT * FROM users WHERE id = '{$_SESSION['id']}'");
				$user_result = mysqli_fetch_assoc($user);
                echo $_SESSION['login'];
                echo $_SESSION['id'];
            ?>
        </div>
        <script src="scripts/script_account.js"></script>
</body>
</html>