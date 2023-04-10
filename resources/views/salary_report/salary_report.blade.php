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
                    <h4 class="card-title">Salary report</h4>
                </div>
            </div>
            <div class="card-body collapse show">
                <div class="card-block card-dashboard">
                    <p class="card-text">DataTables has most features enabled by default, 
                        so all you need to do to use it with your own ables is to call the construction</p>
                     
                        <div class="row"><div class="col-sm-12 col-md-3"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Year
                          
                            <form action="" method="GET" >
                              <input type="search" placeholder="Search Year" name="syear" class="form-control form-control-sm">
                            </form>
                           </label>
                        </div>
                </div>
                              <div class="col-sm-12 col-md-3"><div class="dataTables_length" id="DataTables_Table_0_length">
                              <form action="" method="GET">       

                                  <label> Month
                                    <input type="search"  name="month" aria-controls="DataTables_Table_0" class="form-control form-control-sm">                              
                                  </label>
                              </form>    

                                  </div>
                              </div>
                       
                              <div class="col-sm-12 col-md-3">
                                <form action=" {{url('search')}}" method="GET"> 
                                 {{ csrf_field() }}
                
                                  <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:
                                    <input type="text" name="search" value="{{Request::get('search')}}" class="form-control form-control-sm"
                                     placeholder="Search" aria-controls="DataTables_Table_0" ></label>
                                    <div style="margin-top:-23%; margin-left: 90%;">
                                      <button type="submit" class="btn btn-primary mb-2" > Search Employee </button>
                                    </div>
                                   </div>
                
                                 </form>
                                 
                                 </div>
                            {{-- <div class="col-lg-3">
                                <a href="{{url('/search')}}">
                              <button id="addRow"  class="btn btn-primary mb-2"> <i class="ft-search"></i>&nbsp;
                                 Search Employee</button> </a>
                                </div>
                            </div>  --}}

           
             
             
                    <table class="table table-striped table-bordered zero-configuration mt-40">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Employee Name</th>
                                <th>Phone</th>
                                <th>Salary</th>
                                <th>Attendance days</th>
                                <th>Absent days</th>
                                <th>Overtime hours</th>
                                <th>Discount hours</th>
                                <th>Extra</th>
                                <th>discount</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($attendances as $attendances )
                                
                                <?php
                                
                                if($attendances->attend_date > 22){
                                $extradays = ($attendances->attend_date) - 22 ;
                                }
                                else{
                                $extradays = 0;
                                }
                        

                            if($attendances->attend_date < 22) {    
                            $absentdays = 22 - $attendances->attend_date ;
                            } 
                            else{
                            $absentdays = 0;
                            }

                            $extrahour = $extradays*2*8;
                            $discounthour = $absentdays*2*8;
                            $extrafees=$extrahour *($attendances->salary / 176);
                            $disfees=$discounthour *($attendances->salary / 176);
                            $total = $attendances->salary + $extrafees - $disfees ;
                            ?>
                                <tr>
                                    <td>{{$attendances->emp_id}}</td>
                                    <td>{{$attendances->emp_name}}</td>
                                    <td>{{$attendances->emp_phone}}</td>
                                    <td>{{$attendances->salary}}</td>
                                    <td>{{$attendances->attend_date}}</td>
                                    <td>{{$absentdays}}</td>
                                    <td>{{$extrahour}}</td>
                                    <td>{{$discounthour}}</td>
                                    <td>{{round($extrafees , 2)}}</td>
                                    <td>{{round($disfees , 2)}}</td>
                                    <td>{{round($total , 2)}}</td>
                                    <td>
                                        <a href="{{ url('salary_report/' . $attendances->emp_id ) }}">
                                            <button  class="btn btn-danger mb-2" > <i class="ft-plus"></i>&nbsp;
                                            Invoice</a>
        
                                            </button>
                                        </a>  
                                    </td>
                                </tr>

                            @endforeach
                     
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