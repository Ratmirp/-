<?
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'furmarket');
    
    $insert = "INSERT INTO users (login, surname, password, email, role) VALUES ('{$_POST['login_log']}', '{$_POST['surname_log']}', '{$_POST['password_log']}', '{$_POST['email_log']}', '{$_POST['role_log']}')";
    mysqli_query($connect, $insert);
    header("Location: index.php");
?>