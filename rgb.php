<?
			
	$size = 10;
	// what is diff imagecreate and imagecreatetruecolor
	$image = imagecreatetruecolor($size*64,$size*64);
	for($i = 0 ; $i < 64 ; $i++){
		for($j = 0 ; $j < 64 ; $j++){
			$y = $i*$size;
			$x = $j*$size;
			
			$color = imagecolorallocate($image,$i*4,0,$j*4);
			imagefilledrectangle($image,$x,$y,$x+$size,$y+$size,$color);
			//imagefilledrectangle
		}
	}
	header('Content-Type: image/png');
	imagepng($image);
	imagedestroy($image);
?>