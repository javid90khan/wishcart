<?php include 'header.php';?>
<h1>Add New Product</h1><hr /><br />
<?php
if(isset($_POST['submit']))
{echo '<h2>Product Added Succesfully </h2>';
}

?>
<form action="#" method="post" enctype="multipart/form-data">
<label for="title">Category : </label>
<select name="category" id="category">
  <option value="Birthday Card">Birthday Card</option>
  <option value="Diwali Card">Diwali Card</option>
  <option value="Christmas Card">Christmas Card</option>
</select><br /><br />
<label for="description">Description : </label>
<textarea name="desc"rows="4" cols="50" placeholder="write a small description about the product"></textarea><br /><br />
<label for="description">Cost: </label>
<input type="text" name="cost" style="width: 40px;" maxlength="5"></input><br /><br />
<label for="description">Stock: </label>
<input type="text" name="stock" style="width: 40px;" maxlength="4"></input><br /><br />
<label for="description">Image: </label>
<input type="file" name="file" id="file"><br>
<br />
<label>&nbsp;</label>
<input type="submit" value="Submit" name="submit" />
</form>
</div>
</body>
</html>



<?php
$db = mysqli_connect('Localhost', 'root', '', 'wishcart');

if(isset($_POST['submit']))
{

$name=$_POST['category'];
$desc=$_POST['desc'];
$cost=$_POST['cost'];
$image;
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    $image=$_FILES["file"]["name"];
    if (file_exists("../images/product/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../images/product/" . $_FILES["file"]["name"]);
      $query1 = "INSERT INTO cards(name,descr,cost,image) VALUES('$name','$desc',$cost,'$image')";
if(mysqli_query($db, $query1))
{

}
else
{
}
      
      }
    }
  }
else
  {
  echo "Invalid file";
  }


}
?>