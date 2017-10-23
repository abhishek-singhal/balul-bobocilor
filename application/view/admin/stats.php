<link rel="stylesheet" href="<?php echo URL;?>lte/plugins/datatables/dataTables.bootstrap.css">
<div class="content-wrapper">
	<section class="content-header">
		<h1>Statistics
			<small></small>
		</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua">
						<i class="fa fa-cog-gear"></i>
					</span>
					<div class="info-box-content">
						<span class="info-box-text">Total Tickets Sold</span>
						<span class="info-box-number"><?php echo $this->model->ticketsSold();?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua">
						<i class="fa fa-line-chart"></i>
					</span>
					<div class="info-box-content">
						<span class="info-box-text">Before Event</span>
						<span class="info-box-number"><?php echo $b = $this->model->ticketSoldBefore($event_date);?></span><?php echo $b*20;?> lei
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua">
						<i class="fa fa-cog-gear"></i>
					</span>
					<div class="info-box-content">
						<span class="info-box-text">During Event</span>
						<span class="info-box-number"><?php echo $a = $this->model->ticketSoldAfter($event_date);?></span><?php echo $a*30;?> lei
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua">
						<i class="fa fa-cog-gear"></i>
					</span>
					<div class="info-box-content">
						<span class="info-box-text">Revenue</span>
						<span class="info-box-number"><?php echo ($a*30)+($b*20);?> lei</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="box" style="border-top: none">
					<div class="box-header with-border">
						<h3 class="box-title">Stats</h3>
					</div>
					<div class="box-body">
						<table id="table2" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Role</th>
									<th>Total Tickets Sold</th>
									<th>Tickets Sold before Event</th>
									<th>Tickets Sold during Event</th>
									<th>Total Revenue</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($members as $member){?>
								<tr>
									<td><?php echo $member->id;?></td>
									<td><?php echo $member->name;?></td>
									<td><?php echo $member->role;?></td>
									<td><?php echo $this->model->ticketsSold2($member->id);?></td>
									<td><?php echo $before = $this->model->ticketSaleBefore($member->id, $event_date);?>
										<div class="pull-right"><?php echo $before*20;?> lei</div>
									</td>
									<td><?php echo $after = $this->model->ticketSaleAfter($member->id, $event_date);?>
										<div class="pull-right"><?php echo $after*30;?> lei</div>
									</td>
									<td><?php echo ($before*20) + ($after*30);?> lei</td>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>