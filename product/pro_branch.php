<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['login'])==false){
    print'ログインされていません';
    print'<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
    exit();
}else{
    print $_SESSION['staff_name'];
    print 'さんログイン中<br/>';
    print '<br/>';
}

    if(isset($_POST['disp'])==true){
    if(isset($_POST['procode'])==false){
        header('Location:pro_ng.php');
        exit();
    }
    $procode = $_POST['procode'];
    header('Location:pro_disp.php?procode='.$procode);
    exit();
}

if(isset($_POST['add'])==true){
   
    header('Location:pro_add.php');
    exit();
}

if(isset($_POST['edit'])==true){
    if(isset($_POST['procode'])==false){
        header('Location:pro_ng.php');
        exit();
    }
    $procode = $_POST['procode'];
    header('Location:pro_edit.php?procode='.$procode);
    exit();
}

if(isset($_POST['delete'])==true){
    if(isset($_POST['procode'])==false){
        header('Location:pro_ng.php');
        exit();
    }
    $procode = $_POST['procode'];
    header('Location:pro_delete.php?procode='.$procode);
    exit();
}




?>