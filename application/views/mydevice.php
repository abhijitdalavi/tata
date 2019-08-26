<style>
   h4{
        text-align:center;

    }
    
</style>
<body>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>List Of All Your Devices</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>sr. no </th>
                                                <th>location</th>
                                                <th>Mac Address </th>
                                                <th>Status</th>
                                                <th>currunt usage</th>
                                                <th>amount</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php// $i=1; foreach($my_list as $list){ ?>
                                            <tr>
                                                <th><?php //echo $i; ?></th>
                                                <td><?php// echo $list['location']; ?></td>
                                                <td><?php //echo $list['mac_add']; ?></span>
                                                <td><?php// echo $list['status']; ?></td>
                                                <td><?php// echo $list['Current']; ?></td>
                                                <td><?php// echo $list['amount']; ?></td>
                                                <td><?php// echo $list['action']; ?></td>

                                              
                                            </tr>
                                            <?php //$i=$i+1; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            
    <div>
        <div>
            <div >
                <div class="col-xl-4">
                    <div >
                        <div class="card login-form mb-0">
                            <div>
                                

                                <form  class="mt-5 mb-5 login-input">
                                <h4> To add device click here 
<input class="btn btn-primary px-3 ml-4" type="button" onclick="location.href='<?php echo base_url('index.php/add_device');?>'" value="add device">
                                        </h4>                           
</form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                       
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        