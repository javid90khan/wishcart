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
        	<h1>Search</h1>
        	
<?php

  // Get the search variable from URL
if(isset($_POST['search']))
{
  $var = $_POST['keyword'] ;
  $trimmed = trim($var); //trim whitespace from the stored variable


// check for an empty string and display a message.
if ($trimmed == "")
  {
  echo "<p>Please enter a search...</p>";
  exit;
  }

// check for a search parameter
if (!isset($var))
  {
  echo "<p>You dont seem to have a search parameter!</p>";
  exit;
  }

//connect to your database ** EDIT REQUIRED HERE **
mysql_connect("localhost","root",""); //(host, username, password)

//specify database ** EDIT REQUIRED HERE **
mysql_select_db("wishcart") or die("Unable to select database"); //select which database we're using

// Build SQL Query  
$query = "select * from cards where name like '%$trimmed%' LIMIT 5"; 

 $numresults=mysql_query($query);
 $numrows=mysql_num_rows($numresults);

// If we have no results, offer a google search as an alternative

// next determine if s has been passed to script, if not use 0
  if (empty($s)) {
  $s=0;
  }


  $result = mysql_query($query) or die("Couldn't execute query");

// display what the person searched for
echo "<p>Search Result for:&quot;" . $var . "&quot;</p> ";




// now you can display the results returned
  while ($row= mysql_fetch_array($result)) {
        $id = $row['id'];
		$name=$row['name'];
		$desc = $row['desc'];
		$cost = $row['cost'];

?>


<div class="product_box">
            	<h3><?php echo $name ?></h3>
           	<a href="productdetail.php?id=<?php echo $id ?>"><img src="images/product/0<?php echo $id ?>.jpg" alt="Shoes 4" width="150px" height="150px" /></a>
            <p><?php echo $desc ?></p>
      		<p class="product_price">$ <?php echo $cost ?></p>
                <a href="shoppingcart.php?id=<?php echo $id ?>" class="addtocart"></a>
                <a href="productdetail.php?id=<?php echo $id ?>" class="detail"></a>
            </div> 
            <?php
  }}

?>      
        	
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php include 'common_foot.php' ?>
