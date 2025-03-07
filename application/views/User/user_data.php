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
        <h3 class="box-title">Data Users</h3>
        <div class="pull-right">
            <a href="<?= site_url('user/add') ?>" class="btn btn-primary btn-flat">
                <i class="fa fa-user-plus"></i> Create
            </a>
        </div>
      </di>
      <div class="box-body table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($row->result() as $key => $data) { ?>
                    <tr>
                         <td style="width: 5%;"><?= $key+1 ?></td>
                         <td><?= $data->username ?></td>
                         <td><?= $data->name ?></td>
                         <td><?= $data->address ?></td>
                         <td><?= $data->level == 1 ? 'Admin' : 'Kasir' ?></td>
                         <td class="text-center" width="160px">
                            <form action="<?=site_url('user/del')?>" method="post">
                            <a href="<?= site_url('user/edit/'.$data->user_id) ?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>

                                <input type="hidden" value="<?=$data->user_id?>" name="user_id">
                                <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                            
                         </td>
                    </tr>
                <?php } ?>
                
            </tbody>
        </table>
      </div>
    </div>

     
    </section>