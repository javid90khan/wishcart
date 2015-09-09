<?php include 'common_head.php' ?>
        <div id="content" class="float_r">
        	<h2>Checkout</h2>
   <h5><strong>BILLING INFORMATION</strong></h5>
        	

				<p>			
				<label>Full Name (must be same as on your credit card):</label><br />
				<input name="name"  id="ValidName" type="text" size="60" /><br /><br />
				<label>Address:</label><br />
				<textarea name="address"  id="ValidAddress" type="text" rows="3" cols="45" ></textarea><br /><br />
				<label>City:</label><br />
				<input name="city"  id="ValidCity" type="text" size="60" /><br /><br />
				<label>Country:</label><br />
				<input name="country"  id="ValidCountry" type="text" size="60" /><br /><br />
				<label>Email:</label><br />
				<input name="semail" id="ValidEmail" type="text" size="60" /><br /><br />
				<label>Phone:</label><br />
				<input name="sphone" id="ValidNumber" type="text" size="60" /><br /><br />
				
				<br /><a ><br /><br />	
						
				</p>	
            
            
            
            <?php
           $db = mysqli_connect('Localhost', 'root', '', 'wishcart');
            
           

			$query1 ="SELECT * FROM cart";
		    $data1 = mysqli_query($db, $query1);

 
   $gtotal=0;
	while ($row = mysqli_fetch_array($data1))
	{
		
		$cost = $row['cost'];
		$quantity=$row['quantity'];
		$total=$cost*$quantity;



$gtotal=$gtotal+$total;
           
           
           
           }
           ?>
            <div class="cleaner h50"></div>
            <h3>SHOPPING CART</h3>
            <h4>TOTAL AMOUNT: <strong>$ <?php echo $gtotal?></strong></h4>
			
            <table style="border:1px solid #CCCCCC;" width="100%">
                <tr>
                    <td height="80px"> <img src="images/paypal.gif" alt="paypal" /></td>
                    <td width="400px;" style="padding: 0px 20px;">Recommended if you have a PayPal account. Fastest delivery time.
                    </td>
                    <td><a href="pay.php" class="more">PAYPAL</a></td>
                </tr>
                <tr>
                    <td  height="80px"><img src="images/2co.gif" alt="paypal" />
                    </td>
                    <td  width="400px;" style="padding: 0px 20px;">2Checkout.com, Inc. is an authorized retailer of goods and services. 2CheckOut accepts customer orders via online checks, Visa, MasterCard, Discover, American Express, Diners, JCB and debit cards with the Visa, Mastercard logo. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</td>
                    <td><a href="pay.php" class="more">2CHECKOUT</a></td>
                </tr>
            </table>
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
<?php include 'common_foot.php' ?>