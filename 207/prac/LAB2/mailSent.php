<!-- 
Ashraful Haque Shafin
IT-207-004
LAB 2 
email is sent page
 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Lab1</title>
		<link rel="stylesheet" type="text/css" href="../include/mycss.css"/>
		<link rel="stylesheet" type="text/css" href="calendar.css"/>

	</head>
	<body>

		
		<?php readfile("../include/sidenav.inc"); ?>

		<?php include "../include/header.php"; ?>

		<div class="wholeContainer">
         <div class="contentMain">
<div class="emailBox">
    <h1>Office Hours Sign Up</h1>
    <?php 
    $name = $_POST["name"];
    $fromEmail = $_POST["email"];
    $finalTime = $_POST["time"]; 
    $to = 'ashafin@gmu.edu';
    $subject = 'Appointment';
	$message = 'Appointment has been fixed with '. $name." and the Time is ".$finalTime ;
	$headers = 'From: '. $fromEmail . "\r\n" .
    'Reply-To: ashafin@gmu.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	$sent = mail($to, $subject, $message, $headers);
	if($sent){
		echo "Email Has Been Sent From $fromEmail";
	}
	else{
		echo "Failed";
	}

   ?>
</div>
<?php
	// all the needed values to make a calendar
    if (isset($_POST["monday"])){
        $monday = $_POST["monday"];
    }
    if (isset($_POST["tuesday"])){
        $tuesday = $_POST["tuesday"];
    }
    if (isset($_POST["wednesday"])){
        $tuesday = $_POST["wednesday"];
    }
    if (isset($_POST["thursday"])){
        $tuesday = $_POST["thursday"];
    }
    if (isset($_POST["friday"])){
        $tuesday = $_POST["friday"];
    }
  	
  	$finalTime = $_POST["time"]; 
  	//echo "$finalTime";
   
    $days = $_POST["days"];

    $name = $_POST["name"];


	$date = time();
	$day = date('d', $date);
	$month = date('m', $date);
	$year = date('Y', $date);

	$day_one = mktime(0,0,0, $month, 1, $year);
	$monthtitle = date('F', $day_one);
    $dayofWeek= date('D', $day_one);

    $day_one = mktime(0,0,0, $month, 1, $year);
    // matching the day of the week
    switch ($dayofWeek) {
            case 'Sun': $dow = 0; break;
            case 'Mon': $dow = 1; break;
            case 'Tue': $dow = 2; break;
            case 'Wed': $dow = 3; break;
            case 'Thu': $dow = 4; break;
            case 'Fri': $dow = 5; break;
            case 'Sat': $dow = 6; break;
    }

    $numberOfdays = cal_days_in_month(0, $month, $year);

    
    echo "<a href='http://helios.vse.gmu.edu/~ashafin/IT207/index.php' style='text-align:center'>Home Page </a>";
    echo "<div class='headerCal'> $monthtitle, $year</div>";
    echo"
    <div class='box'>Sunday</div>
    <div class='box'>Monday</div>
    <div class='box'>Tuesday</div>
    <div class='box'>Wednesday</div>
    <div class='box'>Thursday</div>
    <div class='box'>Friday</div>
    <div class='box'>Saturday</div>";
    
    // counters is number of days in the calender
    $counter= 1;
    // taking care of empty boxes in the calender
    while ($dow > 0){
        echo "<div class='box'></div>";
        $dow = $dow-1;
        $counter++;
    }

    $dayCounter = 1; 
    while ($dayCounter<= $numberOfdays){
    	if($mondayTime . '-' . $dayCounter==$time){
    		 echo "<div class='box'>$dayCounter </br>
    		 $finalTime - $name
    		 </div>";
        	$dayCounter++;
        	$counter++;
    	}else{
    		echo "<div class='box'>$dayCounter</div>";
        	$dayCounter++;
        	$counter++;
    	}
        

        if($counter > 7){
            $counter = 1;
        }
    }

    while($counter > 1 && $counter <= 7){
        echo "<div class='box'></div>";
        $counter++;
    }
    
?>
</div>
</div>

		<?php readfile("../include/footer.inc"); ?>


		 	
		 
	</body>

</html>