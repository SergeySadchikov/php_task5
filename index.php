<?php header("Content-Type: text/html; charset=utf-8");
$json = file_get_contents(__DIR__ . "/contacts.json");
$data = json_decode($json, true);
?>

<!DOCTYPE html>
<html>
<head>
	<title>contacts</title>
</head>
<body>
	<table cellspacing="2" border="1" cellpadding="5" width="600">
		<tr>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Адрес</th>
			<th>Почтовый индекс</th>	
			<th>Телефон</th>
		</tr>
		
		<?php foreach ($data as $item) { ?>
			<tr>
				<td><?php echo $item['firstName'] ?></td>
				<td><?php echo $item['lastName'] ?></td>
				<td><?php echo $item['address'] ?></td>
				<td><?php echo $item['postalCode'] ?></td>
				<td><?php echo $item['phoneNumber'] ?></td>
			</tr>
		<?php } ?>

	</table>
</body>
</html>