<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
        <!--Header -->
        <div class="extra_head col-12">
        <div class="back_skin col-12"></div>
            <div class="mapIcon" style="margin-left: 30px;"></div>
            <div class="d-flex" style="padding-top: 10px;">
                <p style="margin-left: 1400px; font-size: 20px; color: #F4EBE0;">поддержка: +79248705714</p>
                <p style="margin-left: 10px; font-size: 20px; color: #F4EBE0;">example@sample.lol</p>
            </div>
        </div>
        <div class="head_list col-12" id="navbar">
            <div class="d-flex">
                <div class="logo"></div>
                <div class="katalog"><p>каталог</p></div>
                <input type="text" class="form-control search" placeholder="поиск">

                <div class="d-flex" style="margin-left: 50px;">
                    <div class="header_btn profile_btn">
                        <img src="img/enter.svg">
                        <p class="unselectable">аккаунт</p>
                    </div>
                    <div class="header_btn orders_btn">
                        <img src="img/order.svg">
                        <p class="unselectable">заказы</p>
                    </div>
                    <div class="header_btn favorite">
                        <img src="img/favorites.svg" alt="">
                        <p class="unselectable">Избранное</p>
                    </div>
                </div>
                
            </div>
        </div>


        <!--Main -->    

        <div class="kategories"></div>
        <!-- Карусель-->
        <div class="d-flex">
            <div class="carusel">
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active carousel_div">
                <img src="img/slayeder1.png" class="d-block w-100">
                </div>
                <div class="carousel-item carousel_div">
                <img src="img/slayeder2.png" class="d-block w-100">
                </div>
                <div class="carousel-item carousel_div">
                <img src="img/slayeder3.png" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
                <div class="back_skin" style="top: 840px; width: 1200px;"> <!-- Просто исправляет маленький баг--></div>
                <div class="extra_carusel">
                    <h2>Крупнейший аукцион пушнины в Якутии</h2>
                </div>
        </div>

<div class="extra_main">
        <img src="img/ex1.png">
        <h2 style="text-align: center; color: black;">Рога, копыта, черепа, кости</h2>
</div>

        </div>

        <div class="main_space_ads"> <!--сюда будуь выводится все продажи-->
            <?	
					$connect = mysqli_connect('127.0.0.1','root','', 'furmarket');
					$query = mysqli_query($connect, "SELECT * FROM ads");  //INNER JOIN users ON users.id = ads.user_id
                    $query_user = mysqli_query($connect, "SELECT * FROM users;"); 
					$number_rows = mysqli_num_rows($query);

					for ($k = 0; $k < $number_rows; $k++) { 
						$result = mysqli_fetch_assoc($query);                   
                        $result_user = mysqli_fetch_assoc($query_user);
				?>
                    <div class="ad">
                        <div style="background: url(<?echo $result['photo'];?>); height: 400px; background-size: 100% 100%; border-radius:  5% 5% 0% 0%;">
                        </div>
                        <div style="color: #4A352A; padding-top: 10px; padding-left: 10px;">
                            <h2><?echo $result['text'];?></h2s> 
                            <div class="d-flex" style="padding-top: 10px;">
                                <h1><?echo $result['price'] . " р/кг"?></h1>
                                <!--Удаление поста -->
                                <form action="deleteAd.php" method="GET">    
                                    <input name="del_id" type="text" value="<?echo $result['id'];?>" style="display: none;"> 
                                    <button type="btn"class="pay_btn" style=" background: url(img/pay.svg); background-size: 100% 100%; width: 220px; height: 75px; margin-left: 55px; border: none;"></button>
                                </form>       
                                <div class="favorite_btn"></div>
                            </div>                        
                        </div>                         
                    </div>       
                            
                <?
		  			} 
				?> 
        </div>
           <!-- <div type="button" class="more_btn">Ещё</div>-->

</div>
        
        <script src="scripts/script.js"></script>
        <!--Будующий футер-->
        <div class="footer d-flex">
            <div class="col-4">
                <p style="font-size: 20px; color: #F4EBE0; text-align: center; padding-top: 50px;">Часто задаваемые вопросы</p>
                <div class="d-flex" style="padding-top: 250px; padding-left: 50px;">
                    <p style="font-size: 20px; color: #F4EBE0;">поддержка: +79248705714</p>
                    <p style="margin-left: 10px; font-size: 20px; color: #F4EBE0;">example@sample.lol</p>
                </div>
            </div>
            <div class="col-4">
                <input type="text" class="enterInput">
            </div>
            <div class="col-4">
                <input type="text" class="enterInput">
                <p style="font-size: 20px; color: #F4EBE0; padding-left: 30px;">техподержка или ещё что то</p>
            </div>
        </div>
</body>
</html>