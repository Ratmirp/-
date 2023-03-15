<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сделать заказ</title>
</head>
<body>
    <form action="orderAd.php" method="GET">
        <input name="text" type="text" class="enterInput inputs" placeholder="текст товара">
        <input name="user_id" type="number" class="enterInput inputs" value="<?echo $_SESSION['id'];?>">
        <input name="price" type="number" class="enterInput inputs" placeholder="цена товара">

         <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
        <input name="photo" type="file" />
        <button>Выложить Объявление</button>
    </form>
</body>
</html>