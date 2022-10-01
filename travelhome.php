<?php 

require_once "models/db_config.php";
$query="SELECT * from t_activity ";
$result = get($query);

?>

<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
		<div class="text-center">
			<h1 class="header">Travel Agencies Pannel</h1>
			>
		</div>
		
		<div class="text-center">
			
			<a href="travelhome.php" class="btn btn-info">Home</a>
			<a href="package&place.php" class="btn btn-primary">Package & Place</a>
			<a href="locationinfo.php" class="btn btn-warning">Location Info</a>
			<a href="bookinginfo.php" class="btn btn-success">Booking Info</a>
			<a href="clientrequest.php" class="btn btn-primary">Client Request</a>
			<a href="index.php" class="btn btn-danger">Logout</a>		
		</div>
	 
	<div class="center">
	<h3 class="text">Activity Data</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Name</th>
			<th>Service</th>
			<th>Email</th>
			<th>Date</th>
			<th>Status</th>
		</thead>

		<?php 
		foreach($result as $row):?>
		<tbody>
			<td><?php echo $row["sl"];?></td>
			<td><?php echo $row["name"];?></td>
			<td><?php echo $row["service"];?></td>
			<td><?php echo $row["email"];?></td>
			<td><?php echo $row["date"];?></td>
			<td><?php echo $row["status"];?></td>
            <td><a href="Admin_UpdateAgency.php?id=<?php echo $row['sl'];?>" class="btn btn-warning">Accept</a></td>
	        <td><a href="controllers/Admin_AgencyDeleteController.php?id=<?php echo $row['sl'];?>" class="btn btn-danger">Decline</a></td>
		</tbody>
		<?php endforeach;?>
	</table>
		</tbody>
	</table>
</div>

<?php include 'travel_footer.php' ?>