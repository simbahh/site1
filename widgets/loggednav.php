<?php 
if(!isset($_SESSION['username'])){
	header("Location:index.php");
}
$pro_pic = $logged_propic;
$pro_pic = "<img class='propicresize' src='$pro_pic' />";

 ?>
<div class='container-fluid navbarclass nav navbar-collapse'>
	<div class="col-md-4">
		<a href="" class='the_link_to_header_letter'><span class='header_letter'><span class="glyphicon glyphicon-pencil"></span>&nbsp;VID
		</span></a>
	</div>
	<div class="col-md-4">
		<span class='other_titles'><?php echo $pro_pic; ?>&nbsp;<?php echo $logged_fname.' '.$logged_lname; ?></span>
	</div>
	<div class="col-md-4">
		<a href="logout.php" class='the_link_to_header_letter'><span class='other_titles'><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</span></a>		
	</div>
	<div class="col-md-2">
		
	</div>
</div>