<?php 


foreach ($user as $users) {
    $array = array(
    $users->_id => $users->name,
);
echo json_encode($array);
    
}

?>