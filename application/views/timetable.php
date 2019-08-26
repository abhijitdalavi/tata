<head>
<style>
.fa-clock-o{
    padding:10px;
    padding-left:10px;
    min-width:40px;
    

}
.input-group-addon{
   background-color:orange;
   opacity:0.5;
}

</style>
</head>


<div class="content-body">

    <div class="container-fluid mt-3">
        
    <div class="row">
    <div class="col-lg-12">
     <div class="col-12">
        <div class="card">
        <div class="card-body">
            <?php echo form_open_multipart($times);?>
            <div class="card-body d-flex flex-column form-row">
            <div class="form-row">
                
            <div class="form-group col-md-4">
                <label  class="control-label" for="Time From">Time From</label>
                <div class="input-group ">
                <div class="input-group-addon">
                <span class="fa fa-clock-o"></span>
                </div>
                <input class="form-control" name="start_time" type="time">
                </div>
            </div>

            <div class="form-group col-md-4">
                <label  class="control-label" for="Time To">Time To</label>
                <div class="input-group ">
                <div class="input-group-addon">
                <span class="fa fa-clock-o"></span>
                </div>
                <input class="form-control" name="end_time" type="time">
                </div>
            </div>
                        
            <div class="form-group col-md-4">
                <label for="Day"> Day </label>
                <div class="input-group">
                
                <select name="day" class="form-control form-control-sm">
                  <?php foreach($days as $dy){?>      
                <option value="<?php echo $dy['id'];?>"><?php echo $dy['day'];?></option>
                       <?php }?>
                </select>

                </div>
            </div>
                        
            <div class="form-group mb-0">

            <button type="submit" class="btn btn-success">Save Time</button>
            </div>    

            </form>             
                   
                
            
            </div>
            </div>
            <!--end of form-->
                <div class="row">
                <div class=" col-md-12">
                    <h6 class="card-title">TimeTable</h6>
                    <h6 class="card-title">Room ID:
                    <?php if($tim['room_id']==$tin['room_id']){
                        echo $tin['room_name'];}?></h6>
                  
                  
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-1">Sr No.</th>
                          
                          <th scope="col" class="border-1">Day</th>
                          <th scope="col" class="border-1">Time From</th>
                          <th scope="col" class="border-1">Time To</th>
                          <th scope="col" class="border-1">Action</th>
                           </tr>
                      </thead>
                      <tbody>
                        <?php $id=1; foreach($dim as $dm){
                            ?>
                        <tr>
                            <td><?php echo $id;?></td>
                            
                            <td><?php
                            
                            $dys=$this->Common_model->getAll("master_day",array('id'=>$dm['day']))->row_array();
                            echo $dys['day'];
                            ?></td>
                            <td><?php echo $dm['start_time'];?></td>
                            <td><?php echo $dm['end_time'];?></td>
                            <td>
                            <?php echo form_open($del);?>
                            
                            <input type="hidden" name="id" value="<?php echo $dm['id'];?>">
                            <button type="submit" class="btn btn-danger fa fa-trash"></button>
                            
                        
                    </form>
                    </td>
                </tr>
                <?php  $id=$id+1;}?>

                        </tbody>
                    </table>
                  </div>
              </div>

                
              
              
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        
