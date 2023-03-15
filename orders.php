<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
</head>
<body>
    <form action="orderAd.php" method="GET">
        <input name="text" type="text" class="enterInput inputs" placeholder="текст товара">
        <input name="user_id" type="number" class="enterInput inputs" value="<?echo $_SESSION['id'];?>">
        <input name="price" type="number" class="enterInput inputs" placeholder="цена товара">
        <button>Выложить Объявление</button>
    </form>
</body>
</html>