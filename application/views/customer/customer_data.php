<section class="content-header">
      <h1>
        Customers
        <small>Pelanggan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Customers</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="box">
      <di class="box-header">
        <h3 class="box-title">Data Customers</h3>
        <div class="pull-right">
            <a href="<?= site_url('customer/add') ?>" class="btn btn-primary btn-flat">
                <i class="fa fa-plus"></i> Create
            </a>
        </div>
      </di>
      <div class="box-body table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($row->result() as $key => $data) { ?>
                    <tr>
                         <td style="width: 5%;"><?= $key+1 ?></td>
                         <td><?= $data->name ?></td>
                         <td><?= $data->gender ?></td>
                         <td><?= $data->phone ?></td>
                         <td><?= $data->address ?></td>
                         <td class="text-center" width="160px"> 
                            <a href="<?= site_url('customer/edit/'.$data->customer_id) ?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>    
                            <a href="<?= site_url('customer/del/'.$data->customer_id) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a>      
                         </td>
                    </tr>
                <?php } ?>
                
            </tbody>
        </table>
      </div>
    </div>

     
    </section>