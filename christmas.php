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
        	<h1>Christmas Cards</h1>
        	
        	 <?php 
	
	
	$db = mysqli_connect('Localhost', 'root', '', 'wishcart');
	$query1 = "SELECT * FROM cards where name='Christmas Card'";
	$data1 = mysqli_query($db, $query1);

  

	while ($row = mysqli_fetch_array($data1))
	{
		$id = $row['id'];
		$name=$row['name'];
		$desc = $row['descr'];
		$cost = $row['cost'];
		$image=$row['image'];
		?>     	
                       			
            
                 	
<div class="product_box">
            	<h3><?php echo $name ?></h3>
           	<a href="productdetail.php?id=<?php echo $id ?>"><img src="images/product/<?php echo $image ?>" alt="Shoes 4" width="150px" height="150px" /></a>
            <p><?php echo $desc ?></p>
      		<p class="product_price">$ <?php echo $cost ?></p>
                <a href="shoppingcart.php?id=<?php echo $id ?>" class="addtocart"></a>
                <a href="productdetail.php?id=<?php echo $id ?>" class="detail"></a>
            </div> 
                   
                             <?php 
	
  }
  mysqli_close($db);
            ?>  	
      
        	
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php include 'common_foot.php' ?>
