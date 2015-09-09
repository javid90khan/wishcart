<?php include 'common_head.php' ?>
        <div id="content" class="float_r">
        
        	<h1>Shopping Cart</h1>
        	<table width="680px" cellspacing="0" cellpadding="5">
                   	  <tr bgcolor="#ddd">
                        	<th width="220" align="left">Image </th> 
                        	<th width="180" align="left">Description </th> 
                       	  	<th width="100" align="center">Quantity </th> 
                       	  	<th width="60" align="right">Update </th> 
                       	  	
                        	<th width="60" align="right">Price </th> 
                        	<th width="60" align="right">Shipping </th> 
                        	<th width="60" align="right">Total </th> 
                        	<th width="90"> </th>
                            
                      </tr>
        
                		<?php
           $db = mysqli_connect('Localhost', 'root', '', 'wishcart');
            if(isset($_GET["id"]))
           {  
           	$id=htmlspecialchars($_GET["id"]);
           	
	
	
	$query = "SELECT * FROM cart where id=".$id;
    $result = mysqli_query($db,$query);

if ($row = mysqli_fetch_array($result)==FALSE)
{	
	
	$query1 = "SELECT * FROM cards where id=".$id;
	
	$data1 = mysqli_query($db, $query1);

 

	$row = mysqli_fetch_array($data1);
	
	    $image=$row['image'];
		$desc = $row['descr'];
		$cost = $row['cost'];
		
		
		$query1 = "INSERT INTO cart VALUES($id,'$desc',$cost,1,'$image')";	
		  	          
        mysqli_query($db, $query1);
           }
       
    else
    { 
    	$query1 = "update cart set quantity=quantity+1 where id=$id";	
		  	          
        mysqli_query($db, $query1);
    }
           }
		
		$query1 ="SELECT * FROM cart";
	   $data1 = mysqli_query($db, $query1);

 
     $gtotal=0;
	while ($row = mysqli_fetch_array($data1))
	{
		$id = $row['id'];
		$desc = $row['desc'];
		$cost = $row['cost'];
		$quantity=$row['quantity'];
		$image=$row['image'];

		$total=$cost*$quantity;
         	?>
        
       
                    	<tr>
                        	<td><img src="images/product/<?php echo $image; ?>" alt="image 1" width="150px" height="150px"/>
                        	</td> 
                        	<td> <?php echo $desc ?></td> 
                        	<form name="myForm" action="update.php" method="get" >
                        	<input type ="hidden" name="id" value="<?php echo $id ?>" style="width:0px;"></input>
                            <td align="center"><input type="text" value="<?php echo $quantity ?>" name="quantity" style="width: 20px; text-align: right" /> </td>
                            
                          
                            <td align="center"><input type="submit" value="update"> </td></form>
                            <td align="right">$ <?php echo $cost ?> </td> 
                             <td align="right">Free </td> 
                            <td align="right">$ <?php echo $total ?> </td>
                            <td align="center"> <a href="delete.php?id=<?php echo $id ?>"><img src="images/remove_x.gif" alt="remove" /><br />Remove</a></td>
						</tr>
                        <?php
	$gtotal=$gtotal+$total;
	}
	mysqli_close($db);
	
	if(!isset($_GET['rel']))
	{
echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=shoppingcart.php?rel=1">';
	}
  
	?>
                      
					</table>
                    <div style="float:right; width: 215px; margin-top: 20px;">
                    
					
	<?php
		   $db = mysqli_connect('Localhost', 'root', '', 'wishcart');
           $query1 ="SELECT count(*) FROM cart";
	       $data1 = mysqli_query($db, $query1);
	       $row = mysqli_fetch_array($data1);
	if($row['count(*)']!=0)
	{   echo '<p><a href="#">Grand Total=$ '.$gtotal.'</a>';
		echo '<p><a href="checkout.php">Proceed to checkout</a></p>';
	}
	?>
					
                    <p><a href="index.php">Continue shopping</a></p>
                    	
                    </div>
			</div>
			
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
<?php include 'common_foot.php' ?>