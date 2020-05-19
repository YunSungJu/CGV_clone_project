<?php
	try{
		$db = new PDO("mysql:dbname=cgv; host=localhost; port=3306", "root", "a12345");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$ID = $_GET['ID'];
		$PW = $_GET['PW'];

		$rows = $db->query("SELECT * FROM logintable");
        $result = $rows->fetchAll();

		for($i = 0; $i<count($result); $i++){
        	if($result[$i]["ID"] == $ID and $result[$i]["PW"] == $PW){
        		header("Location: index.html");
        	}

        }


	} catch (PDOException $ex) {
        ?>
        <p>Sorry, a database error occurred. Please try again later.</p>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
    }
    exit;
?>