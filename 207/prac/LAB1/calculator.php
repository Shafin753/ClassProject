<!-- 
Ashraful Haque Shafin
IT-207-004
Grade Calculator
 -->
<div class="wholeContainer">
 	<div class="contentMain">
		<?php

			define('fullPer', 100);

			
			$earnedParticipation = $_POST ["earnedParticipation"];
			$maxParticipation = $_POST ["maxParticipation"];
			$weightParticipation = $_POST ["weightParticipation"];
			$participation = calculatePer($earnedParticipation,$maxParticipation);
			$weightedValueP = weightPer ($participation,$weightParticipation);

			echo "<p>You earned a $participation% for participation, with a weighted value of $weightedValueP%</p>";

			$earnedQuiz = $_POST ["earnedQuiz"];
			$maxQuiz = $_POST ["maxQuiz"];
			$weightQuiz= $_POST ["weightQuiz"];
			$quiz = calculatePer($earnedQuiz,$maxQuiz);
			$weightedValueQ = weightPer ($quiz,$weightQuiz);

			echo "<p>You earned a $quiz% for Quizzes, with a weighted value of $weightedValueQ%</p>";

			$earnedLab = $_POST ["earnedLab"];
			$maxLab = $_POST ["maxLab"];
			$weightLab = $_POST ["weightLab"];
			$lab = calculatePer($earnedLab,$maxLab);
			$weightedValueL = weightPer ($lab,$weightLab);

			echo "<p>You earned a $lab% for Lab Assignments, with a weighted value of $weightedValueL%</p>";

			$earnedPracticum = $_POST ["earnedPracticum"];
			$maxPracticum = $_POST ["maxPracticum"];
			$weightPracticum = $_POST ["weightPracticum"];
			$particum = calculatePer($earnedPracticum,$maxPracticum);
			$weightedValuePr = weightPer ($particum,$weightPracticum);

			echo "<p>You earned a $particum% for Practica, with a weighted value of $weightedValuePr%</p>";


			$finalGrade = $weightedValueP + $weightedValueQ + $weightedValueL + $weightedValuePr;


			$grade = ($finalGrade>=95)?$grade = "A+": (($finalGrade>=90)?$grade ="A": (($finalGrade>=85)?$grade = "B+": (($finalGrade>=80)?$grade ="B": (($finalGrade>=75)?$grade = "C+": (($finalGrade>=70)?$grade ="C": (($finalGrade>=60)?$grade = "D": $grade ="F" )) )) )) ;
		


			echo "You final Grade is a $finalGrade%, which is a $grade";



			function weightPer ($calPer, $weight){
				$result = ($calPer*$weight)/fullPer;
				return $result;
			}

			function calculatePer($earned,$max){
				$calPer  = ($earned/$max)*fullPer;
				return $calPer;
			}

		?>
	</div>
</div>