<?php 
	include 'header.php';
	
	?>
	<br />
	<br />
	<h2>Monthly Report</h2>
    <div style="margin:0 auto;">
      <table id='data-table-1' border="2px solid">
        <tr>
          <th align="center">Month</th>
          <th align="center">no.of Product Sold</th>
        </tr>
        <?php 
	
	
	$db = mysqli_connect('Localhost', 'root', '', 'wishcart');
	$query1 = "SELECT SUM(sold) as sum from cards where date like '2013-01%'";
	$data1 = mysqli_query($db, $query1);

  

	$row1 = mysqli_fetch_array($data1);
	
		$sum1= $row1['sum'];

    $query2 = "SELECT SUM(sold) as sum from cards where date like '2013-02%'";
	$data2 = mysqli_query($db, $query2);
	$row2 = mysqli_fetch_array($data2);
	$sum2= $row2['sum'];

$query2 = "SELECT SUM(sold) as sum from cards where date like '2013-02%'";
	$data2 = mysqli_query($db, $query2);
	$row2 = mysqli_fetch_array($data2);
	$sum2= $row2['sum'];


$query3 = "SELECT SUM(sold) as sum from cards where date like '2013-03%'";
	$data3 = mysqli_query($db, $query3);
	$row3 = mysqli_fetch_array($data3);
	$sum3= $row3['sum'];



$query4 = "SELECT SUM(sold) as sum from cards where date like '2013-04%'";
	$data4 = mysqli_query($db, $query4);
	$row4 = mysqli_fetch_array($data4);
	$sum4= $row4['sum'];

$query5 = "SELECT SUM(sold) as sum from cards where date like '2013-05%'";
	$data5 = mysqli_query($db, $query5);
	$row5 = mysqli_fetch_array($data5);
	$sum5= $row5['sum'];

$query6 = "SELECT SUM(sold) as sum from cards where date like '2013-06%'";
	$data6 = mysqli_query($db, $query6);
	$row6 = mysqli_fetch_array($data6);
	$sum6= $row6['sum'];
		 
$query7 = "SELECT SUM(sold) as sum from cards where date like '2013-07%'";
	$data7 = mysqli_query($db, $query7);
	$row7 = mysqli_fetch_array($data7);
	$sum7= $row7['sum'];

$query8 = "SELECT SUM(sold) as sum from cards where date like '2013-08%'";
	$data8 = mysqli_query($db, $query8);
	$row8 = mysqli_fetch_array($data8);
	$sum8= $row8['sum'];

$query9 = "SELECT SUM(sold) as sum from cards where date like '2013-09%'";
	$data9 = mysqli_query($db, $query9);
	$row9 = mysqli_fetch_array($data9);
	$sum9= $row9['sum'];

$query10 = "SELECT SUM(sold) as sum from cards where date like '2013-10%'";
	$data10 = mysqli_query($db, $query10);
	$row10 = mysqli_fetch_array($data10);
	$sum10= $row10['sum'];
$query11 = "SELECT SUM(sold) as sum from cards where date like '2013-11%'";
	$data11 = mysqli_query($db, $query11);
	$row11 = mysqli_fetch_array($data11);
	$sum11= $row11['sum'];

$query12 = "SELECT SUM(sold) as sum from cards where date like '2013-12%'";
	$data12 = mysqli_query($db, $query12);
	$row12 = mysqli_fetch_array($data12);
	$sum12= $row12['sum'];
	   ?> 	
        <tr><td align="center">1</td><td align="center"><?php echo $sum1 ?></td></tr>
<tr><td align="center">2</td><td align="center"><?php echo $sum2 ?></td></tr>
<tr><td align="center">3</td><td align="center"><?php echo $sum3 ?></td></tr>
<tr><td align="center">4</td><td align="center"><?php echo $sum4 ?></td></tr>
<tr><td align="center">5</td><td align="center"><?php echo $sum5 ?></td></tr>
<tr><td align="center">6</td><td align="center"><?php echo $sum6 ?></td></tr>
<tr><td align="center">7</td><td align="center"><?php echo $sum7 ?></td></tr>
<tr><td align="center">8</td><td align="center"><?php echo $sum8 ?></td></tr>
<tr><td align="center">9</td><td align="center"><?php echo $sum9 ?></td></tr>
<tr><td align="center">10</td><td align="center"><?php echo $sum10 ?></td></tr>
<tr><td align="center">11</td><td align="center"><?php echo $sum11 ?></td></tr>
<tr><td align="center">12</td><td align="center"><?php echo $sum12 ?></td></tr>

    
      </table>  
    </div>
    
    <br />
	<br />
	
	