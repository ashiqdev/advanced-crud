<?php
// print_r($_FILES);
// die;

$action = $_REQUEST['action'];

if (!empty($action)) {
    require('partials/User.php');
    $obj = new User();
}

// adding user action
if ($action == 'addUser' && !empty($_POST)) {
    $pname = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $photo = $_FILES['userphoto'];

    $playerid = !empty($_POST['userId']) ? $_POST['userId'] : '';

    $imagename = '';

    if (!empty($photo['name'])) {
      
        $imagename = $obj->uploadPhoto($photo);
        $playerData = [
            'name' => $pname,
            'email' => $email,
            'mobile' => $mobile,
            'photo' => $imagename

        ];
    } else {

        

        $playerData = [
            'name' => $pname,
            'email' => $email,
            'mobile' => $mobile
        ];

        
    }


    
    $playerid = $obj->add($playerData);



    if(!empty($playerid)) {
        $player = $obj -> getRow('id', $playerid);
        echo json_encode($player);
    }
}
?>