
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WishCart</title>
<meta name="keywords" content="shoes store, free template, ecommerce, online shop, website templates, CSS, HTML" />
<meta name="description" content="Shoes Store is a free ecommerce template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="css/jquery_validate.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">


/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>





       
        <script src="js/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="js/jquery.validate.js" type="text/javascript">
        </script>
        <script src="js/jquery.validation.functions.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#ValidName").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
                jQuery("#ValidAddress").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
                jQuery("#ValidCity").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
                jQuery("#ValidCountry").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
                jQuery("#ValidNumber").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
                jQuery("#ValidNumber").validate({
                    expression: "if (VAL.length ==10) return true; else return false;",
                    message: "enter a valid 10 digit mobile number"
                });
                jQuery("#ValidEmail").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
                
            });
            /* ]]> */
        </script>
</head>

<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="index.php"></a></h1></div>
        <div id="header_right">
        
        
        
        <?php
           $db = mysqli_connect('Localhost', 'root', '', 'wishcart');
           $query1 ="SELECT count(*) FROM cart";
	       $data1 = mysqli_query($db, $query1);
	       $row = mysqli_fetch_array($data1);
	        
	       
        ?>
            	Shopping Cart: <strong><?php echo $row['count(*)'] ?> items</strong> ( <a href="shoppingcart.php">Show Cart</a> )
			</p>
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
                <li><a href="#">Products</a>
                    <ul>
                        <li><a href="birthday.php">Birthday Cards</a></li>
                        <li><a href="#">Sub menu 2</a></li>
                        <li><a href="#">Sub menu 3</a></li>
                        <li><a href="#">Sub menu 4</a></li>
                        <li><a href="#">Sub menu 5</a></li>
                  </ul>
                </li>
                <li><a href="about.php">About</a>
                </li>
                <li><a href="faqs.php">FAQs</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="templatemo_search">
            <form action="#" method="get">
              <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> <!-- END of templatemo_menubar -->
    
    <div id="templatemo_main">
    	<div id="sidebar" class="float_l">
       </div>


        <div id="content" class="float_r">
        	

<?php


 
           $db = mysqli_connect('Localhost', 'root', '', 'wishcart');
            
           

			$query1 ="SELECT * FROM cart";
		    $data1 = mysqli_query($db, $query1);
		    while ($row = mysqli_fetch_array($data1))
	{
		$id = $row['id'];
		$desc = $row['desc'];
		$cost = $row['cost'];
		$quantity=$row['quantity'];
		
		
		$query2 ="update cards set sold=sold+$quantity where id=$id";
		
		mysqli_query($db, $query2);
		$query3 ="delete from cart where id=$id";
		mysqli_query($db, $query3);
		
        $query4 ="update cards set date=CURDATE() where id=$id";
        mysqli_query($db, $query4);
	}
	
		echo '<h3><img src = "images/success.png"/></h3><h3>Your order has been succesfully placed. You will pe provided with a tracking number as soon as your item gets shipped.</h3><META HTTP-EQUIV="refresh" CONTENT="4;URL=index.php">';
		
?></div>

        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
<?php include 'common_foot.php';?>
