<div class="content-wrapper">
	<section class="content-header">
		<h1>Dashboard
			<small></small>
		</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-3">
				<div class="box" style="border-top: none">
					<div class="box-header with-border">
						<h3 class="box-title">Stats</h3>
					</div>
					<div class="box-body">
						Total Tickets : <?php echo $total_tickets;?><br>
						Sold Tickets : <?php echo $sold_tickets;?><br>
						Goal : 400&emsp;&emsp;(<?php echo 400-$sold_tickets;?> left)<br>
						Unsold Tickets : <?php echo $unsold_tickets;?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>