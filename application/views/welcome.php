
        <!--**********************************
            Content body start
        ***********************************-->
        <script type="text/javascript">
  window.onload = showeleTable();

  function showeleTable(){
      var timer;

      timer = setInterval(() => 
        $.ajax({
                type: 'POST',
                url: "<?php echo base_url(); ?>Welcome/details/",
                
                success: function(resultData) { 
                  
                 $('.eleTable').html(resultData);
                  
              }
          })
        , 1000);
              
  }//function close


</script>   

        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body bg-warning">
                                <h3 class="card-title text-white">Ampere Used </h3>
                                    <div class="d-inline-block">  <div class="card-body">
                                        <h2 class="text-white eleTable">
                                            </h2>
                                              </div>
                                                
                                    <p class="text-white mb-0">Total Electricity Usage...</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-signal"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body bg-dark">
                                <h3 class="card-title text-white">Total Classes</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4</h2>
                                    <p class="text-white mb-0">Added By You.</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-toggle-off"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Devices</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">7</h2>
                                    <p class="text-white mb-0">Configured In Classes</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-desktop"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Av. Monthly Bill</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">0</h2>
                                    <p class="text-white mb-0">Based On Consumption</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                <?php foreach($rooms as $rom){?>

                <div class="col-md-3 col-sm-6" style="border: 1px solid #ccc;padding: 5px;">
                
                <div class="col-sm-6">
                <?php echo $rom['room_name'];?> </div>
                <div class="col-sm-6 pull-right" style="text-align:right;">
                <a href="https://iot.codeelectra.com/devices/add?classid=10" title="Add Devices"><i class="entypo-cog"></i></a>
                <a href="https://iot.codeelectra.com/classroom/addtimetable/10" title="Add Timetable"><i class="entypo-calendar"></i> </a>
                </div>
                <div class="col-sm-12" style="border-top:1px solid #ccc;margin-top:10px;border-bottom:1px solid #ccc;margin-bottom:10px;">
                <div class="js-gauge js-gauge--10 gauge" id="gauge-0"><svg height="160" version="1.1" width="200" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.55px; top: -0.1px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><linearGradient id="00-_1cb42f:0-_fdbe37:50-_fa4133:100" x1="0" y1="0" x2="1" y2="0" gradientTransform="matrix(1,0,0,1,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><stop offset="0%" stop-color="#1cb42f" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="50%" stop-color="#fdbe37" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop><stop offset="100%" stop-color="#fa4133" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></stop></linearGradient></defs><path fill="url(#00-_1cb42f:0-_fdbe37:50-_fa4133:100)" stroke="none" d="M20,120.00000000000001A80,80,0,0,1,180,120" opacity="1" fill-opacity="1" class="gauge" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1; fill-opacity: 1;"></path><path fill="#f4f4f4" stroke="none" d="M20,120.00000000000001A80,80,0,0,1,180,120" class="gauge__background" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" transform="matrix(0.1719,0.9851,-0.9851,0.1719,201.0202,0.8576)"></path><path fill="#ffffff" stroke="none" d="M50,120A50,50,0,0,1,150,120" class="gauge__center" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><rect x="100" y="40" width="1" height="40" r="0" rx="0" ry="0" fill="#000000" stroke="none" class="gauge__needle" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="0" y="120" width="200" height="40" r="0" rx="0" ry="0" fill="#ffffff" stroke="none" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><text x="100" y="110" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 20px Arial;" font-size="20px" font-family="#000" font-weight="normal" class="gauge__value"><tspan dy="7" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0.89</tspan></text><text x="100" y="40" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 20px Arial; fill-opacity: 1;" fill-opacity="1" font-size="20px" font-family="Arial" font-weight="normal" class="gauge__title"><tspan dy="40" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></tspan></text><text x="35" y="127" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px Arial; fill-opacity: 1;" fill-opacity="1" font-size="12px" font-family="Arial" font-weight="normal" class="gauge__label--left"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Low</tspan></text><text x="165" y="127" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px Arial; fill-opacity: 1;" fill-opacity="1" font-size="12px" font-family="Arial" font-weight="normal" class="gauge__label--right"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">High</tspan></text></svg></div>
                </div>
                <div class="col-sm-6">
                <a href="https://iot.codeelectra.com/classroom/changestate/10/1/1"><img src="<?php echo base_url('/assets');?>/images/download.png" height="24" width="24"></a>
                </div>
                <div class="col-sm-6 pull-right" style="text-align:right;">
                <a href="https://iot.codeelectra.com/classroom/changestate/10/2/1"><img src="<?php echo base_url('/assets');?>/images/fan.png" style="width: 18px;margin-top: 6px;"></a>
                </div>
                
                <div class="col-sm-12" align ="center">

                </div>
                </div>
                <?php }?>


                    
                    </div>

            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
  