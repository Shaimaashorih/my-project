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
                <h4 class="card-title">Add dept </h4>
            </div>
        </div>
        <div class="card-body">
          <div class="px-3">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all as $error)
                   
                   <li> {{$error}}</li>   
                  @endforeach
               </ul>
           </div>   
         @endif

         @if(\Session::has('sucess'))
             <div class="alert alert-success">
                 <p>{{\Session::get('success')}}</p>
             </div>   
         @endif
        <form class="form form-horizontal" action="{{route('departments.store')}}" method="POST">
            {{csrf_field()}}
          <div class="form-body">
              <div class="form-group row">
                  <label class="col-md-3 label-control" for="projectinput1">dept Name : </label>
                  <div class="col-md-9">
                      <input type="text" id="projectinput1" class="form-control" name="deptname">
                  </div>
                  <span id="s1"> </span>

              </div>
            
              
     

              </div>

                <div class="form-actions">
                  <button type="reset" class="btn btn-danger mr-1">
                    <i class="icon-trash"></i> Cancel
                  </button>
                  <button type="submit" class="btn btn-success" id="save">
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

 

            <!-- ///////////////////////////////////////////////////////////// -->

  <footer class="footer footer-static footer-light">
    <p class="clearfix text-muted text-center px-2"><span>Copyright  &copy; 2021 <a href="#" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">Pioneer solutions </a>, All rights reserved. </span></p>
  </footer>

</div>
</div>

    
@endsection