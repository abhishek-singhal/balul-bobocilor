<script src="<?php echo URL;?>js/qrcode.js"></script>
<link rel="stylesheet" href="<?php echo URL;?>css/qrcode.css">
<div class="content-wrapper">
	<section class="content-header">
		<h1>Refund Ticket
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
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Success!</h4>
					Ticket Refunded!
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
									<input type="file" accept="image/*" capture="environment" onclick="openQRCamera(this);">
								</label>
								<p class="help-block">Click icon to open camera.</p>
							</div>

							<div class="box-footer">
								<button type="submit" class="btn btn-primary pull-right" name="refund">Refund</button>
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