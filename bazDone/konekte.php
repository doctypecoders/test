<?php
define("USER","root");
define("DB_NAME","ebook");
define("PASS","");
define("HOST","localhost");
	try{
		$bazKonekte=new PDO("mysql:host=".HOST.";dbname=".DB_NAME.";charset=utf8;", USER, PASS);
		$bazKonekte->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "
		<pre>
			<h4>GEN YON Error NAN BAZ DE DONE A, tanpri reeseye anko :( !!!</h4>
		</pre>
		</br>
		".$e;
	}
?>