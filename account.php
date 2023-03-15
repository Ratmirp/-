<?session_start();?>
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
            width: 600px; 
            height: 40px; 
            border: 3px solid #4A352A; 
            border-radius: 17px; 
            font-size: 20px;
        }
        .back_btn {
            border: 3px solid #4A352A; 
            background: #F4EBE0; 
            border-radius: 17px; 
            font-size: 20px;
            width: 95px; 
            height: 40px; 
            padding-top: 10px;
            padding-left: 10px;
            font-family: ubuntu;
        }
        .enter_plate {
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
            height: 65px;
            width: 200px;
            border-radius: 25px;
            text-align: center;
            margin-left:auto;
            margin-right: auto;
            margin-top: 15px;
            transition: 0.5s;
            font-size: 20px;
            padding-top: 8px;
        }
        .redistr_btn:hover{
            color: #F4EBE0;
            background: #4A352A;
        }
            </style>
</head>
<body style="overflow-y: auto; margin: 0; background: url(img/bgw.png); ">
        <div class="back_btn">Вернутся</div>
            <!-- Вход в аккаунт-->
            <div class="enter_plate">
            
            <form action="login.php" method="POST">
                <h1 style="text-align: center;">Вход</h1>
                <p style="margin-left: 680px;">Имя</p>
                <div style="text-align: center;">
                    <input name="login" type="text" class="enterInput inputs">
                </div>
                <p style="margin-left: 680px;">Пароль</p>
                <div style="text-align: center;">
                    <input name="password" type="password" class="enterInput inputs">
                </div>
                
                <div style="text-align: center;"><button class="enter_btn">Вход</button></div>
                
            </form>
            
            <div class="redistr_btn col-7">Ещё нет аккаунта? Зарегистрируйся!</div>
            <? $connect = mysqli_connect('127.0.0.1','root','', 'furmarket');
				$user = mysqli_query($connect, "SELECT * FROM users WHERE id = '{$_SESSION['id']}'");
				$user_result = mysqli_fetch_assoc($user);
                    echo $_SESSION['login'];
                    echo $_SESSION['email'];
                    echo $_SESSION['role'];

            ?>
            
        <script src="scripts/script_account.js"></script>
</body>
</html>