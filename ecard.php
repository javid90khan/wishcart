        	<?php include 'common_head.php' ?>
        	<div id="content" class="float_r">
        	<div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="images/slider/01.jpeg" alt="" />
                    <a href="#"><img src="images/slider/02.jpg" alt=""  /></a>
                    <img src="images/slider/03.jpg" alt="" />
                    <img src="images/slider/04.jpg" alt="" title="#htmlcaption" />
                </div>
                
            </div>
            <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
        	<h1>E-Cards</h1>
        	
   <?php

// link to the font file no the server
$fontname = 'font/Capriola-Regular.ttf';
// controls the spacing between text
$i=30;
//JPG image quality 0-100
$quality = 90;

function create_image($user){

		global $fontname;	
		global $quality;
		$height=0;
		$i=0;
		$file = "covers/".md5($user[0]['name'].$user[1]['name'].$user[2]['name']).".jpg";	
	
	// if the file already exists dont create it again just serve up the original	
	//if (!file_exists($file)) {	
			

			// define the base image that we lay our text on
			$im = imagecreatefromjpeg("pass.jpg");
			
			// setup the text colours
			$color['grey'] = imagecolorallocate($im, 54, 56, 60);
			$color['green'] = imagecolorallocate($im, 55, 189, 102);
			
			// this defines the starting height for the text block
			$y = imagesy($im) - $height - 365;
			 
		// loop through the array and write the text	
		foreach ($user as $value){
			// center the text in our image - returns the x value
			$x = center_text($value['name'], $value['font-size']);	
			imagettftext($im, $value['font-size'], 0, $x, $y+$i, $color[$value['color']], $fontname,$value['name']);
			// add 32px to the line height for the next text block
			$i = $i+32;	
			
		}
			// create the image
			imagejpeg($im, $file, $quality);
			
	//}
						
		return $file;	
}

function center_text($string, $font_size){

			global $fontname;

			$image_width = 800;
			$dimensions = imagettfbbox($font_size, 0, $fontname, $string);
			
			return ceil(($image_width - $dimensions[4]) / 2);				
}



	$user = array(
	
		array(
			'name'=> 'Message Line 1', 
			'font-size'=>'27',
			'color'=>'grey'),
			
		array(
			'name'=> 'Message Line 2',
			'font-size'=>'16',
			'color'=>'grey'),
			
		array(
			'name'=> 'Message Line 3',
			'font-size'=>'13',
			'color'=>'green'
			)
			
	);
	
	
	if(isset($_POST['submit'])){
	
	$error = array();
	
		if(strlen($_POST['name'])==0){
			$error[] = 'please enter Line 1';
		}
		
		if(strlen($_POST['job'])==0){
			$error[] = 'please enter Line 2';
		}		

		if(strlen($_POST['email'])==0){
			$error[] = 'please enter Line 3';
		}
		
	if(count($error)==0){
		
	$user = array(
	
		array(
			'name'=> $_POST['name'], 
			'font-size'=>'27',
			'color'=>'grey'),
			
		array(
			'name'=> $_POST['job'],
			'font-size'=>'16',
			'color'=>'grey'),
			
		array(
			'name'=> $_POST['email'],
			'font-size'=>'13',
			'color'=>'green'
			)
			
	);		
		
	}
		
	}

// run the script to create the image
$filename = create_image($user);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="../style.css" rel="stylesheet" type="text/css" />

<style>
input{
	border:1px solid #ccc;
	padding:8px;
	margin-left:195px;
	font-size:14px;
	width:300px;
	
	}
	
.submit{
	width:110px;
	
	padding:3px;
	border:1px solid #FC0;
	margin-top:20px;}	
	
form label{
	display: inline-block;
	vertical-align: top;
	width: 100px;
	text-align: right;
}

</style>

</head>

<body>



<img src="<?=$filename;?>?id=<?=rand(0,1292938);?>" width="650" height="500"/><br/><br/>

<ul>
<?php if(isset($error)){
	
	foreach($error as $errors){
		
		echo '<li>'.$errors.'</li>';
			
	}
	
	
}?>
</ul>

<p>You can edit the E-card above by typing your custom message below. </p>

<div class="dynamic-form">
<form action="" method="post">
<label>Message Line 1</label>
<input type="text" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" name="name" maxlength="15" placeholder="Message Line 1"><br/>
<label>Message Line 2</label>
<input type="text" value="<?php if(isset($_POST['job'])){echo $_POST['job'];}?>" name="job" placeholder="Message Line 2"><br/>
<label>Message Line 3</label>
<input type="text" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" name="email" placeholder="Message Line 3"><br/><br />
<input name="submit" type="submit" value="Update E-Card" />
</form>
<br /><br />
<form action="mail.php" method="post">
<input type="hidden" name="filename" value="<?php echo $filename;?>"></input>
<label>From:</label>
<input type="text"  name="from"  placeholder="Your Name"><br/>
<label>To:</label>
<input type="text"  name="to"  placeholder="Receiver's Email id"><br/><br />
<input name="send" type="submit" value="Send E-Card" />
</form>
</div>

	
      
        	
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php include 'common_foot.php' ?>
