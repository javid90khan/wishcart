<?php 
	include 'header.php';
	
	?>
	<br />
	<br />
	<h2>Top Selling Cards</h2>
    <div style="margin:0 auto;">
      <table id='data-table-1' border="2px solid" >
        <tr>
          <th align="center">Card Category</th>
          <th align="center">Sold</th>
        </tr>
        <?php 
	
	
	$db = mysqli_connect('Localhost', 'root', '', 'wishcart');
	$query1 = "SELECT sold,name FROM cards where name='Birthday Card'";
	$data1 = mysqli_query($db, $query1);

  

	while ($row1 = mysqli_fetch_array($data1))
	{
		$name1=$row1['name'];
		$sold1 =$sold1+$row1['sold'];
		
	} 
	
		$query2 = "SELECT sold,name FROM cards where name='Christmas Card'";
	    $data2 = mysqli_query($db, $query2);

  

	while ($row2 = mysqli_fetch_array($data2))
	{
		$name2=$row2['name'];
		$sold2 =$sold2+$row2['sold'];
		
	} 
	
	
	$query3 = "SELECT sold,name FROM cards where name='Diwali Card'";
	    $data3 = mysqli_query($db, $query3);

  

	while ($row3 = mysqli_fetch_array($data3))
	{
		$name3=$row3['name'];
		$sold3 =$sold3+$row3['sold'];
		
	} 
		?>  
		<br />   	
        <tr><td align="center"><?php echo $name1 ?></td><td align="center"><?php echo $sold1 ?></td></tr>
        <tr><td align="center"><?php echo $name2 ?></td><td align="center"><?php echo $sold2 ?></td></tr>
        <tr><td align="center"><?php echo $name3 ?></td><td align="center"><?php echo $sold3 ?></td></tr>
  
     
      </table>  
    </div>
    
    <br />
	<br />
	
	