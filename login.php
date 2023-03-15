<?
session_start();
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'furmarket');	
    $query = "SELECT * FROM USERS WHERE login = '{$_POST['login']}' AND password = '{$_POST['password']}'";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result);
    echo $num;
if($num == 1){
    $row = mysqli_fetch_assoc($result);
    $_SESSION = $row;
    header("Location: index.php");
}else {
    header("Location: account.php?=нету_такого_пользователя");
}
?>