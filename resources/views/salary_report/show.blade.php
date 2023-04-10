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
                     
                        
                </div>
                             
                       
              
             
             
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
                            @foreach ($attendances as $attendances)
                                
                            
 
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
                                    
                                </tr>
                            @endforeach    

                     
                        </tbody>
            
            
                    </table>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 text-left">
                            <p class="lead">Payment Methods:</p>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-borderless table-sm">
                                        <tbody>
                                            <tr>
                                                <td>Bank name:</td>
                                                <td class="text-right" id="bank">ABC Bank, USA</td>
                                            </tr>
                                            <tr>
                                                <td>Acc name:</td>
                                                <td class="text-right">Amanda Orton</td>
                                            </tr>
                                            <tr>
                                                <td>IBAN:</td>
                                                <td class="text-right">FGS165461646546AA</td>
                                            </tr>
                                            <tr>
                                                <td>SWIFT code:</td>
                                                <td class="text-right">BTNPP34</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="lead">Total due</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Sub Total</td>
                                            <td class="text-right"><?php 
                                             echo round($total , 2);
                                             ?>
                                              </td>
                                        </tr>
                                        <tr>
                                            <td>TAX (12%)</td>
                                            <td class="text-right">
                                              <?php 
                                               $tax = $total*12 / 100;
                                               echo  round($tax , 2);
                                              ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-800">Total</td>
                                            <td class="text-bold-800 text-right">
                                              <?php
                                              $fulltotal = $total + $tax;
                                              echo "$" .round( $fulltotal , 2);
                                              ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Payment Made</td>
                                            <td class="pink text-right">
                                              <?php 
                                              $payment = 4688;
                                              echo "$" . $payment;
                                              ?>
                                            </td>
                                        </tr>
                                        <tr class="bg-grey bg-lighten-4">
                                            <td class="text-bold-800">Balance Due</td>
                                            <td class="text-bold-800 text-right">
                                              <?php 
                                              $balance = $fulltotal - $payment;
                                              echo "$". round($balance , 2);  
                                              ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center">
                                <p>Authorized person</p>
                                <img src="../app-assets/img/pages/signature-scan.png" alt="signature" class="width-250">
                                <h6>Amanda Orton</h6>
                                <p class="text-muted">Managing Director</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Invoice Footer -->
                <div id="invoice-footer">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <h6>Terms &amp; Condition</h6>
                            <p>You know, being a test pilot isn't always the healthiest business in the world. We predict too
                                much for the next year and yet far too little for the next 10.</p>
                        </div>
                        <div class="col-md-3 col-sm-12 text-center">
                            <button type="button" class="btn btn-primary my-1"><i class="fa fa-paper-plane-o"></i> Send Invoice</button>
                        </div>
                    </div>
                </div>
                <!--/ Invoice Footer -->
            </div>
        </div>
    </div>
</section>
<!--Invoice template ends-->
            </div>
</div>
</div>

<footer class="footer footer-static footer-light">
<p class="clearfix text-muted text-center px-2"><span>Copyright  &copy; 2021 <a href="#" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">Pioneer solutions </a>, All rights reserved. </span></p>
</footer>

</div>
</div>

@endsection