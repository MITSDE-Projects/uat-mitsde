<?php
include("include/connection.php");
$flag=$_GET["f"];
$title="";
$query="";
if(isset($flag) && $flag==0)
{
	$status = $_GET['s'];
	$title=$status;

			$query = "SELECT applicationid,memberID,username,active,programmesugpg,aadhar,gender,name,middlename,lastname,dateofbirth,nationality,category,country,photo_image,address,city,state,pincode,phonenumber,email,caddress,ccity,cstate,cpincode,cphonenumber,cemail,relationshipwithapplicant,professionoftheparent,parentmobilenumber,parentemail,bloodgroup,physicallychallenged,examboardname10,percentage10,yearofpassing10,yeargap10,examboardname12,percentage12,yearofpassing12,yeargap12,testcenter,colorRadio,dddate,ddnumber,bankname,branchname,transactid,isPayment,terms,Is_Active,board10,board12,ccountry,englishread,englishwrite,englishspeak,examname,examnumber,examrank,examscore,examyear,examname2,examnumber2,examrank2,examscore2,examyear2,examapplicationnumber,examapplicationnumber2,mpdomicile,organizationdetails,parentfname,parentlname,pcity,pcountry,ppincode,pstate,school10,school12,score10,score12,stream12,year10,year12,totaloutof10,totaloutof12,isComplete,lastPage,sop,degree1,degree2,inst1,inst2,university1,university2,yearofpassingd1,yearofpassingd2,scoredegree1,scoredegree2,studentisdcode,parentisdcode,formstatus,paymenttype,created FROM student WHERE LOWER(`formstatus`) =LOWER('$status')";

}

if(isset($flag) && $flag==1)
{
	$program=$_GET['p'];
		$title=$program;
			$query = "SELECT applicationid,memberID,username,active,programmesugpg,aadhar,gender,name,middlename,lastname,dateofbirth,nationality,category,country,photo_image,address,city,state,pincode,phonenumber,email,caddress,ccity,cstate,cpincode,cphonenumber,cemail,relationshipwithapplicant,professionoftheparent,parentmobilenumber,parentemail,bloodgroup,physicallychallenged,examboardname10,percentage10,yearofpassing10,yeargap10,examboardname12,percentage12,yearofpassing12,yeargap12,testcenter,colorRadio,dddate,ddnumber,bankname,branchname,transactid,isPayment,terms,Is_Active,board10,board12,ccountry,englishread,englishwrite,englishspeak,examname,examnumber,examrank,examscore,examyear,examname2,examnumber2,examrank2,examscore2,examyear2,examapplicationnumber,examapplicationnumber2,mpdomicile,organizationdetails,parentfname,parentlname,pcity,pcountry,ppincode,pstate,school10,school12,score10,score12,stream12,year10,year12,totaloutof10,totaloutof12,isComplete,lastPage,sop,degree1,degree2,inst1,inst2,university1,university2,yearofpassingd1,yearofpassingd2,scoredegree1,scoredegree2,studentisdcode,parentisdcode,formstatus,paymenttype,created FROM student WHERE LOWER(`programmesugpg`) =LOWER('$program')";

}
?>

<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css" />
	 <script type="text/javascript" src="js/jquery-1.8.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui-1.9.0.custom.min.js" ></script>
</br>
</br>
</br>
<ul class="list-unstyled list-inline" style="padding:20px;">
  <li>
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <a href="index.php" class="btn btn-success">Go to Home Page</a>
    <input type="button" id="btnExport" class="btn btn-success" value="Export Data" />
  </li>
</ul>
<style>
	table
	{
		padding-top:10px;
		margin: auto;
	}
	td,th
	{
		border-left:1px solid grey;
		border-top:1px solid grey;
		padding: 20px;
	}
	td:last-child,th:last-child
	{
		border-right:1px solid grey;
	}
	tr:last-child td
	{
		border-bottom:1px solid grey;
	}
</style>
</head>
<body>
	<center>
	<h1>Avantika Admissions - 2017</h1>
	<h2 id="status" style="text-transform:capitalize;"><?php echo $title;?></h2>
	<div>
<?php

//$memberid=2;
		$sql2 = mysqli_query($conn,$query);
		$count = mysqli_num_rows($sql2);
        if($count>0)
        {
            echo "<table id='test'>";
            echo "<thead>";
			echo "<th>Sr No.</th>";
			echo "<th>applicationid</th>";
echo "<th>memberID</th>";
echo "<th>username</th>";
//echo "<th>password</th>";
echo "<th>active</th>";
echo "<th>Program Enrolled</th>";
echo "<th>aadhar</th>";
echo "<th>gender</th>";
echo "<th>name</th>";
echo "<th>middle name</th>";
echo "<th>last name</th>";
echo "<th>DOB</th>";
echo "<th>nationality</th>";
echo "<th>category</th>";
echo "<th>country</th>";
echo "<th>photo_image</th>";
echo "<th>address</th>";
echo "<th>city</th>";
echo "<th>state</th>";
echo "<th>pincode</th>";
echo "<th>phonenumber</th>";
echo "<th>email</th>";
echo "<th>caddress</th>";
echo "<th>ccity</th>";
echo "<th>cstate</th>";
echo "<th>cpincode</th>";
echo "<th>cphonenumber</th>";
echo "<th>cemail</th>";
echo "<th>relationship with applicant</th>";
echo "<th>profession of the parent</th>";
echo "<th>parent mobile number</th>";
echo "<th>parent email</th>";
echo "<th>blood group</th>";
echo "<th>physically challenged</th>";
echo "<th>examboardname10</th>";
echo "<th>percentage10</th>";
echo "<th>yearofpassing10</th>";
echo "<th>yeargap10</th>";
echo "<th>examboardname12</th>";
echo "<th>percentage12</th>";
echo "<th>yearofpassing12</th>";
echo "<th>yeargap12</th>";
echo "<th>testcenter</th>";
echo "<th>colorRadio</th>";
echo "<th>dddate</th>";
echo "<th>ddnumber</th>";
echo "<th>bankname</th>";
echo "<th>branchname</th>";
echo "<th>transactid</th>";
echo "<th>isPayment</th>";
echo "<th>terms</th>";
echo "<th>Is_Active</th>";
echo "<th>board10</th>";
echo "<th>board12</th>";
echo "<th>ccountry</th>";
echo "<th>englishread</th>";
echo "<th>englishwrite</th>";
echo "<th>englishspeak</th>";
echo "<th>examname</th>";
echo "<th>examnumber</th>";
echo "<th>examrank</th>";
echo "<th>examscore</th>";
echo "<th>examyear</th>";
echo "<th>examname2</th>";
echo "<th>examnumber2</th>";
echo "<th>examrank2</th>";
echo "<th>examscore2</th>";
echo "<th>examyear2</th>";
echo "<th>examapplicationnumber</th>";
echo "<th>examapplicationnumber2</th>";
echo "<th>mpdomicile</th>";
echo "<th>organizationdetails</th>";
echo "<th>parentfname</th>";
echo "<th>parentlname</th>";
echo "<th>pcity</th>";
echo "<th>pcountry</th>";
echo "<th>ppincode</th>";
echo "<th>pstate</th>";
echo "<th>school10</th>";
echo "<th>school12</th>";
echo "<th>score10</th>";
echo "<th>score12</th>";
echo "<th>stream12</th>";
echo "<th>year10</th>";
echo "<th>year12</th>";
echo "<th>totaloutof10</th>";
echo "<th>totaloutof12</th>";
echo "<th>isComplete</th>";
echo "<th>lastPage</th>";
echo "<th style='width:400px;'>sop</th>";
echo "<th>degree1</th>";
echo "<th>degree2</th>";
echo "<th>inst1</th>";
echo "<th>inst2</th>";
echo "<th>university1</th>";
echo "<th>university2</th>";
echo "<th>yearofpassingd1</th>";
echo "<th>yearofpassingd2</th>";
echo "<th>scoredegree1</th>";
echo "<th>scoredegree2</th>";
echo "<th>studentisdcode</th>";
echo "<th>parentisdcode</th>";
echo "<th>formstatus</th>";
echo "<th>paymenttype</th>";
echo "<th>created</th>";
echo "</thead>";
            $i=1;
            while($studentdata = mysqli_fetch_assoc($sql2))
			{
            echo "<tr>";    
                
                echo "<td>".$i."</td>";
                 echo "<td>".$studentdata["applicationid"]."</td>";
 echo "<td>".$studentdata["memberID"]."</td>";
 echo "<td>".$studentdata["username"]."</td>";
 //echo "<td>".$studentdata["password"]."</td>";
 echo "<td>".$studentdata["active"]."</td>";
 echo "<td>".$studentdata["programmesugpg"]."</td>";
 echo "<td>".$studentdata["aadhar"]."</td>";
 echo "<td>".$studentdata["gender"]."</td>";
 echo "<td>".$studentdata["name"]."</td>";
 echo "<td>".$studentdata["middlename"]."</td>";
 echo "<td>".$studentdata["lastname"]."</td>";
 echo "<td>".$studentdata["dateofbirth"]."</td>";
 echo "<td>".$studentdata["nationality"]."</td>";
 echo "<td>".$studentdata["category"]."</td>";
 echo "<td>".$studentdata["country"]."</td>";
 echo "<td>".$studentdata["photo_image"]."</td>";
 echo "<td>".$studentdata["address"]."</td>";
 echo "<td>".$studentdata["city"]."</td>";
 echo "<td>".$studentdata["state"]."</td>";
 echo "<td>".$studentdata["pincode"]."</td>";
 echo "<td>".$studentdata["phonenumber"]."</td>";
 echo "<td>".$studentdata["email"]."</td>";
 echo "<td>".$studentdata["caddress"]."</td>";
 echo "<td>".$studentdata["ccity"]."</td>";
 echo "<td>".$studentdata["cstate"]."</td>";
 echo "<td>".$studentdata["cpincode"]."</td>";
 echo "<td>".$studentdata["cphonenumber"]."</td>";
 echo "<td>".$studentdata["cemail"]."</td>";
 echo "<td>".$studentdata["relationshipwithapplicant"]."</td>";
 echo "<td>".$studentdata["professionoftheparent"]."</td>";
 echo "<td>".$studentdata["parentmobilenumber"]."</td>";
 echo "<td>".$studentdata["parentemail"]."</td>";
 echo "<td>".$studentdata["bloodgroup"]."</td>";
 echo "<td>".$studentdata["physicallychallenged"]."</td>";
 echo "<td>".$studentdata["examboardname10"]."</td>";
 echo "<td>".$studentdata["percentage10"]."</td>";
 echo "<td>".$studentdata["yearofpassing10"]."</td>";
 echo "<td>".$studentdata["yeargap10"]."</td>";
 echo "<td>".$studentdata["examboardname12"]."</td>";
 echo "<td>".$studentdata["percentage12"]."</td>";
 echo "<td>".$studentdata["yearofpassing12"]."</td>";
 echo "<td>".$studentdata["yeargap12"]."</td>";
 echo "<td>".$studentdata["testcenter"]."</td>";
 echo "<td>".$studentdata["colorRadio"]."</td>";
 echo "<td>".$studentdata["dddate"]."</td>";
 echo "<td>".$studentdata["ddnumber"]."</td>";
 echo "<td>".$studentdata["bankname"]."</td>";
 echo "<td>".$studentdata["branchname"]."</td>";
 echo "<td>".$studentdata["transactid"]."</td>";
 echo "<td>".$studentdata["isPayment"]."</td>";
 echo "<td>".$studentdata["terms"]."</td>";
 echo "<td>".$studentdata["Is_Active"]."</td>";
 echo "<td>".$studentdata["board10"]."</td>";
 echo "<td>".$studentdata["board12"]."</td>";
 echo "<td>".$studentdata["ccountry"]."</td>";
 echo "<td>".$studentdata["englishread"]."</td>";
 echo "<td>".$studentdata["englishwrite"]."</td>";
 echo "<td>".$studentdata["englishspeak"]."</td>";
 echo "<td>".$studentdata["examname"]."</td>";
 echo "<td>".$studentdata["examnumber"]."</td>";
 echo "<td>".$studentdata["examrank"]."</td>";
 echo "<td>".$studentdata["examscore"]."</td>";
 echo "<td>".$studentdata["examyear"]."</td>";
 echo "<td>".$studentdata["examname2"]."</td>";
 echo "<td>".$studentdata["examnumber2"]."</td>";
 echo "<td>".$studentdata["examrank2"]."</td>";
 echo "<td>".$studentdata["examscore2"]."</td>";
 echo "<td>".$studentdata["examyear2"]."</td>";
 echo "<td>".$studentdata["examapplicationnumber"]."</td>";
 echo "<td>".$studentdata["examapplicationnumber2"]."</td>";
 echo "<td>".$studentdata["mpdomicile"]."</td>";
 echo "<td>".$studentdata["organizationdetails"]."</td>";
 echo "<td>".$studentdata["parentfname"]."</td>";
 echo "<td>".$studentdata["parentlname"]."</td>";
 echo "<td>".$studentdata["pcity"]."</td>";
 echo "<td>".$studentdata["pcountry"]."</td>";
 echo "<td>".$studentdata["ppincode"]."</td>";
 echo "<td>".$studentdata["pstate"]."</td>";
 echo "<td>".$studentdata["school10"]."</td>";
 echo "<td>".$studentdata["school12"]."</td>";
 echo "<td>".$studentdata["score10"]."</td>";
 echo "<td>".$studentdata["score12"]."</td>";
 echo "<td>".$studentdata["stream12"]."</td>";
 echo "<td>".$studentdata["year10"]."</td>";
 echo "<td>".$studentdata["year12"]."</td>";
 echo "<td>".$studentdata["totaloutof10"]."</td>";
 echo "<td>".$studentdata["totaloutof12"]."</td>";
 echo "<td>".$studentdata["isComplete"]."</td>";
 echo "<td>".$studentdata["lastPage"]."</td>";
 echo "<td>".$studentdata["sop"]."</td>";
 echo "<td>".$studentdata["degree1"]."</td>";
 echo "<td>".$studentdata["degree2"]."</td>";
 echo "<td>".$studentdata["inst1"]."</td>";
 echo "<td>".$studentdata["inst2"]."</td>";
 echo "<td>".$studentdata["university1"]."</td>";
 echo "<td>".$studentdata["university2"]."</td>";
 echo "<td>".$studentdata["yearofpassingd1"]."</td>";
 echo "<td>".$studentdata["yearofpassingd2"]."</td>";
 echo "<td>".$studentdata["scoredegree1"]."</td>";
 echo "<td>".$studentdata["scoredegree2"]."</td>";
 echo "<td>".$studentdata["studentisdcode"]."</td>";
 echo "<td>".$studentdata["parentisdcode"]."</td>";
 echo "<td>".$studentdata["formstatus"]."</td>";
 echo "<td>".$studentdata["paymenttype"]."</td>";
 echo "<td>".$studentdata["created"]."</td>";
            echo "</tr>";
			$i++;
            }
            echo "</table>";
        }

?>
	</div>
	</center>
	<script>
	$("#btnExport").click(function(e) {
		var filename=document.getElementById("status").innerHTML;
		//getting values of current time for generating the file name
		var dt = new Date();
		var day = dt.getDate();
		var month = dt.getMonth() + 1;
		var year = dt.getFullYear();
		var hour = dt.getHours();
		var mins = dt.getMinutes();
		var postfix = day + "." + month + "." + year + "_" + hour + "." + mins;
		//creating a temporary HTML link element (they support setting file names)
		var a = document.createElement('a');
		//getting data from our div that contains the HTML table
		var data_type = 'data:application/vnd.ms-excel';
		var table_div = document.getElementById('test');
		var table_html = table_div.outerHTML.replace(/ /g, '%20');
		a.href = data_type + ', ' + table_html;
		//setting the file name
		a.download = "avantika_"+filename+"_"+postfix+'.xls';
		//triggering the function
		a.click();
		//just in case, prevent default behaviour
		e.preventDefault();
	});
	</script>
</body>
</html>