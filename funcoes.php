<?php
	function message($texto, $tipo){
		echo "<div class='alert alert-$tipo' role='alert'>
				$texto
			</div>";
	}

	function inverte_data($data){
		$dt = explode('-', $data);
		$escreve = $dt[2]."/".$dt[1]."/".$dt[0];
		return $escreve;
	}
?>