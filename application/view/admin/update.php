<div class="content-wrapper">
	<section class="content-header">
		<h1>Update Ranks
			<small></small>
		</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box" style="border-top : none">
					<div class="box-header with-border">
						<h3 class="box-title">Current Team</h3>
					</div>
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-bordered">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Username</th>
								<th>Rank</th>
								<th>Choose New Rank</th>
								<th></th>
								<th></th>
							</tr>
							<?php foreach($members as $member){?>
							<tr>
								<td><?php echo $member->id;?></td>
								<td><?php echo $member->name;?></td>
								<td><?php echo $member->username;?></td>
								<td><?php echo $member->role;?></td>
								<form method="POST" action="">
									<td>
										<input type="hidden" name="id" value="<?php echo $member->id;?>">
										<div class="form-group">
											<select class="form-control" name="new_rank">
												<option value="">Choose New Role</option>
												<option value="0">Cannot Login</option>
												<option value="1">Can See Information</option>
												<option value="2">Ticket Seller</option>
												<option value="3">Admin</option>
											</select>
										</div>
									</td>
									<td>
										<button class="btn btn-primary" type="submit" name="update">Update Rank</button>
									</td>
								</form>
								<td><a href="<?php echo URL;?>admin/edit/<?php echo $member->id;?>"><span class="label label-warning">Edit</span></a></td>
							</tr>
							<?php }?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>