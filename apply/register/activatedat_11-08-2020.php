<?php
require('includes/config.php');


//echo "IN FILES"; exit;

//collect values from the url

if(isset($_GET['x']) && isset($_GET['y']) && $_GET['x']!='' && $_GET['y']!='')
{


$memberID = trim($_GET['x']);
$active = trim($_GET['y']);

//if id is number and the active token is not empty carry on
if(is_numeric($memberID) && !empty($active)){


       


	//update users record set the active column to Yes where the memberID and active value match the ones provided in the array
	$stmt = $db->prepare("UPDATE student SET active = 'Yes' WHERE memberID = :memberID AND active = :active");
	$stmt->execute(array(
		':memberID' => $memberID,
		':active' => $active
	));


        //echo "UPDATE student SET activex = 'Yes' WHERE memberID = :memberID AND activex = :active";  exit;

	//if the row was updated redirect the user
	if($stmt->rowCount() == 1){

		//redirect to login page
		header('Location: http://mitsde.com/apply/register/index.php?action=active&src='.$_GET['src']);
		exit;

	} else {
		echo "Your account is active."; 
		?>
		<br>
		<a href="http://mitsde.com/apply/register/index.php">Go To login page</a>
		<?php
	}
	
}

}
?>