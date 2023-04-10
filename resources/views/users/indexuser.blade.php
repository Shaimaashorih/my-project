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
                    <h4 class="card-title">Users Information</h4>
                </div>
            </div>
            <div class="card-body collapse show">
                <div class="card-block card-dashboard">
                    <p class="card-text">DataTables has most features enabled by default, 
                        so all you need to do to use it with your own ables is to call the construction</p>
                      
                        <div class="row"><div class="col-sm-12 col-md-3"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show 
                            <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                <option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">
                                    100</option></select> </label></div></div>
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
                                      
                                      </div>

                                      <div class="col-lg-1"></div>

                                    <div class="col-sm-12 col-md-3">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-3"><button id="addRow" class="btn btn-primary mb-2"> <i class="ft-plus"></i>&nbsp;
                               <a href="{{url('users/create')}}">  Add new User</a></button></div>
                        </div> 

                        <table class="table table-striped table-bordered zero-configuration">
   
   <tbody>
                                                                                                                                                                                                                                    
            
   </tbody>


</table>



                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Actions</th>
                                <th >Edit </th>
                                <th>Delete</th>
                           
                            </tr>
                        </thead>
                        
                        <!-- ///////////////////////////////////////////////// -->
                        <tbody>
                          @foreach ($users as $item)
                            <tr>
                              <td>{{$item->id}}</td>
                              <td>{{$item->name}}</td>
                              <td>
                                <form action="" method="GET">
                                  <input type="hidden" name="user_userid" value="{{$item->id}}" >
                                  <button class="btn btn-gray mb-2"><?php echo ($item['type']==1)?'Active':'Inactive'; ?></button>
                                </form>  
                              </td>

                              <td>
                                <a href="{{ url('users/' . $item->id) . '/edit'}}">
                                  <input type="hidden" id="run" name="user_userid" value="{{$item->id}}" >
                                  <button class="btn btn-success mb-2" id="go" > edit </button>
                                </a>
                              </td>

                              <td>
                                <form method="POST" action="{{ url('/users'. '/' . $item->id) }}"  >
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