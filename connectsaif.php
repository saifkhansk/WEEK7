<?php

	$username='sk2437';
	$password='headroom5';
	$hostname='sql2.njit.edu';


	$dsn='mysql:host=sql2.njit.edu;dbname=sk2437';
	$username='sk2437';
	$password='headroom5';

echo 'Connected Successfully';

	try{
	   $db=new PDO($dsn, $username, $password);
	} catch (PDOException $error) {
            echo '<h3>DB Error </h3>';
	    echo $error->getMessage();
	    exit();
	} catch (PDOException $error) {
            echo '<h3>DB Error </h3>';
	    echo $error->getMessage();
	    exit();
	}

	$query='SELECT * FROM accounts WHERE id < :id';
	$statement= $db->prepare($query);
	$statement->bindvalue(':id', 6);
	$statement->execute();
	$accounts = $statement->fetchAll();
echo "</br> ";
	$counts=count($accounts);
	echo "Results: $counts";
?>
<table border="1">
<th> ID</th>
<th> EMAIL </th>
<?php foreach ($accounts as $account) : ?>
<tr> 
	<td><?php echo $account ['id']; ?></td>
	<td><?php echo $account ['email']; ?></td>
</tr>

<?php endforeach; ?>
</table>



