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
                    <h4 class="card-title">Add New Group </h4>
                </div>
            </div>
            <div class="card-body collapse show">
              {{-- @php
                  $items = json_decode($permissions[0]->permission_ck);
              @endphp --}}

            <form action="{{url('permissions/'. $permissions->id)}}" method="POST">
                {{csrf_field()}}
                @method("PATCH")
               
                        
                <div class="form-body">

                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput1">Group Name : </label>
                    <div class="col-md-9">
                        <input type="text" id="projectinput1" class="form-control" name="gp_name" value="{{$permissions->gp_name}}">
                    </div>
  
                </div>
  
             
  
              <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput1">permissions  : </label>
                <div class="col-md-9">
                    <input type="text" id="projectinput1" class="form-control" name="permissions" value="{{$permissions->permission_ck}}">
                </div>
            </div>

            {{-- <table class="table table-striped table-bordered zero-configuration mt-40 table-group">
              <thead>
                  <tr>
                      <th>Module Name</th>
                      <th>Show </th>
                      <th>Add</th>
                      <th>Edit</th>
                      <th>delete</th>
                    
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Add employee</td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="show Add employee" {{in_array('show Add employee' ,json_encode( $permissions[0]->permission_ck))? 'checked':''}}></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="add Add employee" {{in_array('add Add employee' ,json_encode( $permissions[0]->permission_ck))? 'checked':''}}></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="edit Add employee" {{in_array('edit Add employee' ,json_encode( $permissions[0]->permission_ck))? 'checked':''}}></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="delete Add employee" {{in_array('delete Add employee' ,json_encode( $permissions[0]->permission_ck))? 'checked':''}}></td>
                 
                  </tr>
                  <tr>
                      <td>Progress</td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="show Progress"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="add Progress"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="edit Progress"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="delete Progress"></td>
                 
                  </tr>
                  <tr>
                      <td>Genral Settings</td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="show Genral Settings"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="add Genral Settings"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="edit Genral Settings"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="delete Genral Settings"></td>
                 
                  </tr>
                  <tr>
                      <td>Premissions</td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="show Premissions"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="add Premissions"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="edit Premissions"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="delete Premissions"></td>
                 
                  </tr>
                  <tr>
                      <td>Add New Group</td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="show Add New Group"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="add Add New Group"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="edit Add New Group"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="delete Add New Group"></td>
                 
                  </tr>
                  <tr>
                      <td>Attendance</td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="show Attendance"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="add Attendance"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="edit Attendance"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="delete Attendance"></td>
                 
                  </tr>
                  <tr>
                      <td>Salary report</td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="show Salary report"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="add Salary report"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="edit Salary report"></td>
                      <td>  <input type="checkbox" id="item1" name="item[]" value="delete Salary report"></td>
                 
                  </tr>

                                                                                                                                                                                                                                            </yr>
              </tbody>
  
          </table> --}}

               <div class="form-actions">
              <button type="reset" class="btn btn-danger mr-1">
                <i class="icon-trash"></i> Cancel
              </button>
              <button type="submit" class="btn btn-success">
                <i class="icon-note"></i> Update
              </button>
            </div>

          </div>

        </form>  
        
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