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
<div align="center" height="10px">
<marquee scrolldelay="3000" behavior="alternate" scrollamount="65" width="729px" direction="up" height="65px">
                	<a href="http://www.olx.in" target="_blank"><img src="images/ad/7.jpg" height="65px" width="729px"/></a>
                	<a href="http://www.olx.in" target="_blank"><img src="images/ad/8.jpg" height="65px" width="729px"/></a>
	                <a href="http://www.olx.in" target="_blank"><img src="images/ad/9.jpg" height="65px" width="729px"/></a>
	                <a href="http://www.olx.in" target="_blank"><img src="images/ad/10.jpg" height="65px" width="729px"/></a>
                    <a href="http://www.olx.in" target="_blank"><img src="images/ad/11.png" height="65px" width="729px"/></a>
               
           </marquee></div>
	<div id="templatemo_header">

    	<div id="site_title"><h1><a href="index.php"></a></h1>
           </div>
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
                        <li><a href="christmas.php">Christmas Cards</a></li>
                        <li><a href="diwali.php">Diwali Cards</a></li>
                        <li><a href="ecard.php">E-Cards</a></li>
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
            <form action="search.php" method="post">
              <input type="text" value=" " name="keyword"  title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> <!-- END of templatemo_menubar -->
    
    <div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Product Categories</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                        <li class="first"><a href="birthday.php">Birthday Cards</a></li>
                        <li><a href="christmas.php">Christmas Cards</a></li>
                        <li ><a href="diwali.php">Diwali Cards</a></li>
                         <li class="last"><a href="ecard.php">E-Cards</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
            	<h3><a class="sidebar_box_icon" ></a>Greeting Cards </h3>   
                <div class="content"> 
                	<div class="bs_box">
                    	<a href="birthday.php"><img src="images/product/05.jpg" width="55px" height="55px" /></a>
                        <h4><a href="birthday.php">Birthday Cards</a></h4>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	<a href="christmas.php"><img src="images/product/09.jpg" width="55px" height="55px" /></a>
                        <h4><a href="christmas.php">Christmas Cards</a></h4>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	<a href="diwali.php"><img src="images/product/017.jpg" width="55px" height="55px" /></a>
                        <h4><a href="diwali.php">Diwali Cards</a></h4>
                        <div class="cleaner"></div>
                    </div>
                    
                </div>
                </div>
                 <div class="sidebar_box"><span class="bottom"></span>
            	<h3><a class="sidebar_box_icon" ></a>E-Cards </h3>   
                <div class="content"> 
                	<div class="bs_box">
                    	<a href="ecard.php"><img src="pass.jpg" width="55px" height="55px" /></a>
                        <h4><a href="ecard.php">Send Custom E-Cards</a></h4>
                        <div class="cleaner"></div>
                    </div>
                    
                    
                </div>
                
                </div>
                
                
                <div class="sidebar_box"><span class="bottom"></span>
            	<h3><a class="sidebar_box_icon" ></a>Our Sponsers </h3>   
                <div class="content"> 
           <marquee scrolldelay="3000" behavior="alternate" scrollamount="205">
                	<a href="http://www.olx.in" target="_blank"><img src="images/ad/1.gif" height="250px" width="200px"/></a>
                	<a href="http://www.flipkart.com" target="_blank"><img src="images/ad/2.jpg" height="250px" width="200px"/></a>
	                <a href="http://www.ebay.in" target="_blank"><img src="images/ad/3.gif" height="250px" width="200px"/></a>
	                <a href="http://www.makemytrip.com" target="_blank"><img src="images/ad/4.jpg" height="250px" width="200px"/></a>
                    <a href="http://www.bookmyshow.com" target="_blank"><img src="images/ad/5.jpg" height="250px" width="200px"/></a>
                    <a href="http://www.cleartrip.com" target="_blank"><img src="images/ad/6.png" height="250px" width="200px"/></a>
               
           </marquee>
     
                </div>
                
                </div>
                
                
        </div>
        

