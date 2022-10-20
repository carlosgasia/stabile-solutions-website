<?php 

session_start();

if(isset($_POST['lang'])){
    $_SESSION['lang'] = $_POST['lang'];
}else{
    $_SESSION['lang'] = 'English';
}
switch ($_SESSION['lang']) {
    case 'English':
    $_SESSION['lang']= 'lang_english.php';
        break;
    case 'Español';
    $_SESSION['lang']= 'lang_spanish.php';
        break;
    case 'Dutch':
    $_SESSION['lang']= 'lang_dutch.php';
        break;
    case 'Papiamentu':
    $_SESSION['lang']= 'lang_papiamentu.php';
        break;
}

    header("Location:home.php");
    die();  

?>
