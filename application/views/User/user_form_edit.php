<section class="content-header">
      <h1>
        Users
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="box">
      <di class="box-header">
        <h3 class="box-title">Edit User</h3>
        <div class="pull-right">
            <a href="<?= site_url('user') ?>" class="btn btn-warning btn-flat">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
      </di>
      <div class="box-body">
        <div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form action="" method="post">
					<div class="form-group <?=form_error('fullname') ? 'has-error' : 'null' ?>">
						<label for="">Name *</label>
                        <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
						<input type="text" name="fullname" value="<?= $this->input->post('fullname') ?? $row->name ?>" class="form-control">
						<?=form_error('fullname')?>
					</div>
					<div class="form-group <?=form_error('username') ? 'has-error' : 'null' ?>">
						<label for="">Username *</label>
						<input type="text" name="username" value="<?= $this->input->post('username') ?? $row->username ?>" class="form-control">
						<?=form_error('username')?>
					</div>
					<div class="form-group <?=form_error('password') ? 'has-error' : 'null' ?>">
						<label for="">Password</label><small>(Biarkan kosong jika tidak diganti)</small>
						<input type="password" name="password" value="<?= $this->input->post('password') ?>" class="form-control">
						<?=form_error('password')?>
					</div>
					<div class="form-group <?=form_error('passconf') ? 'has-error' : 'null' ?>">
						<label for="">Password Confirmation</label>
						<input type="password" name="passconf" value="<?= $this->input->post('passconf') ?>" class="form-control">
						<?=form_error('passconf')?>
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<textarea name="address" class="form-control" id=""><?= $this->input->post('address') ?? $row->address ?></textarea>
						<?=form_error('address')?>
					</div>
					<div class="form-group <?=form_error('level') ? 'has-error' : 'null' ?>">
						<label for="">Level *</label>
						<select name="level" id="" class="form-control">
                            <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
							<option value="1" >Admin</option>
							<option value="2" <?= $level == 2 ? "selected" : null ?> >Kasir</option>
						</select>
						<?=form_error('level')?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
						<button type="reset" class="btn btn-flat">Reset</button>
					</div>
				</form>
			</div>
		</div>
      </div>
    </div>

     
    </section>