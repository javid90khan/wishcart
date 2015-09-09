<?php include 'common_head.php' ?>
        <div id="content" class="float_r">
        
        
           	<?php
           	$id=htmlspecialchars($_GET["id"]);
           	
	
	
	$db = mysqli_connect('Localhost', 'root', '', 'wishcart');
	$query1 = "SELECT * FROM cards where id=".$id;
	$data1 = mysqli_query($db, $query1);

  

	$row = mysqli_fetch_array($data1);
	
		$desc = $row['descr'];
		$cost = $row['cost'];
		$image=$row['image'];
           	?>
                       	
        
        
        
        
        
        	<h1>Product Details</h1>
            <div class="content_half float_l">
        	<a  rel="lightbox[portfolio]" >
        	<img src="images/product/<?php echo $image ?>" alt="image" width="300px"/></a>
            </div>
            <div class="content_half float_r">
                <table>
                    <tr>
                        <td width="160">Price:</td>
                        <td>$<?php echo $cost ?></td>
                    </tr>
                    <tr>
                        <td>Availability:</td>
                        <td>In Stock</td>
                    </tr>
                    
                </table>
                <div class="cleaner h20"></div>

                <a href="shoppingcart.php?id=<?php echo $id ?>" class="addtocart"></a>

			</div>
            <div class="cleaner h30"></div>
            
            <h5>Product Description</h5>
            <p><?php echo $desc ?></p>	
            
          <div class="cleaner h50"></div>
            
            <h3>Related Products</h3>
        	        	 <?php 
	
	
	
	$query1 = "SELECT * FROM cards ORDER BY sold DESC LIMIT 3";
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
           	<a href="productdetail.php"><img src="images/product/<?php echo $image ?>" alt="Shoes 4" width="150px" height="150px" /></a>
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