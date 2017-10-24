
 <?php






$servername = "localhost";
$username = "root";
$password = "root";
$dbname="insideout";
//Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); }
//echo "Connected successfully";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


  if($_POST && isset($_POST['submit'])){
  	
    $id_cart=$_POST['submit'];
    //echo $id_cart;	
    $sql="INSERT INTO cart(name,price,id)
		  SELECT service_name,price,service_id FROM services
		  WHERE service_id=$id_cart;";

$result=mysqli_query($conn,$sql);

/*location.reload();*/
/*header("Refresh:0");*/
header('Refresh: 1; url=services.php');


}  





  if($_POST && isset($_POST['remove'])){
  	
    $removeid=$_POST['remove'];
    	
    $sql="DELETE FROM cart
		  
		  WHERE id=$removeid;";

$result=mysqli_query($conn,$sql);

/*location.reload();*/
/*header("Refresh:0");*/
header('Refresh: 1; url=services.php');


} 

return true;
 ?>

