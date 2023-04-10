@extends('layout')
@section('content')

<div class="main-panel">
  <div class="main-content">
    <div class="content-wrapper">
      <div class="container-fluid"><!-- Zero configuration table -->
<section id="configuration">
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-header">
              <div class="card-title-wrap bar-success">
                  <h4 class="card-title">Attendance and departure request</h4>
              </div>
          </div>
          <div class="card-body collapse show">
              <div class="card-block card-dashboard">
                  <p class="card-text">DataTables has most features enabled by default, 
                      so all you need to do to use it with your own ables is to call the construction</p>
                      <!-- //////////////excel/////////////////// -->
                      


          <div class="card-header">
            <div class="card-title-wrap bar-success">
                <h4 class="card-title">Request A Form</h4>
            </div>
        </div>
        <div class="card-body">
          <div class="px-3">
           
              
    <!-- --------------------form--------------- -->
        <form class="form form-horizontal" action="{{ url('attendances') }}"  method="POST">
          {{csrf_field()}}
          <div class="form-body">

            <div class="form-group row">
              <label class="col-md-3 label-control" for="projectinput7">Employee Name : </label>
              <div class="col-md-9">
                 
                  
                <div class="col-md-9">
                  <select id="projectinput7" name="emp_id" class="form-control">
                    <?php
                    foreach($employees as $emp):
                    ?>
                      
                    <option value="{{$emp->id}}">{{$emp->emp_name}}</option>

                    <?php 
                    endforeach;
                    ?>  

                  </select>
                </div>
              </div>  
            </div>

           

              <div class="form-group row">
              <label class="col-md-3 label-control" for="projectinput9">Date: </label>
              <div class="col-md-9">
                <div class="position-relative has-icon-left">
                  <input type="date" id="timesheetinput3" class="form-control" name="date">
                  <div class="form-control-position">
                    <i class="ft-message-square"></i>
                  </div>
                </div>
                </div>
                </div>
              </div>
    
         
            <div class=" row">
              <div class="col-md-12">
                <div class=" row form-group">
                  <label class="col-md-3 label-control">Start time: </label>
                  <div class="position-relative has-icon-left col-lg-9">
                    <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                    <div class="form-control-position">
                      <i class="ft-clock"></i>
                    </div>
                  </div>
                </div>
              </div>
                
              <div class="col-md-12">
                <div class=" row form-group">
                  <label class="col-md-3 label-control">End time: </label>
                  <div class="position-relative has-icon-left col-lg-9">
                    <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                    <div class="form-control-position">
                      <i class="ft-clock"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="form-actions">
                <button type="reset" class="btn btn-danger mr-1">
                  <i class="icon-trash"></i> Cancel
                </button>
                <button type="submit" class="btn btn-success">
                  <i class="icon-note"></i> Save
                </button>
              </div>
       
          </form>

          </div>
          </div>

      </div>
  </div>
</div>
</section>

      </div>
    </div>
  </div>
  
  <footer class="footer footer-static footer-light">
    <p class="clearfix text-muted text-center px-2"><span>Copyright  &copy; 2021 <a href="#" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">Pioneer solutions </a>, All rights reserved. </span></p>
  </footer>

</div>
</div>


@endsection