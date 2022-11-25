<?php 
class Captcha {
  // (A) PRIME THE CAPTCHA - GENERATE RANDOM STRING IN SESSION
  function prime ($length=5) {
    $char = "abcdefghijkmnopqrstuvwxyz023456789ABCDEFGHJKLMNOPQRSTUVWXYZ@#";
    $max = strlen($char) - 1;
    $random = "";
    for ($i=0; $i<=$length; $i++) {
      $random .= substr($char, rand(0, $max), 1);
    }
    $_SESSION['captcha'] = $random;
  }

  // (B) DRAW THE CAPTCHA IMAGE
  function draw ($output=1, $width=120, $height=40, $fontsize=17, $font="css/arial.ttf") {
    // (B1) OOPS.
    if (!isset($_SESSION['captcha'])) { throw new Exception("CAPTCHA NOT PRIMED"); }

    // (B2) CREATE BLANK IMAGE
    $captcha = imagecreatetruecolor($width, $height);

    // (B3) FUNKY BACKGROUND IMAGE
    $background = "captcha-back.png";
    list($bx, $by) = getimagesize($background);
    if ($bx-$width<0) { $bx = 0; }
    else { $bx = rand(0, $bx-$width); }
    if ($by-$height<0) { $by = 0; }
    else { $by = rand(0, $by-$height); }
    $background = imagecreatefrompng($background);
    imagecopy($captcha, $background, 0, 0, $bx, $by, $width, $height);


    // (B4) THE TEXT SIZE
    $text_size = imagettfbbox($fontsize, 0, $font, $_SESSION['captcha']);
    $text_width = max([$text_size[2], $text_size[4]]) - min([$text_size[0], $text_size[6]]);
    $text_height = max([$text_size[5], $text_size[7]]) - min([$text_size[1], $text_size[3]]);

    // (B5) CENTERING THE TEXT BLOCK
    $centerX = CEIL(($width - $text_width) / 2);
    $centerX = $centerX<0 ? 0 : $centerX;
    $centerY = CEIL(($height - $text_height) / 2);
    $centerY = $centerY<0 ? 0 : $centerY;



    // (B6) RANDOM OFFSET POSITION OF THE TEXT + COLOR
    $colornow = imagecolorallocate($captcha, 0, 51, 10); // Random bright color
    imagettftext($captcha, $fontsize, 0, $centerX, $centerY, $colornow, $font, $_SESSION['captcha']);

    // (B7) OUTPUT AS JPEG IMAGE
    if ($output==0) {
      header('Content-type: image/png');
      imagejpeg($captcha);
     // imagedestroy($captcha);
    }

    // (B8) OUTPUT AS BASE 64 ENCODED HTML IMG TAG
    else {
      ob_start();
      imagepng($captcha);
      $ob = base64_encode(ob_get_clean());
      echo "<img src='data:image/png;base64,$ob'/>";
    }
  }

  // (C) VERIFY CAPTCHA
  function verify ($check) {
    // (C1) CAPTCHA NOT SET!
    if (!isset($_SESSION['captcha'])) { throw new Exception("CAPTCHA NOT PRIMED"); }

    // (C2) CHECK
    if ($check == $_SESSION['captcha']) {
      unset($_SESSION['captcha']);
      return 1;
    } else {
      return 0;
    }
  }
} 

// (D) CREATE CAPTCHA OBJECT
//session_start(); // Remove if session already started
$PHPCAP = new Captcha();
  $PHPCAP->prime();
  $PHPCAP->draw();
 ?>