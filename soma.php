<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title> soma </title>
	</head>
	<body>
		<?php
			if(empty($_POST))
			{
				echo'<form action="soma.php" method="POST">
			<input type="number" name="n1"/>
			+
			<input type="number" name="n2"/>
			=
			
			<input type="text" name="resultado" value=" " readonly="readonly"/>
			<p>
						<input type="submit" value="somar"/>
						
					</p>
		</form>';
			}
			else
			{
				$n1=$_POST["n1"];
				$n2=$_POST["n2"];
				$r=$n1+$n2;
				
				echo'<form action="soma.php" method="POST">
					<input type="number" name="n1" value="'.$n1.'"/>
					+
					<input type="number" name="n2" value="'.$n2.'"/>
					=
					<input type="text" name="resultado" value="'.$r.'" readonly="readonly"/>
					<p>
						<input type="submit" value="somar"/>
						
					</p>
				</form>';
			}
		?>
		
		
	</body>
</html>
