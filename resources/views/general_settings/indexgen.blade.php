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

                       

                        
                            <a href="{{ url('general_settings/' . 1) . '/edit'}}">
                              <button class="btn btn-success mb-2" id="go" > show or update </button>
                            </a>
                          
				
      
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
