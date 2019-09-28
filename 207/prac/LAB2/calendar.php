<div class="wholeContainer">
         <div class="contentMain">
<div class="emailBox">
    <h1>Office Hours Sign Up</h1>
    <form action="mailSent.php" method="POST">
        Student Name: <input type="text" name="name">
        Student Email: <input type="text" name="email">


        <button type="submit" value="Submit">Submit</button>
        <button type="reset" value="Reset">Clear</button>
        
    
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
        $wednesday = $_POST["wednesday"];
    }
    if (isset($_POST["thursday"])){
        $thursday = $_POST["thursday"];
    }
    if (isset($_POST["friday"])){
        $friday = $_POST["friday"];
    }
  
   
   
    


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
        $date = $dayCounter.'-3-2019';
        $nameOfDay = date('D', strtotime($date));
        
        if(!empty($monday)&& $nameOfDay=='Mon'){
                echo "<div class='box'>$dayCounter </br>";
                foreach ($monday as $value) {
                    echo "$value
                    <input type='radio' name='time' value='$value'> </br>
                    <input type='hidden' name='days' value='$dayCounter'>";
                }
                echo "</div>";
        }
        elseif(!empty($tuesday)&& $nameOfDay=='Tue'){
            echo "<div class='box'>$dayCounter </br>";
                foreach ($tuesday as $value) {
                    echo "$value
                    <input type='radio' name='time' value='$value'> </br>
                    <input type='hidden' name='days' value='$dayCounter'>" ;
                }
                echo "</div>";
        }
         elseif(!empty($wednesday)&& $nameOfDay=='Wed'){
            echo "<div class='box'>$dayCounter </br>";
                foreach ($wednesday as $value) {
                    echo "$value
                    <input type='radio' name='time' value='$value'></br>
                    <input type='hidden' name='days' value='$dayCounter'>";
                }
                echo "</div>";
        }
         elseif(!empty($thursday)&& $nameOfDay=='Thu'){
            echo "<div class='box'>$dayCounter </br>";
                foreach ($thursday as $value) {
                    echo "$value
                    <input type='radio' name='time' value='$value-$dayCounter'></br>
                    <input type='hidden' name='days' value='$dayCounter'>";
                }
                echo "</div>";
        }
         elseif(!empty($friday)&& $nameOfDay=='Fri'){
            echo "<div class='box'>$dayCounter </br>";
                foreach ($friday as $value) {
                    echo "$value
                    <input type='radio' name='time' value='$value'></br>
                    <input type='hidden' name='days' value='$dayCounter'>";
                }
                echo "</div>";
        }
        else{
            echo "<div class='box'>$dayCounter</div>";
        }
        
        $dayCounter++;
        $counter++;

        if($counter > 7){
            $counter = 1;
        }
        
    }


    while($counter > 1 && $counter <= 7){
        echo "<div class='box'></div>";
        $counter++;
    }
    echo "</form>";
?>
</div>
</div>