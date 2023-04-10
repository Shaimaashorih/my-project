@extends('layout')
@section('content')
    


<div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper">
        <div class="container-fluid">
<section id="horizontal-form-layouts">
<div class="row">
    <div class="col-sm-12">
        <h2 class="content-header">Add Employees Form</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title-wrap bar-success">
                    <h4 class="card-title" id="horz-layout-basic">Employee Information</h4>
                </div>
                <p class="mb-0">This is the basic horizontal form with labels on left and cost estimation form is the default position.</p>
            </div>
            <div class="card-body">
                <div class="px-3">
                    {{-- @if(count($errors) > 0)
                       <div class="alert alert-danger">
                          <ul>
                             @foreach ($errors->all as $error)
                              
                              <li> {{$error}}</li>   
                             @endforeach
                          </ul>
                      </div>   
                    @endif --}}

                    

                    @if(\Session::has('sucess'))
                        <div class="alert alert-success">
                            <p>{{\Session::get('success')}}</p>
                        </div>   
                    @endif

                    <form class="form form-horizontal" action= "{{ url('employees') }}" method="POST">
                        {{csrf_field()}}
                        <div class="form-body">
                            <h4 class="form-section">
                                <i class="icon-user"></i> Personal Details</h4>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput1">First Name: </label>
                                <div class="col-md-9">
                                    <input type="text" id="projectinput1" class="form-control" name="fname">
                                    @error('fname')
                                      <div class="form-error">
                                        {{$message}}
                                      </div>
                                    @enderror
                <span id="res1"> </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Address: </label>
                                <div class="col-md-9">
                                    <input type="text" id="projectinput2" class="form-control" name="lname">
                                    @error('lname')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>                                   
                                     @enderror
                                </div>
                                
              <span id="res2"> </span>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput3">E-mail: </label>
                                <div class="col-md-9">
                                    <input type="text" id="projectinput3" class="form-control" name="email">
                                    @error('email')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
              <span id="res3"> </span>

                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput4">Contact Number: </label>
                                <div class="col-md-9">
                                    <input type="text" id="projectinput4" class="form-control" name="phone">
                                    @error('phone')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>  
                                    @enderror

                                </div>
              <span id="res4"> </span>
                            </div>

                            <h4 class="form-section">
                                <i class="icon-book-open"></i>Other Details</h4>
              <div class="form-group row">
              <label class="col-md-3 label-control" for="projectinput9">Date: </label>
              <div class="col-md-9">
                <div class="position-relative has-icon-left">
                  <input type="date" id="timesheetinput3" class="form-control" name="date">
                    @error('date')
                        <div class="form-error">
                            {{$message}}
                        </div>
                    @enderror

                  <div class="form-control-position">
                    <i class="ft-message-square"></i>
                  </div>
                  <span id="res5"> </span>
                </div>
                </div>
                </div>
              </div>
            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput9">Type: </label>
                                <div class="col-md-9">
                                  {{-- <input type="text" id="projectinput9" class="form-control" name="Type">  --}}
                <input type="radio" id="projectinput9"  name="Type" value="Male"  >
                <label for="male">Male</label>
                <input type="radio"  id="projectinput9" name="Type" value="Female">
                <label for="female">Female</label>
                    @error('Type')
                        <div class="form-error">
                            {{$message}}
                        </div>
                    @enderror

                
                                </div>
              <span id="res6"> </span>
                            </div>
            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput10">Date of contract: </label>
                                <div class="col-md-9">
                                    <input type="date" id="projectinput10" class="form-control" name="Dateofcontract">
                                        @error('Dateofcontract')
                                            <div class="form-error">
                                                {{$message}}
                                            </div>
                                        @enderror

                                </div>
              <span id="res7"> </span>
                            </div>
            <div class=" row">
                                <div class="col-md-12">
                                    <div class=" row form-group">
                  <label class="col-md-3 label-control" >Start time: </label>
                                        <div class="position-relative has-icon-left col-lg-9">
                                            <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                                @error('starttime')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            <div class="form-control-position">
                                                <i class="ft-clock"></i>
                                            </div>
                    <span id="res8"> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class=" row form-group">
                  <label class="col-md-3 label-control" >End time: </label>
                                        <div class="position-relative has-icon-left col-lg-9">
                                            <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                                @error('endtime')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            <div class="form-control-position">
                                                <i class="ft-clock"></i>
                                            </div>
                    <span id="res9"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput7">Salary: </label>
                                <div class="col-md-9">
                                    <input id="projectinput7" type="text" name="salary" class="form-control">
                                        @error('salary')
                                            <div class="form-error">
                                                {{$message}}
                                            </div>
                                        @enderror
                <span id="res10"> </span>
                                </div>
                            </div>

       
                   <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput11">National ID: </label>
                                <div class="col-md-9">
                                    <input type="text" id="projectinput11" class="form-control" name="NationalID">
                                        @error('NationalID')
                                            <div class="form-error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                </div>
              <span id="res11"> </span>
                            </div>
            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput12">Nationality: </label>
                                <div class="col-md-9">
                                    <input type="text" id="projectinput12" class="form-control" name="Nationality">
                                        @error('Nationality')
                                            <div class="form-error">
                                                {{$message}}
                                            </div>
                                        @enderror
                                </div>
              <span id="res12"> </span>
                            </div>
            <div class="form-group row">
                                <label class="col-md-3 label-control">Select File: </label>
                                <div class="col-md-9">
                                    <label id="projectinput8" class="file center-block">
                                        <input type="file" id="file">
                                        <span class="file-custom"></span>
                                        : </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput9">Notes: </label>
                                <div class="col-md-9">
                                    <textarea id="projectinput9" rows="5" class="form-control" name="comment"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="reset" class="btn btn-danger mr-1">
                                <i class="icon-trash"></i> Cancel
                            </button>								
                            <button type="submit" class="btn btn-success" id="go">
                                <i class="icon-note"></i> Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


      <!-- //////////////////////////////////////// -->

</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>

    <footer class="footer footer-static footer-light">
      <p class="clearfix text-muted text-center px-2"><span>Copyright  © 2021 <a href="#" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">Pioneer solutions </a>, All rights reserved. </span></p>
    </footer>

  </div>
</div>

@endsection