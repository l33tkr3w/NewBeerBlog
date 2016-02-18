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
            . $row['textContent'] . '<button type="submit" onclick="deletePost()" name="delete" style="float:right;" class=" btn btn-theme">Remove Post</button>'           
            . '<input type="hidden"  class="form-control" name="removable" id="removable" value="">'
            . '<input type="hidden"  class="form-control" name="user_ID" id="user_ID" value="' . $row['user_ID'] . '">'
            . '</p></div></div></div>"';   
    } 
  if($Admin == false){      
        if($row['email'] == $User){  
        $Article = '<div class="well"><h4 class="media-heading">' . $row['title']
            . '</h4><br><div class="media"><a><img class="img-responsive" src="'
            . $row['image']
            . '" width="100%"><br></a><div class="media-body"><p class="text-right">'
            . $row['email']
            . '</p><p>'
            . $row['textContent'] . '<button type="submit" onclick="deletePost()" name="delete" style="float:right;" class=" btn btn-theme">Remove Post</button>'
            . '<input type="hidden" class="form-control" name="removable" id="removable" value="">'
            . '<input type="hidden"  class="form-control" name="user_ID" id="user_ID" value="' . $row['user_ID'] . '">'
            . '</p></div></div></div>"';
         
        }if($row['email'] != $User){         
            $Article = '<div class="well"><h4 class="media-heading">' . $row['title']
            . '</h4><div class="media"><a><img class="img-responsive" src="'
            . $row['image']
            . '" width="100%"><br></a><div class="media-body"><p class="text-right">'
            . $row['email']
            . '</p><p>'
            . $row['textContent']
            . '</p></div></div></div>"';   
        }
    }
    echo($Article);
}

