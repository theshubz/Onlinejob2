
<?php
     if (!isset($_SESSION['USERID'])){
      redirect("admin/index.php");
     }

?>
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Add New Autonumber</h1>
          </div>
       </div> 
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "AUTOSTART">Start:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="AUTOSTART" name="AUTOSTART" placeholder=
                            "Start" type="text" value="">
                      </div>
                    </div>
                  </div>

                     <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "AUTOINC">INC:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="AUTOINC" name="AUTOINC" placeholder=
                            "INC" type="text" value="">
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "AUTOEND">End:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="AUTOEND" name="AUTOEND" placeholder=
                            "End" type="text" value="">
                      </div>
                    </div>
                  </div>

                     <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "AUTOKEY">Key:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="AUTOKEY" name="AUTOKEY" placeholder=
                            "Key" type="text" value="">
                      </div>
                    </div>
                  </div>




            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                         <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                     
                     </div>
                    </div>
                  </div> 

        <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>
          
        </form>
      
 