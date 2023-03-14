<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>registrationt</title>
</head>
<body>
    <form action="registrationCheak.php" method="POST">
            <div class="input-group mb-3 mt-2">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input name="login_log" type="text" class="form-control" placeholder="Имя" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            
            <div class="input-group mb-3 mt-2">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input name="password_log" type="text" class="form-control" placeholder="пароль" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3 mt-2">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input name="email_log" type="text" class="form-control" placeholder="почта" aria-label="Username" aria-describedby="basic-addon1">
            </div>

                <select name="role_log" style="background: #F4EBE0;">
                    <option class="options">Покупатель</option>
                    <option class="options">Продавец</option>
                </select>

            <div class="input-group mb-3 mt-2">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input name="photo_user_log" type="text" class="form-control" placeholder="аватар" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <button>Зарегестрироваться</button>
    </form>
</body>
</html>