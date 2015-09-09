<?php 
	include 'header.php';
	
	?>
	<br />
	<br />
	<h2>Top Selling Birthday Cards</h2>
    <div style="margin:0 auto;">
      <table id='data-table-1' border="2px solid">
        <tr>
          <th align="center">Card-Id</th>
          <th align="center">Sold</th>
        </tr>
        <?php 
	
	
	$db = mysqli_connect('Localhost', 'root', '', 'wishcart');
	$query1 = "SELECT id,sold FROM cards where name='Birthday Card'";
	$data1 = mysqli_query($db, $query1);

  

	while ($row = mysqli_fetch_array($data1))
	{
		$id = $row['id'];
		$sold = $row['sold'];
		 
		?>     	
        <tr><td align="center"><?php echo $id ?></td><td align="center"><?php echo $sold ?></td></tr>
     <?php
	}
	?>
      </table>  
    </div>
    
    <br />
	<br />
	
	