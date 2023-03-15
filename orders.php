<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сделать заказ</title>
    <style>
        .back_btn {
            background: url(img/back.png);
            background-size: 100% 100%;
            border-radius: 17px; 
            font-size: 20px;
            width: 335px; 
            height: 35px; 
            padding-top: 10px;
            padding-left: 10px;
            font-family: ubuntu;
            margin-top: 300px;
        }
        .btnSpecial {
            background: #4A352A;
            height: 40px;
            border-radius: 18px;
            font-size: 20px;
            width: 270px;
            color: #F4EBE0;
            text-align: center;
            border: none;
            padding-top: 3px;
            margin-left: 70px; 
            margin-top: 15px;
            transition: 0.5s;
            border: 3px solid #4A352A;
        }
    </style>
</head>
<body style="overflow-y: auto; margin: 0; background: url(img/bgw.png); ">
    <!-- header-->
    <div class="extra_head col-12">
                <div class="back_skin col-12"></div>
                <div class="mapIcon" style="margin-left: 30px;"></div>
            </div>
            <div class="head_list col-12" id="navbar">
                    <div class="logo" style="margin-left: auto; margin-right: auto;"></div>
            </div>
    <form action="orderAd.php" method="GET">
    <div style="margin-left: 39%;">
        <div style="margin-top: 200px;">

        <div><input name="text" type="text" class="enterInput inputs" placeholder="текст товара"></div>
        <div><input name="user_id" type="number" class="enterInput inputs" value="<?echo $_SESSION['id'];?>"></div>
        <div><input name="price" type="number" class="enterInput inputs" placeholder="цена товара"></div>
        <div>
            <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <!-- Название элемента input определяет имя в массиве $_FILES -->
            <input name="photo" type="file" /></div>
            <button class="btnSpecial">Выложить Объявление</button>
        </div>
    </div>
    </form>

        <div class="back_btn"></div>
    <script>
        let back_btn = document.querySelector(".back_btn");
        back_btn.onclick = function(){
            window.location.href = 'http://furmarket/index.php'; 
        }
    </script>
</body>
</html>