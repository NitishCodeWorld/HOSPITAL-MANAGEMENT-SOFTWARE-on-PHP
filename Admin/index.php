<?php
	session_start();
	if(isset($_SESSION['user_id'])){

	include 'include/header.php';
	include 'include/sidebar.php';
	include 'include/top-header.php';

?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="dashboard-title">
					<span><i class="fas fa-tachometer-alt"></i> Dashboard</span><hr>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-3">
				<div class="card1">
					<div class="card1-top">
						<div class="card1-left">
							<h6 class="text-white">Today's Appointment</h6>
							<span class="text-white">555</span>
						</div>
						<div class="card1-right">
							<i class="fas fa-calendar-check"></i>
						</div>
					</div>
					<div class="card1-bottom">
						<a href="javascript:void(0)">Show All <span class="fas fa-arrow-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3">
				<div class="card1">
					<div class="card1-top">
						<div class="card1-left">
							<h6 class="text-white">Total Doctor</h6>
							<span class="text-white">10</span>
						</div>
						<div class="card1-right">
							<i class="fas fa-user-md"></i>
						</div>
					</div>
					<div class="card1-bottom">
						<a href="javascript:void(0)">Show All <span class="fas fa-arrow-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3">
				<div class="card1">
					<div class="card1-top">
						<div class="card1-left">
							<h6 class="text-white">Total Nurse</h6>
							<span class="text-white">50</span>
						</div>
						<div class="card1-right">
							<i class="fas fa-user-nurse"></i>
						</div>
					</div>
					<div class="card1-bottom">
						<a href="javascript:void(0)">Show All <span class="fas fa-arrow-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3">
				<div class="card1">
					<div class="card1-top">
						<div class="card1-left">
							<h6 class="text-white">Total Patient</h6>
							<span class="text-white">1000</span>
						</div>
						<div class="card1-right">
							<i class="fas fa-user-injured"></i> 
						</div>
					</div>
					<div class="card1-bottom">
						<a href="javascript:void(0)">Show All <span class="fas fa-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-12 col-md-3">
				<div class="card1">
					<div class="card1-top">
						<div class="card1-left">
							<h6 class="text-white">Total Bed</h6>
							<span class="text-white">1500</span>
						</div>
						<div class="card1-right">
							<i class="fas fa-bed"></i>
						</div>
					</div>
					<div class="card1-bottom">
						<a href="javascript:void(0)">Show All <span class="fas fa-arrow-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3">
				<div class="card1">
					<div class="card1-top">
						<div class="card1-left">
							<h6 class="text-white">Total Bed Available</h6>
							<span class="text-white">10</span>
						</div>
						<div class="card1-right">
							<i class="fas fa-bed"></i>
						</div>
					</div>
					<div class="card1-bottom">
						<a href="javascript:void(0)">Show All <span class="fas fa-arrow-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3">
				<div class="card1">
					<div class="card1-top">
						<div class="card1-left">
							<h6 class="text-white">Total Ambulance</h6>
							<span class="text-white">50</span>
						</div>
						<div class="card1-right">
							<i class="fas fa-bus"></i>
						</div>
					</div>
					<div class="card1-bottom">
						<a href="javascript:void(0)">Show All <span class="fas fa-arrow-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3">
				<div class="card1">
					<div class="card1-top">
						<div class="card1-left">
							<h6 class="text-white">Total Staff</h6>
							<span class="text-white">1000</span>
						</div>
						<div class="card1-right">
							<i class="fas fa-users"></i> 
						</div>
					</div>
					<div class="card1-bottom">
						<a href="javascript:void(0)">Show All <span class="fas fa-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-12">
				<div class="chart-area">
					<div id="chartContainer" style="height: 300px; width: 100%;"></div>
				</div>
			</div>
		</div>
	</div>
	
<?php
	include 'include/footer.php';
	
	}else{
		header("Location: loginPage.php");
	}
	
?>