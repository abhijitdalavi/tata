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

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Your Device/ <a  href="<?php echo base_url('index.php/add_device') ?>"></h4><br/></a>
                                <div class="basic-form">
                                <?php echo form_open($insertdata); ?>

                                    
                                        <!-- <div class="form-group">
                                            <label class="mr-sm-2">Name of Building :</label>
                                            <input type="text" class="form-control input-default" placeholder="Name Of Building">
                                        </div> -->
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <div class="form-group col-md-4">
                                                <label for="mac_add">Mac Address</label>
                  
                                                <input type="text" name="mac_address" class="form-control" placeholder="Mac Address" required="required">
                                            </div>
                                            </div>
                                         
                                        <div class="form-row align-items-center">
                                        <div class="form-group col-md-12">
                                                <label class="mr-sm-2">Switches</label>
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected="selected">Choose...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">4</option>
                                                    <option value="4">0</option>
                                                    <option value="5">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                   <!--     <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Number of Floors:</label>
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected="selected">Choose...</option>
                                                    <option value="1">Ground</option>
                                                    <option value="2">One</option>
                                                    <option value="3">Two</option>
                                                    <option value="4">Three</option>
                                                    <option value="5">Four</option>
                                                    <option value="6">Five</option>
                                                    <option value="7">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Number Of Rooms:</label>
                                                <input type="number" name="faculty_beneficiaries"  class="form-control" value="0" required="required">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Number of Fans:</label>
                                                <input type="number" name="faculty_beneficiaries"  class="form-control" value="0" required="required">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Number Of Lights:</label>
                                                <input type="number" name="faculty_beneficiaries" class="form-control" value="0" required="required">
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                            <div class="input-group-append"><span class="input-group-text">Upload</span>
                                            </div>
                                        </div> -->
                                        <div class="form-row">
                                            <div class="form-group mb-4"><br/><br/>
                                            <a href="<?php echo base_url('index.php/add_device');?>" class="btn-primary">
                                                <button type="submit" class="btn btn-accent">Done</button>
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </form>
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