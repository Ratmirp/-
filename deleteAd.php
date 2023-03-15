<?
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'furmarket');
    $delete = "DELETE FROM ads WHERE id = '{$_GET['del_id']}' ";
    mysqli_query($connect, $delete);
    header("Location: index.php");
?>