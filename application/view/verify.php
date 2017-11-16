<div class="content-wrapper">
	<section class="content-header">
		<h1>Verify Ticket
			<small></small>
		</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<?php if(isset($status)){?>
				<?php if($status == 2){?>
				<div class="alert alert-warning alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Error!</h4>
					Ticket not Sold!
				</div>
				<?php }elseif($status == 1){?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Error!</h4>
					Invalid Ticket Number!
				</div>
				<?php }elseif($status == 3){?>
				<div class="box" style="border-top: none">
					<div class="box-header with-border">
						<h3 class="box-title">Ticket Details</h3>
						<div class="box-tools">
							<a href="<?php echo URL;?>ticket/verify"><button class="btn btn-primary">Go Back</button></span></a>
						</div>
					</div>
					<div class="box-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2">Name</label>
								<div class="col-sm-10">
									<?php echo $info->name;?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2">Age</label>
								<div class="col-sm-10">
									<?php echo date_diff(date_create($info->dob), date_create('today'))->y;?> years
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2">School</label>
								<div class="col-sm-10">
									<?php echo $info->school;?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2">CNP</label>
								<div class="col-sm-10">
									<?php echo $info->cnp;?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2">Numar Bilet</label>
								<div class="col-sm-10">
									<?php echo $info->id;?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2">Status</label>
								<div class="col-sm-10">
									<?php if($info->checkin){
										echo "Checked In";
									}else{
										echo "Not Checked In";
									}?>
								</div>
							</div>
						</form>
						<form method="POST" action="" class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2">Update Status</label>
								<div class="col-sm-10">
									<input type="hidden" name="ticket" value="<?php echo $info->id;?>">
									<?php if($info->checkin){?>
									<button type="submit" class="btn btn-danger btn-xs" name="checkout">
										Check out
									</button>
									<?php }else{?>
									<button type="submit" class="btn btn-success btn-xs" name="checkin">
										Check in
									</button>
									<?php }?>
								</div>
							</div>
						</form>
						<hr>
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-2">Ticket Seller</label>
								<div class="col-sm-10">
									<?php echo $this->model->fetchUser($info->user_id)->name;?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2">Ticket Sold on</label>
								<div class="col-sm-10">
									<?php echo date("d M Y H:i",strtotime($info->time));?>
								</div>
							</div>
						</form>
					</div>
				</div>
				<?php }}?>

				<div class="box" style="border-top: none">
					<!-- <div class="box-header with-border">
						<h3 class="box-title">numar bilet</h3>
					</div> -->
					<div class="box-body">
						<form method="GET" action="">
							<div class="form-group">
								<label for="exampleInputEmail1">Enter ticket number:</label>
								<input type="number" placeholder="Ticket Number" class="form-control" name="ticket" required>
								
								<!-- <p class="help-block">Click icon to open camera.</p> -->
							</div>

							<div class="box-footer">
								<button type="submit" class="btn btn-primary pull-right" name="verify">Verify</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
