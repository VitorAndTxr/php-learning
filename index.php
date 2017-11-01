<?php

require 'function.php';
require 'index.view.php';

if(majority(24)){
	echo 'Vc pode entrar';
}else{
	echo 'Vc n pode entrar';
}


?>