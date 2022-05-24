<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert Payment</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Insert Payment
						<button class="btn" align="center"> 
                        <a href="addPayment.php" class="btn">Add Payment</a>
                        </button>
						</h1>
                    
<?php

include'connection.php';

	    $recipt_no      = $_POST["recipt_no"];
		$client_id      = $_POST["client_id"];
		$month          = $_POST["month"];
		$amount         = $_POST["amount"];
		$fine           = $_POST["fine"];
		$due            = $_POST["due"];
		$agent_id       = $_POST["agent_id"];
		
		

	$sql = "INSERT INTO payment (`recipt_no`, `client_id`, `start date`, `amount`, `fine`, `expiry date`, `agent_id`)"."VALUES('$recipt_no', '$client_id', '$month', '$amount', '$fine', '$due','$agent_id')";
	
	if ($conn->query($sql) === true) {
			echo "New Payment ADDED";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
?>

             </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

</body>
</html>
