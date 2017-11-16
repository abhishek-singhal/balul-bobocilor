<div class="content-wrapper">
	<section class="content-header">
		<h1>Sell Tickets
			<small></small>
		</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<?php if(isset($status)){?>
				<?php if($status == 4){?>
				<div class="alert alert-warning alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Error!</h4>
					Fill the other field
				</div>
				<?php }elseif($status == 3){?>
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Success!</h4>
					Ticket Sold
				</div>
				<?php }elseif($status == 2){?>
				<div class="alert alert-warning alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Error!</h4>
					Ticket already sold.
				</div>
				<?php }else{?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Error!</h4>
					Ticket number invalid
				</div>
				<?php }}?>
				<div class="box" style="border-top: none">
					<div class="box-header with-border">
						<h3 class="box-title">Enter details</h3>
					</div>
					<div class="box-body">
						<form method="POST" action="">
							<div class="form-group">
								<label for="exampleInputEmail1">Enter Ticket Number</label>
								<input type="number" placeholder="Ticket Number" class="form-control" name="ticket" required>
								<!-- <p class="help-block">Click icon to open camera.</p> -->
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Name:</label>
								<input type="text" class="form-control" placeholder="Introdu Numele" name="name" required>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">CNP:</label>
								<input type="number" max="9999999999999" class="form-control" placeholder="Introdu CNP" name="cnp" required>
							</div>

							<div class="form-group">
								<label>DOB:</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="date" class="form-control pull-right" name="dob" required>
								</div>
							</div>

							<div class="form-group">
								<label>School:</label>
								<select class="form-control" name="school_name">
									<?php foreach($schools as $school){?>
									<option value="<?php echo $school->school;?>"><?php echo $school->school;?></option>
									<?php }?>
									<option value="">Other</option>
								</select>
								<input type="text" class="form-control" placeholder="Enter school if chosen other" name="school2">
							</div>

							<div class="box-footer">
								<button type="submit" class="btn btn-primary pull-right" name="sell">Sell</button>
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
						Tickets sold by you: <?php echo $this->model->ticketsSold2($_SESSION['user_id']);?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
