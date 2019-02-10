<?php include "des_includes/header.php"; ?>
<?php include "des_includes/navbar.php"; ?>
<?php include "des_includes/sidebar.php"; ?>
<?php include "fun/connect.php"; ?>

	
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
	


	<?php
	if(!$_GET['do']){
		include "includes/view_admin.php";
	}elseif($_GET['do']=="add"){
		include "includes/add_admin.php";
	}elseif($_GET['do']=="edit"){
		include "includes/edit_admin.php";
	}
	?>
		
<?php include "des_includes/footer.php"; ?>
		
		
		
		
		
		
		
	