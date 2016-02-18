<?php

//default register button title
$Status = 'Logoff ' . $_POST['email'];
$Admin = false;
$User = '';
$login = false;

if (isset($_POST['email'])) {

    $sql_li_stmt = "Select email, password "
            . "From tbl_blog "
            . "where email=:email";
    $sqlh_li = $pdo->prepare($sql_li_stmt);

    $x_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

    $sqlh_li->bindParam(":email", $x_email);
    $sqlh_li->execute();

    $li_result = $sqlh_li->fetch();
    $hash = $li_result['password'];

    if (password_verify($_POST['password'], $hash)) {
        echo 'Password is valid!';  
        $_SESSION['LoginStatus'] = true;
        $Status = 'Logoff ' . $_POST['email'];
        $login = true;
        $User = $_POST['email'];
        
        if($_POST['email'] == 'admin@gmail.com'){
            $Admin = true;
            $Status = 'Logoff ' . $_POST['email'];    
        }
        
    } else {
        echo 'Invalid password.';
        $login = false;
        $Admin = false;
    }
}
?>
