<div class="wholeContainer">
		 <div class="contentMain">

		 	<div class="contentLeftTwoBox">
		 		<img src="include/self.jpg" alt="selfphoto" height="310" width="400"/>
			</div>
			<div class="contentLeftTwoBox">
		 		<p style="font-size: 20px;"><b>Summary</b></p>
		 		<h4 style="text-align: center;"> Personal</h4>
		 		<p> 
		 			<?php
					function display_name($name)
					{
					echo "Hello! My name is " . $name;
					}
					display_name("Ashraful Haque Shafin");
					?> 
					<br/>
		 			<?php
					$str = "dhaka";
					$str = strtoupper($str);
					echo "Home Town: Dhaka City, $str";
					?>
		 			<br>
			 		<?php
					$str  = "Country: Bangladesh ab";
					$trimmed = trim($str, "ab");
					print($trimmed);
					?>
		 		</p>
  				<h4 style="text-align: center;"> Academic</h4>
  				<p>
  					<?php
					$arr[] = 'I am in my senior year and I am planning';
					$arr[] = 'to graduate on December, 2020';

					echo join(' ', $arr);

					?>
  				</p>
  				<p>
  					<?php
						$str=  chop("   Programming   ");//right spaces are eliminated
						echo "My major is Information Technolgy and my concentration is Database Technology and $str";
						?>
  				</p>

			</div>
		</div>

		<div class="contentMain">
		 	<div class="contentRight">
		 		<p style="font-size: 20px;"><b>Professional & Personal Details</b></p> <br>
		 		<p>
		 		I was born and raised in Dhaka, Bangladesh and moved to the United States after finishing high school. I started college here at George Mason University.  I chose Information Technology as my major because I always liked to work with technologies and also this field has excellent job opportunities in the future.  
		 		</p>
		 		<p><?php
         			 print("Other than school and work I like to workout at the gym and play MMA (Mixed martial arts). in my free time");
         			
      				?>
      			</p>
      			<p><?php
         			function writeMessage2() {
            			echo "I am not good at it, but still, it's something to keep me active.";
         			}
         
         			writeMessage2();
      				?>
      			</p> 

		 		<p> Currently, I am doing an internship at Micron Technology (Manassas, VA) as a Process Control System Software Engineer where I use technologies like Python, SQL, PL/SQL, etc. </p>
		 		<p>Before that, I had an another internship at Optimal Solutions and Technologies ( McLean, VA) as a Technical Intern (Web Application Developer) where I used technologies like Javascript, .NET, elastic search, etc.</p> 
		 		<p>
		 		<?php printf('I want to get a Full-Stack Software Engineer %s after my %s', 'job', 'graduation.'); ?>
		 		</p>	
		 `	</div>
		</div>
</div>