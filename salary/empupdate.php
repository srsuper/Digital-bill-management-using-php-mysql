
<?php
if(isset($_POST['update']))
{	
    print("update");
   $connect = mysqli_connect("localhost", "root", "", "rich");
     
   
  
$id=$_REQUEST['id'];
$q=mysqli_query($connect,"select * from salary where id='$id'");
$res=mysqli_fetch_array($q);


extract($_POST);
if(isset($update))
{
 mysqli_query($connect,"update salary set name='$name',contact='$contact',salary='$salary',date='$date',advance='$advance',leaves='$leaves',netsalary='$netsalary',updateddate='" . $_REQUEST['tdate'] . "' 
   WHERE id=$id");

	
	echo "Records updated";
	
	} 
header("location: http://localhost/rich/salary/empreport1.php");
  }
         
 
?>      
 
 <?php
//getting id from url
$id = $_GET['id'];
$connect = mysqli_connect("localhost", "root", "", "rich");
//selecting data associated with this particular id
$result = mysqli_query($connect, "SELECT * FROM salary WHERE id=$id");

while($res = mysqli_fetch_array($result))
{



   
    $name =$res['name'];
    $contact=$res['contact'];
    $salary=$res['salary'];
    $date=$res['date'];
    $advance=$res['advance'];
    $leaves=$res['leaves'];
    $netsalary=$res['netsalary'];
   
    
    }
?>  


<?php
include_once("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="salary.php">Salary</a>
  <a href="empreport1.php">report</a>
 
  
</div>


</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="../js/jquery-2.2.4.js"></script>
 

<script>
$(document).ready(function() {
	var today = new Date();
var dd = ("0" + (today.getDate())).slice(-2);
var mm = ("0" + (today.getMonth() +　1)).slice(-2);
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd ;
$("#tdate").attr("value", today);
});
</script>

<style>
 	body {
		
		fofft-family:  initial;
  
  fofft-size: 16px;
  background: url('') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  fofft-family: 'Roboto', Tahoma, Arial, sans-serif;
  line-height: 1.5;
 
}



form > .textbox {
  outline: 0;
  height: 42px;
  width: 244px;
  line-height: 42px;
  padding: 0 16px;
  background-color: rgba(255, 255, 255, 0.8);
  color: #212121;
  border: 0;
  float: left;
  -webkit-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}

form > .textbox:focus {
  outline: 0;
  background-color: #FFF;
}

form > .buttoff1 {
  outline: 0;
  background: noffe;
  background-color: rgba(38, 50, 56, 0.8);
  
  height: 30px;
  width: 50px;
  text-align: center;
  line-height: 42px;
  border: 0;
  color: #FFF;
  fofft: normal normal normal 14px/1 FofftAwesome;
  fofft-size: 16px;
  text-rendering: auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transitioff: background-color .4s ease;
  transitioff: background-color .4s ease;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

form > .buttoff1:hover {
  background-color: rgba(0, 150, 136, 0.8);
}
form > .buttoff {
  outline: 0;
  background: noffe;
  background-color: rgba(38, 50, 56, 0.8);
  float: left;
  height: 42px;
  width: 42px;
  text-align: center;
  line-height: 42px;
  border: 0;
  color: #FFF;
  fofft: normal normal normal 14px/1 FofftAwesome;
  fofft-size: 16px;
  text-rendering: auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transitioff: background-color .4s ease;
  transitioff: background-color .4s ease;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

form > .buttoff:hover {
  background-color: rgba(0, 150, 136, 0.8);
}

</style>

<h1  align="center"style="color:Green;">Rich Media New Entry </h1>
<td >
<br/>
<br>

<form action="" method="post" >


<table  align="center">



<tr>  
		<th >Salarydate</th>
         <th>Name</th>
         <th>Contact</th>      
         <th>Salary</th>
		 <th>Advance</th>
		 <th>Leaves</th>
		 <th>Netsalary</th>
		 <th>Updateddate</th>
		 
		
</tr>


<tr>

<td>
<label for="dt"></label> <input name="date"value="<?php echo $date;?>" size="7" readonly type="date"/>
</td>

<td>
 <input type="text" name="name" autocomplete=off value="<?php echo $name;?>" size="7"id="sno" /> 
	 
</td>


<td>		 
<input type="text" name="contact" autocomplete=off value="<?php echo $contact;?>" size="7"id="Contact" /> 
</td>
<td>		 
<input type="text" name="salary" autocomplete=off value="<?php echo $salary;?>" size="7"id="Size" /> 
</td>
<td>		 
<input type="text" name="advance" autocomplete=off value="<?php echo $advance;?>" size="7"id="advance" /> 
</td>
<td>		 
<input type="text" name="leaves" autocomplete=off value="<?php echo $leaves;?>" size="7"id="leaves" /> 
</td>
<td>
<input type="text" autocomplete=off  size="7"name="netsalary" value="<?php echo $netsalary;?>" id="netsalary" />
</td>
<td>
 <input type ="date" id="tdate"size="7" name="tdate" value="" >

</td>

</tr>





</table>


<center>
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/>
	<input type="submit" class="button1" value="Update"name ="update"/>

</form>



</body>
</html>
