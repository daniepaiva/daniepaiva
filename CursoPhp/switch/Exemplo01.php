<?php

$diaDaSemana = date('w');

switch ($diaDaSemana) {
	case 0:
		echo 'domingo';
		break;
	case 1:
		echo 'segunda';
		break;
	
	default:
		echo 'data invalida';
		break;
}


?> 