<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Database</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<section class="wrap">
        <div class="header">
            <h1>Learn Database Design</h1>
        </div>
        <div class="footer">

        </div>
    </section>
	
	
	<?php 
	include "Database.php";
	include "config.php";
	$db = new Database();
	$query="select * from tbl_user";
	$read=$db->select($query);
	
	
	
	?>
	<?php if($read){?>
	<?php while($row=$read->fetch_assoc()){?>
	<p><?php echo $row['id']; ?></p>
	<p><?php echo $row['name']; ?></p>
	<p><?php echo $row['email']; ?></p>
	<?php }?>
	<?php }else{ ?>
	<h1>Data is not available </h1>
	<?php }?>
	
</body>
</html>