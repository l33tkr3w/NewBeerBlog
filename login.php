<?php

$sql_selectEdit1 = "SELECT email "
        . " FROM tbl_blog "
        . " ORDER BY title";

$result_edit1 = $pdo->query($sql_selectEdit1);

while ($row = $result_edit1->fetch()) {
    if($row['email'] == $_POST['email']){
        $loginStatus = 'Logoff &nbsp;' . $_POST['email'] ;
    }
        
      
}

?>
