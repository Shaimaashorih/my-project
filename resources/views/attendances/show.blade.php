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
                  <h4 class="card-title">Attendance Details</h4>
              </div>
          </div>
          
                             


                  <table class="table table-striped table-bordered zero-configuration mt-40">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Id</th>
                              <th>Date </th>
                              <th>Attendance date</th>
                              <th>check-out date</th>
                        
                          </tr>
                      </thead>
                      <!-- //////////////////////////////// -->
                    
                              <td>{{$attendances->attend_date}}</td>
                              <td>{{$attendances->check_in}}</td>
                              <td>{{$attendances->check_out}}</td> 

                      <!-- //////////////////////////////// -->
                      <tbody>
                          


                                                                                                                                                                                                                                                            </yr>
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


@endsection