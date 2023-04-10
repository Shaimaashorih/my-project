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
                 

                      <table class="table table-striped table-bordered zero-configuration">
                      <thead>
                          <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Phone</th>
                              <th>Date of birth</th>
                              <th>Type</th>
                              <th>Start date</th>
                              <th>Salary</th>
                              <th>Attendance date</th>
                              <th>check-out date</th>
                              <th>Nationality</th>
                              <th>Address</th>
                              <th>Email</th>
                              <th>Nationalid</th>
                              <th>Edit</th>
                              <th>Delete</th>
                          </tr>
                        </thead>
                      <!-- /////////////////////////////////////////////// -->
                    
                    
                      <tbody>
                            <tr>

                               <td>{{$employees->id}}</td>                                                                                                                                                                                                                                                  
                               <td>{{$employees->emp_name}}</td>  
                               <td>{{$employees->emp_phone}}</td> 
                               <td>{{$employees->emp_bd}}</td>
                               <td>{{$employees->emp_gender}}</td>
                               <td>{{$employees->hiredate}}</td>
                               <td>{{$employees->salary}}</td>
                               <td>{{$employees->emp_in}}</td>                                                                                                                                                                                                                                                  
                               <td>{{$employees->emp_out}}</td>
                               <td>{{$employees->nationality}}</td>                                                                                                                                                                                                                                                                                                                                                                                                                     
                               <td>{{$employees->emp_address}}</td>          
                               <td>{{$employees->emp_email}}</td>  
                               <td>{{$employees->nationalid}}</td>    
                               
                               <td>
                                <a href="{{ url('employees/' . $employees->id) . '/edit'}}">
                                  <input type="hidden" name="emp_id" value="{{$employees->id}}" >
                                  <button class="btn btn-success mb-2" > edit </button>
                                </a>
                            </td>

                            <td>
                              <form action="{{ url('/employees'. '/'. $employees->id) }}" method="POST" >
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger mb-2" > delete </button>
                              </form>
                            </td>                                                                                                                                                                                                                                        
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