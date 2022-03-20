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
	
	<?php 
	include "Database.php";
	include "config.php";
	$db = new Database();
	$query="select * from tbl_user";
	$read=$db->select($query);
	
	?>
	<?php if($read){?>
	<table width="500" border="2" cellpadding="5">
		<caption>Student table</caption>
			<?php while($row=$read->fetch_assoc()){?>
				<tr>
					<td><p><?php echo $row['name']; ?></p></td>
					<td><p><?php echo $row['email']; ?></p></td>
					<td><p><?php echo $row['skil']; ?></p></td>
				</tr>
			<?php }?>
	</table>
	<?php }else{ ?>
	<h1>Data is not available </h1>
	<?php }?>

</body>
</html>