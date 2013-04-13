<?php
session_start();
$maxFileSize = 2048000;
$maxWidth = 300;
$maxHeight = 700;
//$avatar = $_FILES['avatar'];
//var_dump($avatar);
//if (empty($_FILES['avatar']['tmp_name']) === false){
//    $file_ext = end(explode('.', $_FILES['avatar']['tmp_name']));
//    
//    if (in_array(strtolower($file_ext), array('jpg', 'jpeg', 'png', 'gif')) === false){
//        $error[] = 'Your avatar must be an image';
//    }
//}
//if (isset($avatar)){
//    $src_size = getimagesize($avatar);
//    
//    if ($src_size['type'] === 'image/jpeg'){
//        $src_img = imagecreatefromjpeg($avatar);
//        $type = "jpeg";echo $type;
//    } else if ($src_size['type'] === 'image/png'){
//        $src_img = imagecreatefrompng($avatar);
//        $type = "png";echo $type;
//    } else if ($src_size['type'] === 'image/gif'){
//        $src_img = imagecreatefromgif($avatar);
//        $type = "gif";
//        echo $type;
//    } else {
//        $src_img = false;
//    }
//    echo $type;
//    if ($src_img !== false){
//        if ($src_size['size'] <= $maxFileSize) {
//            
//            if ($src_size[0] <= $maxWidth && $src_size['1'] <= $maxHeight){
//                $thumb = $src_img;
//            } else {
//                echo "Avatar's width(max ".$maxWidth."px) or heigth(max ".$maxHeight."px) is too large";
//            }
//        } else {
//            echo "Avatar's size is too large. Max size is ".$maxFileSize;
//        }
//    }
//    
//        imagejpeg($thumb, "/avatar/".$_SESSION['uid'].".".$type);
// move_uploaded_file($thumb, "avatar/");
//}
$uploaddir = 'avatar/'; 
// folder for avatars 
var_dump($_FILES['avatar']['size']);
$apend=$_SESSION['uid'].'.jpg'; 
// name of avatar 
$uploadfile = "$uploaddir$apend";
if($_FILES['avatar']['size'] > 0 and $_FILES['avatar']['size']<=$maxFileSize) { 
// checking max size of avatar 
    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile)) {
         // Uploading avatar
        $size = getimagesize($uploadfile); 
        // getting width and height in pixels 
        if ($size[0] <= $maxWidth && $size[1]<= $maxHeight) { 
            echo "File uploaded."; 
            
        }else {
            echo "Size of avatar is too large(max width 300 and max height 700"; 
            unlink($uploadfile); 
        } 
        
     } else {
         echo "Fail to load avatar, come back and try again";} 
                
     }else { 
         echo "Max size of avatar is ".$maxFileSize;       
     }
?>
