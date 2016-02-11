<?php
$sql_selectEdit = "SELECT email, title, textContent, image, removable, user_ID "
        . " FROM tbl_articles "
        . " ORDER BY title";

$result_edit = $pdo->query($sql_selectEdit);
//$Article = " ";
while ($row = $result_edit->fetch()) {
//    echo($row['title']);
    
    $Article = '<div class="well"><h4 class="media-heading">' .  $row['title']
            . '</h4><div class="media"><a><img class="img-responsive" src="'
            .  $row['image']
            . '" width="100%"><br></a><div class="media-body"><p class="text-right">'
            .  $row['email'] 
            . '</p><p>'
            . $row['textContent'] 
            . '</p></div></div></div>"';
    echo($Article);
}

