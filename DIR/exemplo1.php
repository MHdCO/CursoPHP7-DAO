<?php 

$name = "images";

if (!is_dir($name)){

	mkdir($name);

	echo "Diretorio $name criado com sucesso!";

}else{

	rmdir($name);
	echo "O diretorio ja existe : $name, foi removido.";

}

 ?>