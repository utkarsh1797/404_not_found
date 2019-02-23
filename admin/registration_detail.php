<?php include 'includes/header.php'; ?>

<style type="text/css">
	table, th, td {
  border: 1px solid black;
}
</style>
<!-- Dashboard Container -->
<div class="dashboard-container">

	<?php include 'includes/sidebar.php'; ?>
	

	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>User Asked Queries</h3>

				
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> User Queries Solution Form</h3>
						</div>

						<div class="content with-padding padding-bottom-10">

							<!-- Page Content
							================================================== -->
							<div class="container">
								<div class="row">
									<!-- Content -->
									<div class="col-xl-12 col-lg-12 content-right-offset">
										<div class="single-page-section">
											<h2>Email id of Person contacted are as follows</h2>
											<table class="table table-bordered">
												<thead>
												<tr>
													<th>SNo.</th>
													<th>Email Id</th>
												</tr>
												</thead>
												<tbody>
													<?php 
													include 'connection.php';

													$query="SELECT * FROM register";
													$result=mysqli_query($conn,$query);
													$x=1;
													while ( $row= mysqli_fetch_assoc($result)) {
														?>
													<tr>
														<td><?php echo $x; $x=$x+1; ?></td>
														<td><?php echo $row['emailid']; ?></td>
													</tr>
														<?php 
													}
													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="col-xl-12">
					<a href="#" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Post your Solution</a>
				</div> -->

			</div>
			<!-- Row / End -->


<?php include 'includes/footer.php'; ?>