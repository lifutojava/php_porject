<?php 

//  _code();
// $_SESSION["captcha"] = "lifu";
// echo @$_SESSION["captcha"];
 
function _code($_code_length = 4, $_width = 75, $_height = 25){
    for($i=0;$i<$_code_length;$i++){
        $_nmsg .= dechex(mt_rand(0,15));
    }
    $_SESSION["code"] = $_nmsg;

    $_img = imagecreatetruecolor($_width, $_height);

    $_white = imagecolorallocate($_img, 250, 250, 250);

    imagefill($_img, 0, 0, $_white);

    $_gray = imagecolorallocate($_img, 196, 196, 196);

    imagerectangle($_img, 0, 0, $_width-1, $_height-1, $_gray);

    for ($i=0; $i < 6; $i++) { 
        $_md_color = imagecolorallocate($_img, mt_rand(200,255), mt_rand(200,255), mt_rand(200,255));
        imageline($_img, mt_rand(0,$_width), mt_rand(0, $_height),mt_rand(0,$_width), mt_rand(0, $_height), $_md_color);
    }

    for ($i=0; $i < 50; $i++) { 
        $_md_color = imagecolorallocate($_img, mt_rand(200,255), mt_rand(200,255), mt_rand(200,255));
        imagestring($_img, 1, mt_rand(1,$_width-5), mt_rand(1, $_height-5), "*", $_md_color);
    }

    for ($i=0; $i < $_code_length ; $i++) { 
        $_md_color = imagecolorallocate($_img, mt_rand(0,102), mt_rand(0,102), mt_rand(0,102));
        imagestring($_img, 5, $i * $_width/$_code_length+ mt_rand(1, 10), mt_rand(1, $_height/2), $_SESSION["code"][$i], $_md_color);
    }

    header("Content-Type:image/png");

    imagepng($_img);

    imagedestroy($_img);
}