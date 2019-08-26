<head>
<style>
.icon{
  background-color:red;
  border-radius:50%;
  padding:10px;
  border:1x solid grey;

}
.icon1{
  background-color:green;
  border-radius:50%;
  padding:10px;
  border:1x solid grey;

}
.fa-lightbulb-o{
  color:white;
}
.icon:hover{
  background-color:red;
  opacity:0.5;
}
.icon1:hover{
  background-color:green;
  opacity:0.5;
}
.b1{
  float:right;
  display:block;
  margin-right:0px;
  margin-bottom:15px;
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
          <div class="row">
                <div class=" col-md-12">
                    <h6 class="card-title">All Classes</h6>
                    <a href= "<?php echo base_url('index.php/residentialar');?>" aria-expanded="false">
                  <button type="button" class="btn btn-info b1" >+Add Class</button>
                  </a>
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-1">Sr No.</th>
                          <th scope="col" class="border-1">Classname</th>
                          <th scope="col" class="border-1">Add Device</th>
                          
                          <th scope="col" class="border-1"></th>
                          <th scope="col" class="border-1">Action</th>
                          <th scope="col" class="border-1"></th>
                           </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>Room 1</td>
                            <td> </td>
                            
            
                            <td>
                            <a href="<?php echo base_url('index.php/timetable');?>" class="btn btn-primary">
                            <span class="fa fa-archive"></span>
                        </a>
                    </td>
                    <td>
                        <?php echo form_open($editclasses); ?>

                        <button class="btn btn-warning"/>
                            <span class="fa fa-pencil"></span>
                        
                        </form>
                    </td>
                    <td>
                      <a href="#" class="btn btn-danger">
                      <span class="fa fa-trash"></span>
                        </a>
                     </td>
                </tr>

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