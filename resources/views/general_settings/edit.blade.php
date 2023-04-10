@extends('layout')
@section('content')
<div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid">

<section id="horizontal-form-layouts">

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title-wrap bar-success">
						<h4 class="card-title" id="horz-layout-basic">General Settings Form </h4>
					</div>
					<p class="mb-0">This is the basic horizontal form with labels on left and cost estimation form is the default position.</p>
				</div>
				<div class="card-body">
					<div class="px-3">


						<form class="form form-horizontal" action= "{{url('general_settings/' . 1)}}" method="POST">
							{{csrf_field()}}
							@method("PATCH")
							<div class="form-body">
								<h4 class="form-section">
									<i class="icon-user"></i>General information</h4>
                     
          <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput1">The extra: </label>
									<div class="col-md-9">
										<input type="text" id="projectinput1" class="form-control" name="extra"  value="{{$general_settings->extra}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput2">
                                        Discount: </label>
									<div class="col-md-9">
										<input type="text" id="projectinput2" class="form-control" name="discount" value="{{$general_settings->discount}}" >
									</div>
								</div>


								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput7">Weekly Holidays: </label>
									<div class="col-md-9">
                     

										<input type="checkbox" id="vehicle1" name="day1" value="satrday" <?php if( $general_settings['weekend1'] == 'satrday'){echo "checked";} ?>  >
										<label for="cairo">Satrday</label><br>
										<input type="checkbox" id="vehicle2" name="day2" value="Sunday" <?php if( $general_settings['weekend2'] == 'Sunday'){echo "checked";} ?>>
										<label for="sun"> Sunday</label><br>
										<input type="checkbox" id="vehicle3" name="day3" value="Monday" <?php if( $general_settings['weekend3'] == 'Monday'){echo "checked";} ?>>
										<label for="mon"> Monday</label><br>
										<input type="checkbox" id="vehicle4" name="day4" value="Tuesday" <?php if( $general_settings['weekend4'] == 'Tuesday'){echo "checked";} ?>>
										<label for="tue"> Tuesday</label><br>
										<input type="checkbox" id="vehicle5" name="day5" value="Wednesday" <?php if( $general_settings['weekend5'] == 'Wednesday'){echo "checked";} ?>>
										<label for="wed">Wednesday</label><br>
										<input type="checkbox" id="vehicle6" name="day6" value="Turthday" <?php if( $general_settings['weekend6'] == 'Turthday'){echo "checked";} ?>>
										<label for="tur"> Turthday</label><br> 
										<input type="checkbox" id="vehicle7" name="day7" value="friday" <?php if( $general_settings['weekend7'] == 'friday'){echo "checked";} ?>  >
										<label for="alexandria">Friday</label><br>
                                          
									</div>
								</div>
   

							<div class="form-actions">
                              <button class="btn btn-success mb-2" type="submit"  >Update </button>
							</div>
			        </form>

      
					</div>
				</div>
			</div>
		</div>
	</div>
  

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
</div>
@endsection
