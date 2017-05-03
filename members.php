<?php
	echo("Coming soon.");
	exit();
	$pdo = new PDO('mysql:host=sql11.freemysqlhosting.net;dbname=sql11165022', 'sql11165022', 'Qh36tkyfr1');
    echo("<li><h1>Mitglieder</h1></li>");
	$sql = "SELECT rang, name FROM members";
	foreach ($pdo->query($sql) as $row) {
        echo("<li><p>");
        echo("[");
		echo($row['rang']);
		echo("] ");
		echo($row['name']);
        echo("</p></li>");
	}
?>