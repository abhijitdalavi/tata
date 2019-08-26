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
<<<<<<< HEAD
                                <h4 class="card-title">CLASS/ <a href="<?php echo base_url('index.php/residentialar') ?>"></h4><br/></a>
=======
                                <h4 class="card-title">CLASS</h4><br/>
>>>>>>> 8584e2ff1c2be4d071e036f49c294dc321d2cecb
                                <div class="basic-form">
                                    <?php echo form_open($insertdata); ?>
                                        <!-- <div class="form-group">
                                            <label class="mr-sm-2">Name of Building :</label>
                                            <input type="text" class="form-control input-default" placeholder="Name Of Building">
                                        </div> -->
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <div class="form-group col-md-4">
                                                <label for="room_name">Room Name</label>
                                                <input type="text" name="room_name" <?php if(isset($edit_data_info)){?> value="<?php echo $edit_data_info['room_name'] ?>" <?php } ?> class="form-control" placeholder="Room Name" required="required">
                                            </div>
                                            </div>
                                            
                                        <!-- <div class="form-group">
                                            <label class="mr-sm-2">Name of Building :</label>
                                            <input type="text" class="form-control input-default" placeholder="Name Of Building">
                                        </div>
                                        <div class="form-row align-items-center">
                                        <div class="form-group col-md-12">
                                                <label class="mr-sm-2">Building Section :</label>
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected="selected">Choose...</option>
                                                    <option value="1">No</option>
                                                    <option value="2">A</option>
                                                    <option value="3">B</option>
                                                    <option value="4">C</option>
                                                    <option value="5">D</option>
                                                    <option value="6">E</option>
                                                    <option value="7">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-row">
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
                                            <a href="<?php echo base_url('index.php/welcome');?>" class="btn-primary">
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