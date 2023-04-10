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
                  <div>   
                    <form action="upload.php" method="POST" enctype="multipart/form-data">  
                  
                        <input type="file" name="upload_file"  class="form-control form-control-sm" style="width: 27%; margin-left:60%;" >
                        <button type="submit" name="submit_file" class="btn btn-primary mb-2" style="margin-top:-5.5%; margin-left: 87%; " > upload </button>
                    
                    </form>  
                  </div>  
                     <!-- /////////////////////////////////////////// -->

                                                      
                    <div class="row"><div class="col-sm-12 col-md-3">
                      <div class="dataTables_length" id="DataTables_Table_0_length">
                        <label>Show Date
                          <form action="searchdate.php" method="GET" >
                            <input type="search" placeholder="Search Date" name="search_date" class="form-control form-control-sm">
                          </form>
    
                        </label>
                      </div>
                    </div>
                      
                                <div class="col-lg-1"></div> 
                                <div class="col-sm-12 col-md-3">
                                   <form action=" " method="GET">  
                                     <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:
                                       <input type="text" name="search" class="form-control form-control-sm" placeholder="Search" aria-controls="DataTables_Table_0"></label>
                                      
                                       <div style="margin-top:-23%; margin-left: 90%;">
                                         <button type="submit" class="btn btn-primary mb-2" > Search </button>
                                       </div>
                      
                                      </div>
                                    </form>

                                    <!-- request form -->
                                    <div style="margin-left: 150%;  margin-top:-30%;"  >
                      <button type="submit" class="btn btn-danger mr-1" name="request" >
                      <a href="{{url('attendances/create')}}"> Add attendace </a> </button>
                    </div>

               </div>
                             
                   
  {{csrf_field()}}

                  <table class="table table-striped table-bordered zero-configuration mt-40">
                      <thead>
                          <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Date </th>
                              <th>Attendance date</th>
                              <th>check-out date</th>
                              <th>Delete</th>
                          </tr>
                      </thead>
                      
                      <tbody>
                            
                       
                        @foreach($attendances as $attendances )
                        <tr>
                           <td>{{$attendances->emp_id}}</td>
                           <td>{{$attendances->emp_name}}</td>
                           <td>{{$attendances->attend_date}}</td>
                           <td>{{$attendances->check_in}}</td>
                           <td>{{$attendances->check_out}}</td> 
                           <td>
                            <form action="{{ url('attendances'. '/'. $attendances->emp_id) }}" method="POST" >
                              {{ method_field('DELETE') }}
                              {{ csrf_field() }}
                              <button type="submit" class="btn btn-danger mb-2"  > delete </button>
                            </form>
                          </td>
                        </tr>

                            
                        @endforeach    
                                                                                                                                                                                                                                                    </yr>
                      </tbody>
          
                  </table>

              </div>
          </div>
          <div class="card-header">
            <div class="card-title-wrap bar-success">
                <h4 class="card-title">Request A Form</h4>
            </div>
        </div>
        <div class="card-body">
          <div class="px-3">
           
              
    <!-- --------------------form--------------- -->
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