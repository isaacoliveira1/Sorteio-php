<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Sorteio - Resultados</title>
		

		<link href="css/960.min.css" rel="stylesheet" type="text/css" />
		<link href="css/sorteio.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/sorteio.js"></script>

	</head>


	<body>


		<div class="container_12">

			<h2>Sorteios realizados</h2>


			<table class='table'>

				<tr>
					<th>Sorteio </td>
					<th>Visualizar</td>
				</tr>	

				<?php

					$con = new PDO("mysql:host=localhost;dbname=sorteio", "root", "1234");

					$rs = $con->query("SELECT id_sorteio FROM sorteio");
					while($row = $rs->fetch(PDO::FETCH_OBJ)){
						$id_sorteio = $row->id_sorteio;

						?>

						<tr>
							<td><?php echo $id_sorteio; ?> </td>
							<td> <a href="resultado_sorteio.php?id_sort=<?php echo $id_sorteio; ?>" class="btn btn-info"> Visualizar </a></td>
						</tr>	


						<?php

					}



				?>

			</table>


			<p><a href="index.php" class="btn btn-success">Voltar para sorteios</a></p>
		</div>


	</body>




</html>