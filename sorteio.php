<?php

$fone = filter_input(INPUT_POST, 'fone', FILTER_UNSAFE_RAW);
$nome = filter_input(INPUT_POST, 'nome', FILTER_UNSAFE_RAW);

if(!isset($nome)){
	echo "O Nome deve ser Preenchido";
}
elseif(empty($nome)){
	echo "O Nome deve ser preenchido.";
}
elseif (strlen($nome)<3){
	echo "NOME INVALIDO.";
}
elseif (strlen($fone)<11){
	echo "FONE INVALIDO.";
}

elseif (strlen($nome) >45){
	echo "NOME INVALIDO";
} elseif (strlen($fone)>11){

	echo "Telefone Errado ou INVALIDO";
}

else { 
        
    require_once('banco.php');

	conexao();

	$sql="insert into concorrentes (nome, tel ) values ('$nome','$fone')";
	$resultado=execute($sql);
} 


if ($resultado){

	echo " Parabens você está concorrendo a um BICICRETA ";
	
	}