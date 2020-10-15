<?php
	$db_connectiontocatalog=pg_connect('host=localhost dbname=catalog user=postgres password=admin');
	$db_connectiontoadmins=pg_connect('host=localhost dbname=adminuser user=postgres password=admin');
?>