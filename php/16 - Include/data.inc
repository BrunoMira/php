<?php
	function data(){
		$dia = date("d");
		$mes = date("m");
		$ano = date("Y"); // y retorna os 2 últimos digitos, Y retorna os 4
		$meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
		
		$hora = date("H");
		$min = date("i");
		$sec = date("s");
		
		echo $dia." de ". $meses[$mes-1]. " de ". $ano. " ";
		echo $hora." : ". $min. " : ". $sec;
	}	
?>
