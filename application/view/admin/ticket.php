<div class="content-wrapper">
	<section class="content-header">
		<h1>Generate Tickets
			<small></small>
		</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box" style="border-top: none">
					<div class="box-header with-border">
						<h3 class="box-title">Enter Details</h3>
					</div>
					<div class="box-body">
						<form method="POST" action="">
							<div class="form-group">
								<label for="exampleInputEmail1">Number of Tickets:</label>
								<input type="number" class="form-control" placeholder="Enter number" name="number" required>
							</div>

							<div class="box-footer">
								<button type="submit" class="btn btn-primary pull-right" name="generate">Generate Tickets</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box" style="border-top: none">
					<div class="box-header with-border">
						<h3 class="box-title">Stats</h3>
					</div>
					<div class="box-body">
						Total Tickets : <?php echo $total_tickets;?><br>
						Sold Tickets : <?php echo $sold_tickets;?><br>
						Unsold Tickets : <?php echo $unsold_tickets;?>
					</div>
				</div>
				<?php if(isset($status)){?>
				<?php if($status == 1){?>
				<div class="alert alert-warning alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-alert"></i> Error!</h4>
					From and To are Out of Bounds.
				</div>
				<?php }}?>
				<!--
				<div class="box" style="border-top: none">
					<div class="box-header with-border">
						<h3 class="box-title">Download QRCODE Images</h3>
					</div>
					<div class="box-body">
						<form method="POST" action="">
							<div class="form-group">
								<label for="exampleInputEmail1">FROM</label>
								<input type="number" class="form-control" placeholder="Enter number" name="from" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">TO</label>
								<input type="number" class="form-control" placeholder="Enter number" name="to" required>
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary pull-right" name="download">Download</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</form>
					</div>
				</div>
				-->
			</div>
		</div>
	</section>
</div>