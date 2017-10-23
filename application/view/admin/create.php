<div class="content-wrapper">
	<section class="content-header">
		<h1>New Team Members
			<small></small>
		</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<?php if(isset($status)){?>
				<?php if($status == 2){?>
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Success!</h4>
					Team Member Account created successfully.
				</div>
				<?php }else{?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Error!</h4>
					Unsuccessful!
				</div>
				<?php }}?>
				<div class="box" style="border-top: none">
					<div class="box-header with-border">
						<h3 class="box-title">Enter New Member Detals</h3>
					</div>
					<div class="box-body">
						<form method="POST" action="">
							<div class="form-group">
								<label for="exampleInputEmail1">Name</label>

								<input type="text" class="form-control" placeholder="Enter Full Name" name="name" required>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>

								<input type="text" class="form-control" placeholder="Enter Username" name="username" required>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Password</label>

								<input type="text" class="form-control" placeholder="Enter Password" name="password" required>
								<p class="help-block">Give this password to your teammate!</p>
							</div>

							<div class="form-group">
								<label>Permissions</label>
								<select class="form-control" name="rank">
									<option value="1">Can See Information</option>
									<option value="2">Ticket Seller</option>
									<option value="3">Admin</option>
									<option value="0">Cannot Login</option>
								</select>
							</div>

							<div class="box-footer">
								<button type="submit" class="btn btn-primary pull-right" name="create">Create</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
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
							</tr>
							<?php foreach($members as $member){?>
							<tr>
								<td><?php echo $member->id;?></td>
								<td><?php echo $member->name;?></td>
								<td><?php echo $member->username;?></td>
								<td><?php echo $member->role;?></td>
							</tr>
							<?php }?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>