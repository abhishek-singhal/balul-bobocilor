<script src="<?php echo URL;?>js/qrcode.js"></script>
<link rel="stylesheet" href="<?php echo URL;?>css/qrcode.css">
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
					Ticket Not Sold!
				</div>
				<?php }elseif($status == 1){?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Error!</h4>
					Invalid Ticket!
				</div>
				<?php }elseif($status == 3){?>
				<div class="box" style="border-top: none">
					<div class="box-header with-border">
						<h3 class="box-title">Ticket Details</h3>
						<div class="box-tools">
							<a href="<?php echo URL;?>verify/ticket"><button class="btn btn-primary">Go Back</button></span></a>
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
									<?php echo date_diff(date_create($info->dob), date_create('today'))->y;?> Years
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
								<label class="col-sm-2">Ticket</label>
								<div class="col-sm-10">
									<?php echo $info->id;?>
								</div>
							</div>
							<hr>
							<div class="form-group">
								<label class="col-sm-2">Sold By</label>
								<div class="col-sm-10">
									<?php echo $this->model->fetchUser($info->user_id)->name;?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2">Sold On</label>
								<div class="col-sm-10">
									<?php echo date("d M Y H:i",strtotime($info->time));?>
								</div>
							</div>
						</form>
					</div>
				</div>
				<?php }}?>

				
				<div class="box" style="border-top: none">
					<div class="box-header with-border">
						<h3 class="box-title">Enter Ticket Number</h3>
					</div>
					<div class="box-body">
						<form method="POST" action="">
							<div class="form-group">
								<label for="exampleInputEmail1">Scan QR code or enter Ticket Code:</label><br>
								<input type="number" placeholder="Enter Number" class="qrcode-text" name="ticket">
								<label class="qrcode-text-btn">
									<input type="file" accept="image/*" capture="environment" onclick="openQRCamera(this);" onchange="openQRCamera(this)">
								</label>
								<p class="help-block">Click icon to open camera.</p>
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

<script>
	function openQRCamera(node) {
		var reader = new FileReader();
		reader.onload = function() {
			node.value = "";
			qrcode.callback = function(res) {
				if(res instanceof Error) {
					alert("No QR code found. Please make sure the QR code is within the camera's frame and try again.");
				} else {
					node.parentNode.previousElementSibling.value = res;
				}
			};
			qrcode.decode(reader.result);
		};
		reader.readAsDataURL(node.files[0]);
	}

	// function showQRIntro() {
	// 	return confirm("Use your camera to take a picture of a QR code.");
	// }
</script>