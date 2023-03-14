<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>МехоМаркет</title>
    <style>
        .search {
            height: 60px;
            width: 960px;
            margin-left: 40px;
            margin-top: 30px;
            border-radius: 22px;
            background: #F4EBE0;
            border: 3px solid #4A352A;
        }
        
    </style>
</head>
<body>
        <!-- Вход в аккаунт-->
        <div class="enter_plate">
            
            <form action="login.php" method="POST">
                <div style="text-align: center;">
                    <input name="login" type="text" class="enterInput" placeholder="Имя">
                    <input name="password" type="text" class="enterInput" placeholder="Пароль">
                </div>
                
                <div style="text-align: center;"><button class="enter_btn">Вход</button></div>
                
            </form>
            
            <div class="redistr_btn col-7"><a href="http://furmarket/registration.php" class="reg_href">Регистрация</a></div>
            <? $connect = mysqli_connect('127.0.0.1','root','', 'furmarket');
				$user = mysqli_query($connect, "SELECT * FROM users WHERE id = '{$_SESSION['id']}'");
				$user_result = mysqli_fetch_assoc($user);
                echo $_SESSION['login'];
                echo $_SESSION['id'];
            ?>
        </div>
        <!--Header -->
        <div class="extra_head col-12"></div>
        <div class="head_list col-12" id="navbar">
            <div class="d-flex">
                <div class="logo"></div>
                <div class="katalog"><p>каталог</p></div>
                <input type="text" class="form-control search" placeholder="поиск">

                <div class="d-flex" style="margin-left: 50px;">
                    <div class="header_btn profile_btn"><p class="unselectable">аккаунт</p></div>
                    <div class="header_btn"><p class="unselectable">заказы</p></div>
                    <div class="header_btn favorite"></div>
                </div>
                
            </div>
        </div>
        <!--Main -->    
        <div style="margin-top: 200px" class="d-flex">
            <div class="categories"></div>
            <div>
                <div class="active_ads"></div>
                    <div class="lenta">
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
            </div>
        </div>

        <div class="main_space_ads"> <!--сюда будуь выводится все продажи-->
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
            <div class="ad"></div>
        </div>
            <div type="button" class="more_btn">Ещё</div>

</div>
        
        <script src="script.js"></script>
        <!--Будующий футер-->
        <div class="footer">футер</div>
</body>
</html>