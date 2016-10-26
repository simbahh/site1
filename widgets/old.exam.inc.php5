<?php 

			if(isset($_GET['result'])){
				$result_mark = $_GET['result'];
				echo "
				<div class='alert alert-success' role='alert'>
					<a href='index.php' class='web_fonts_des float_left'><b>X</b></a>
					<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
					Completed the examination you have obtained <b>{$result_mark}%</b>
				</div>";

			}

?>

		<form action='' method='POST'>
		<table class="table table-striped">
			<?php 
				$sql_get_all_ques = mysql_query("SELECT * FROM `questions`");
				$count = 1;
				$coorect_answers = array();
				while($data = mysql_fetch_object($sql_get_all_ques)){
					
					$question_id = $data->id;
					$the_question = $data->question;
					$option_a = $data->option_a;
					$option_b = $data->option_b;
					$option_c = $data->option_c;
					$option_d = $data->option_d;
					$correct_answer = $data->correct_answer;

					echo "
					<tr>
					
						{$count})&nbsp;&nbsp;{$the_question}</i>
					</tr>
					<tr>
					<br><input type='radio' value='A' name='question{$count}'> A.&nbsp;&nbsp; $option_a
					<br><input type='radio' value='B' name='question{$count}'> B.&nbsp;&nbsp; $option_b
					<br><input type='radio' value='C' name='question{$count}'> C.&nbsp;&nbsp; $option_c
					<br><input type='radio' value='D' name='question{$count}'> D.&nbsp;&nbsp; $option_d
					<br>
					</tr>												
					<hr>
					";
					$count++;
					$coorect_answers[] = $correct_answer;
					
				}
			 ?>
			 <tr>
			 	<input type="submit" name="markresults" value="Submit Exam">
			 </tr>
		</table>	
		</form> 

		<?php 
			if(isset($_POST['markresults'])){
				$your_results = array();
				$score = array();
				for($x=1; $x<$count; $x++){
					$index = "question{$x}";
					$your_results[] = $_POST[$index];
				}

			for($d = 0; $d<count($your_results); $d++){
				if($your_results[$d]==$coorect_answers[$d]){
					$score[] = $d; 
				}

			}

			$result = count($score)/count($coorect_answers);

			$result = sprintf("%.2f",$result);
			echo $result = $result*100;
			$link_string = "index.php?result=$result";
			header("Location:$link_string");

			}

		 ?>