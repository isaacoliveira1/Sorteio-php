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

			<?php
				$id_sort = $_GET['id_sort'];
			?>

			<h2>Cartelas e resultados do sorteio : <?php echo  $id_sort; ?></h2>

			<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>Cartela  </th><th>Numeros</th>
				</tr>	
</thead>
				<?php

					$con = new PDO("mysql:host=localhost;dbname=sorteio", "root", "1234");

					$rs = $con->query("SELECT id_cartela, id_sorteio, valores_cartela FROM cartelas_bingo WHERE id_sorteio = ".$id_sort);
					while($row = $rs->fetch(PDO::FETCH_OBJ)){
						$Id_cartela = $row->id_cartela;
						$Numeros_cartela = $row->valores_cartela;
						?>

						<tr>
							<td><?php echo $Id_cartela; ?> </td><td><?php echo $Numeros_cartela; ?></td>
						</tr>	


						<?php

					}



				?>

			</table>


			<br>

			<h2>Numeros sorteados no sorteio : <?php echo  $id_sort; ?></h2>

			<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>Numeros sorteados</th>
				</tr>	
				</thead>
				<?php

					$rst = $con->query("SELECT DISTINCT numeros_sorteados FROM numeros_sorteados WHERE id_sorteio = ".$id_sort);
					while($rowe = $rst->fetch(PDO::FETCH_OBJ)){
						$Numeros_sort = $rowe->numeros_sorteados;
						?>

						<tr>
							<td> </td><td><?php echo $Numeros_sort; ?></td>
						</tr>	


						<?php

					}



				?>

			</table>


			<p><a href="index.php" class="btn btn-success" >Voltar para sorteios</a></p>

		</div>


	</body>


</html>