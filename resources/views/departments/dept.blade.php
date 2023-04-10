@extends('layout')
@section('content')
    
<div class="main-panel">
  <div class="main-content">
    <div class="content-wrapper">
      <div class="container-fluid"><!-- Zero configuration table -->
<section id="configuration">
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <div class="card-title-wrap bar-success">
                  <h4 class="card-title">Employees Information</h4>
              </div>
          </div>
          <div class="card-body collapse show">
              <div class="card-block card-dashboard">
                  <p class="card-text">DataTables has most features enabled by default, 
                      so all you need to do to use it with your own ables is to call the construction</p>
                      <p>
                          When customizing DataTables for your own usage, you might find that the default position of the feature elements (filter input etc) is not quite to your liking. To address this issue DataTables takes inspiration from the CSS 3 Advanced Layout Module and provides the dom initialization parameter which can be set to indicate where you wish particular features to appear in the DOM
                      </p>
                      <div class="row"><div class="col-sm-12 col-md-3"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show 
                          <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                              <option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">
                                  100</option></select> </label></div></div>

                                <div class="col-lg-1"></div> 
                             <!-- ------------------------------- -->
                               
                                   

                                    <div class="col-lg-1"></div>

                          <div class="col-lg-1"></div>
                          <div class="col-lg-3"><button id="addRow" class="btn btn-primary mb-2"> <i class="ft-plus"></i>&nbsp;
                             <a href="{{url('employees/create')}}">  Add new Employee </a></button></div>
                      </div> 



                      <table class="table table-striped table-bordered zero-configuration">
 
 <tbody>
                                                                                                                                                                                                                            
          
 </tbody>


</table>




<!-- //////////////////////////////// -->

                      <table class="table table-striped table-bordered zero-configuration">
                      <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                          </tr>
                        </thead>
                      <!-- /////////////////////////////////////////////// -->
                    
                      

                      <tbody>
                                                                                                                                                                                                                                                                                 
                      </tbody>
          
                  </table>
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
</div>
@endsection