<?php $title = "Results"; 
require_once('../functions-include/databaseConnection.php');
$sql = "SELECT * FROM votes";
$result = mysqli_query($conn, $sql);


if(isset($_GET['voteid'])){
	$voteID = $_GET['voteid'];
	$delete_query = "DELETE FROM results WHERE voteId = $voteID";
	$delete = mysqli_query($conn,$delete_query);
	if($delete){
		header('Location: result.php');
	}
	
}
?>

<?php include_once 'layout/header.php'; ?>


<table border="1">
	<thead>
	<th>Vote ID</th>
	<th>Election ID</th>
	<th>User ID</th>
	<th>Candidates ID</th>
	<th>Vote Time</th>
</thead>
<tbody>
		<?php 
	if(mysqli_num_rows($result) > 0){

		while($row = mysqli_fetch_assoc($result)){
			$vote = $row['voteId'];
			$del = "result.php?voteid=$vote";
		?>
<tr>
		<td><?php  echo $row['vote_id'];?></td>
		<td><?php echo $row['voter_id']; ?></td>
		<td><?php echo $row['candidate_id']; ?> </td>
		<td><?php  echo $row['election_id'];?> </td>
		<td> <?php  echo $row['timestamp'];?></td>
		<td><a href="<?php  echo $del; ?>" >Delete</a> </td>
</tr>
	<?php
	 }

	  }?>

	</tbody>
</table>







<?php include_once 'layout/footer.php'; ?>
