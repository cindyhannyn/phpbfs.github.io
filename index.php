<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="gambar.png">
	<center><h1 style="color: black">Algoritma BFS Mengunakan PHP </h1></center>
	<center><img src="algoritma.png"></center>
	
	<center><h1>Hasil dari simpul 1 ke 0</h1></center>
	<?php
		error_reporting(E_ERROR | E_PARSE);
		include "Dijkstra.php";

		// graph array
		$graph[0][0] = '1->10';
		$graph[0][1] = '2->11';
		$graph[0][2] = '3->40';

		$graph[1][0] = '0->10';
		$graph[1][1] = '2->55';
		$graph[1][2] = '4->20';

		$graph[2][0] = '0->11';
		$graph[2][1] = '1->55';
		$graph[2][2] = '4->54';

		$graph[3][0] = '4->89';
		$graph[3][1] = '2->89';

		$graph[4][0] = '2->90';
		$graph[4][1] = '3->89';


		$algo = new Dijkstra();
		$json = $algo->jalurTerpendek($graph, 1,0 );
		$array= json_decode($json, true);

		if($array['status'] == 'success'){
			echo "<center><h2 style='color:black'>Jalur terpendek : " . $array['content'].'</h2></center>';
		}else{
			echo "<h2 style='color:black'>Error : " . $array['teks'].'</h2>';
		}
	?>
</body>
</html>
