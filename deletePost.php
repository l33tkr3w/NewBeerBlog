<?php
if ($_POST['removable'] == $_POST['user_ID']) {
    //create sql statement
    $sql_stmt = 'DELETE FROM tbl_Articles WHERE removable="$_POST["user_ID"]';
    
     //prepare the sql statement
    $sqlh = $pdo->prepare($sql_stmt);
    $in_removable = filter_var($_POST['removable'], FILTER_SANITIZE_STRING);
    
    //bind the parameters
    $sqlh->bindparam(":removable", $in_removable);
    
    //Execute Statement
    $sqlh->execute();
}else
    {
    
}

?>