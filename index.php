<?php require_once('admin/scripts/config.php');
if(isset($_GET['filter'])){
	$tbl = 'tbl_movies';
	$tbl_2 = 'tbl_genre';
	$tbl_3 = 'tbl_mov_genre';
	$col = 'movies_id';
	$col_2 = 'genre_id';
	$col_3 = 'genre_name';
	$filter = $_GET['filter'];
	$results = filterResults($tbl,$tbl_2,$tbl_3,$col,$col_2,$col_3,$filter);
}else{
	$results = getAll('tbl_movies');
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Movie Review</title>
</head>
<body>
	<?php include('templates/header.php');?>

	<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
		<div>
			<h2><?php echo $row['movies_title'];?></h2>
			<p><?php echo $row['movies_year'];?></p>
			<img src="images/<?php echo $row['movies_cover'];?>" alt="">
			<a href="details.php?id=<?php echo $row['movies_id'];?>">See Details</a>
		</div>
	<?php endwhile;?>
	<?php include('templates/footer.php');?>
</body>
</html>