<?php

$sql_selectEdit = "SELECT email, title, textContent, image, removable, user_ID "
        . " FROM tbl_articles "
        . " ORDER BY title";

$result_edit = $pdo->query($sql_selectEdit);

while ($row = $result_edit->fetch()) {

    if ($Admin == true) {
        
        $Article = '<div class="well"><h4 class="media-heading">' . $row['title']
            . '</h4><br><div class="media"><a><img class="img-responsive" src="'
            . $row['image']
            . '" width="100%"><br></a><div class="media-body"><p class="text-right">'
            . $row['email']
            . '</p><p>'
            . $row['textContent'] . '<button type="submit" style="float:right;" class=" btn btn-theme">Remove Post</button>'
            . '</p></div></div></div>"';
    } else {
        $Article = '<div class="well"><h4 class="media-heading">' . $row['title']
            . '</h4><div class="media"><a><img class="img-responsive" src="'
            . $row['image']
            . '" width="100%"><br></a><div class="media-body"><p class="text-right">'
            . $row['email']
            . '</p><p>'
            . $row['textContent']
            . '</p></div></div></div>"';
        
    }
    echo($Article);
}

