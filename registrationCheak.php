<?
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'furmarket');	

    $insert = "INSERT INTO USERS (login, password, email, role, photo_user) VALUES ('{$_POST['login_log']}', '{$_POST['password_log']}', '{$_POST['email_log']}', '{$_POST['role_log']}', '{$_POST['photo_user_log']}')";
    mysqli_query($connect, $insert);
    header("Location: index.php");
?>