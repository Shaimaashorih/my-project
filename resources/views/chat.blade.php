@extends('layout')
@section('content')

<div class="main-panel">
  <div class="main-content">
    <div class="content-wrapper">
      <div class="container-fluid"><div class="chat-application mt-2">
<div class="content-overlay"></div>
<div class="chat-sidebar float-left d-none d-sm-none d-md-block d-lg-block">
<div class="chat-sidebar-content">
<div class="chat-fixed-search p-2">
  <form>
    <div class="position-relative has-icon-left">
      <input class="form-control" id="timesheetinput1" name="employeename" type="text">
      <div class="form-control-position">
        <i class="ft-user"></i>
      </div>
    </div>
  </form>
</div>  
<div id="users-list" class="list-group position-relative">
  <div class="users-list-padding">
    <a class="list-group-item bg-blue-grey bg-lighten-5 border-right-primary border-right-2">  <!-- (click)="SetActive($event, 'chat1')" -->
      <span class="media">
        <span class="avatar avatar-md avatar-online mr-2">
          <img class="media-object d-flex mr-3 bg-primary rounded-circle" src="{{URL::asset('app-assets/img/portrait/small/avatar-s-8.jpg')}}"
            alt="Generic placeholder image">
          <i></i>
        </span>
        <div class="media-body">
          <h6 class="list-group-item-heading">Elizabeth Elliott
            <span class="float-right info">4:14 AM</span>
          </h6>
          <p class="list-group-item-text text-muted">
            <i class="ft-check info font-small-2"></i> Okay
            <span class="float-right info">
              <i class="font-medium-1 icon-pin blue-grey lighten-3"></i>
            </span>
          </p>
        </div>
      </span>
    </a>
    <a class="list-group-item no-border">  <!-- (click)="SetActive($event,'chat2')" -->
      <span class="media">
        <span class="avatar avatar-md avatar-busy mr-2">
          <img class="media-object d-flex mr-3 bg-primary rounded-circle" src="{{URL::asset('app-assets/img/portrait/small/avatar-s-7.jpg')}}"
            alt="Generic placeholder image">
          <i></i>
        </span>
        <div class="media-body">
          <h6 class="list-group-item-heading">Kristopher Candy
            <span class="float-right info">9:04 PM</span>
          </h6>
          <p class="list-group-item-text text-muted">
            <i class="ft-check info font-small-2"></i> Thank you
            <span class="float-right 
                  info">
              <span class="badge badge-pill badge-info">12</span>
            </span>
          </p>
        </div>
      </span>
    </a>
    <a class="list-group-item no-border">  <!-- (click)="SetActive($event,'chat3')" -->
      <span class="media">
        <span class="avatar avatar-md avatar-away mr-2">
          <img class="media-object d-flex mr-3 bg-primary rounded-circle" src="{{URL::asset('app-assets/img/portrait/small/avatar-s-27.jpg')}}"
            alt="Generic placeholder image">
          <i></i>
        </span>
        <div class="media-body">
          <h6 class="list-group-item-heading">Sarah Woods
            <span class="float-right info">2:14 AM</span>
          </h6>
          <p class="list-group-item-text text-muted">
            <i class="ft-check font-small-2"></i> Hello krish!
            <span class="float-right info">
              <i class="font-medium-1 icon-volume-off blue-grey lighten-3 mr-1"></i>
              <span class="badge badge-pill badge-info">3</span>
            </span>
          </p>
        </div>
      </span>
    </a>
    <a class="list-group-item no-border">  <!-- (click)="SetActive($event,'chat4')" -->
      <span class="media">
        <span class="avatar avatar-md avatar-away mr-2">
          <img class="media-object d-flex mr-3 bg-primary rounded-circle" src="../app-assets/img/portrait/small/avatar-s-5.jpg"
            alt="Generic placeholder image">
          <i></i>
        </span>
        <div class="media-body">
          <h6 class="list-group-item-heading">Bruce Reid
            <span class="float-right info">Yesterday</span>
          </h6>
          <p class="list-group-item-text text-muted">
            <i class="ft-check font-small-2"></i> Will connect you</p>
        </div>
      </span>
    </a>
    <a class="list-group-item no-border">  <!-- (click)="SetActive($event,'chat5')" -->
      <span class="media">
        <span class="avatar avatar-md avatar-online mr-2">
          <img class="media-object d-flex mr-3 bg-primary rounded-circle" src="../app-assets/img/portrait/small/avatar-s-9.jpg"
            alt="Generic placeholder image">
          <i></i>
        </span>
        <div class="media-body">
          <h6 class="list-group-item-heading">Heather Howell
            <span class="float-right info">Friday</span>
          </h6>
          <p class="list-group-item-text text-muted">
            <i class="ft-check font-small-2"></i> Thank you
            <span class="float-right info">
              <span class="badge badge-pill badge-info">4</span>
            </span>
          </p>
        </div>
      </span>
    </a>
    <a class="list-group-item no-border">  <!-- (click)="SetActive($event,'chat6')" -->
      <span class="media">
        <span class="avatar avatar-md avatar-busy mr-2">
          <img class="media-object d-flex mr-3 bg-primary rounded-circle" src="../app-assets/img/portrait/small/avatar-s-4.jpg"
            alt="Generic placeholder image">
          <i></i>
        </span>
        <div class="media-body">
          <h6 class="list-group-item-heading">Kelly Reyes
            <span class="float-right info">Thrusday</span>
          </h6>
          <p class="list-group-item-text text-muted">
            <i class="ft-check font-small-2"></i> I love you </p>
        </div>
      </span>
    </a>
    <a class="list-group-item no-border">  <!-- (click)="SetActive($event,'chat7')" -->
      <span class="media">
        <span class="avatar avatar-md avatar-online mr-2">
          <img class="media-object d-flex mr-3 bg-primary rounded-circle" src="../app-assets/img/portrait/small/avatar-s-14.jpg"
            alt="Generic placeholder image">
          <i></i>
        </span>
        <div class="media-body">
          <h6 class="list-group-item-heading">Vincent Nelson
            <span class="float-right info">09/03/2018</span>
          </h6>
          <p class="list-group-item-text text-muted">
            <i class="ft-check info font-small-2"></i> Who you are?</p>
        </div>
      </span>
    </a>
    <a class="list-group-item bg-blue-grey bg-lighten-5 border-right-primary border-right-2">  <!-- (click)="SetActive($event, 'chat1')" -->
      <span class="media">
        <span class="avatar avatar-md avatar-online mr-2">
          <img class="media-object d-flex mr-3 bg-primary rounded-circle" src="../app-assets/img/portrait/small/avatar-s-8.jpg"
            alt="Generic placeholder image">
          <i></i>
        </span>
        <div class="media-body">
          <h6 class="list-group-item-heading">Elizabeth Elliott
            <span class="float-right info">4:14 AM</span>
          </h6>
          <p class="list-group-item-text text-muted">
            <i class="ft-check info font-small-2"></i> Okay
            <span class="float-right info">
              <i class="font-medium-1 icon-pin blue-grey lighten-3"></i>
            </span>
          </p>
        </div>
      </span>
    </a>
    <a class="list-group-item no-border">  <!-- (click)="SetActive($event,'chat2')" -->
      <span class="media">
        <span class="avatar avatar-md avatar-busy mr-2">
          <img class="media-object d-flex mr-3 bg-primary rounded-circle" src="{{URL::asset('app-assets/img/portrait/small/avatar-s-7.jpg')}}"
            alt="Generic placeholder image">
          <i></i>
        </span>
        <div class="media-body">
          <h6 class="list-group-item-heading">Kristopher Candy
            <span class="float-right info">9:04 PM</span>
          </h6>
          <p class="list-group-item-text text-muted">
            <i class="ft-check info font-small-2"></i> Thank you
            <span class="float-right 
                  info">
              <span class="badge badge-pill badge-info">12</span>
            </span>
          </p>
        </div>
      </span>
    </a>
    <a class="list-group-item no-border">  <!-- (click)="SetActive($event,'chat3')" -->
      <span class="media">
        <span class="avatar avatar-md avatar-away mr-2">
          <img class="media-object d-flex mr-3 bg-primary rounded-circle" src="{{URL::asset('app-assets/img/portrait/small/avatar-s-27.jpg')}}"
            alt="Generic placeholder image">
          <i></i>
        </span>
        <div class="media-body">
          <h6 class="list-group-item-heading">Sarah Woods
            <span class="float-right info">2:14 AM</span>
          </h6>
          <p class="list-group-item-text text-muted">
            <i class="ft-check font-small-2"></i> Hello krish!
            <span class="float-right info">
              <i class="font-medium-1 icon-volume-off blue-grey lighten-3 mr-1"></i>
              <span class="badge badge-pill badge-info">3</span>
            </span>
          </p>
        </div>
      </span>
    </a>
  </div>
</div>
</div>
</div>
<div class="chat-name p-2 bg-white">
<div class="media">
  <span class="chat-app-sidebar-toggle ft-align-justify font-large-1 mr-2 d-none d-block d-sm-block d-md-none"></span>
  <img src="{{URL::asset('app-assets/img/portrait/small/avatar-s-8.jpg')}}" width="37" class="rounded-circle mr-1" alt="avatar" />
  <div class="media-body">
    <span class="float-left">
      Elizabeth Elliott
      <p class="success font-small-2 m-0">Online</p>
    </span>
    <i class="ft-more-vertical float-right mt-1"></i>
  </div>
</div>
</div>
<section class="chat-app-window">
<div class="badge badge-dark mb-1">Chat History</div>
<div class="chats">
<div class="chats">
  <div class="chat">
    <div class="chat-avatar">
      <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
          <img src="{{URL::asset('app-assets/img/portrait/small/avatar-s-1.jpg')}}" class="width-50 rounded-circle" alt="avatar" />
      </a>
    </div>
    <div class="chat-body">
      <div class="chat-content">
        <p>How can we help? We're here for you!</p>
      </div>
    </div>
  </div>
  <div class="chat chat-left">
    <div class="chat-avatar">
      <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
        <img src="{{URL::asset('app-assets/img/portrait/small/avatar-s-8.jpg')}}" class="width-50 rounded-circle" alt="avatar" />
      </a>
    </div>
    <div class="chat-body">
      <div class="chat-content">
        <p>Hey John,  I am looking for the best admin template.</p>
      </div>
      <div class="chat-content">
        <p>Could you please help me to find it out?</p>
      </div>
      <div class="chat-content">
        <p>It should be Bootstrap 4 compatible.</p>
      </div>
    </div>
  </div>
  <p class="time">1 hours ago</p>
  <div class="chat">
    <div class="chat-avatar">
      <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
        <img src="{{URL::asset('app-assets/img/portrait/small/avatar-s-1.jpg')}}" class="width-50 rounded-circle" alt="avatar" />
      </a>
    </div>
    <div class="chat-body">
      <div class="chat-content">
        <p>Absolutely!</p>
      </div>
      <div class="chat-content">
        <p>Convex admin is the responsive bootstrap 4 admin template.</p>
      </div>
    </div>
  </div>
  <p class="time">30 minutes ago</p>
  <div class="chat chat-left">
    <div class="chat-avatar">
      <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
        <img src="{{URL::asset('app-assets/img/portrait/small/avatar-s-8.jpg')}}" class="width-50 rounded-circle" alt="avatar" />
      </a>
    </div>
    <div class="chat-body">
      <div class="chat-content">
        <p>Can you provide me audio link?</p>
      </div>
    </div>
  </div>
  <p class="time">20 minutes ago</p>
  <div class="chat">
    <div class="chat-avatar">
      <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
        <img src="{{URL::asset('app-assets/img/portrait/small/avatar-s-1.jpg')}}" class="width-50 rounded-circle" alt="avatar" />
      </a>
    </div>
    <div class="chat-body">
      <div class="chat-content">
        <p>Audio</p>
      </div>
    </div>
  </div>
  <div class="chat chat-left">
    <div class="chat-avatar">
      <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
        <img src="{{URL::asset('app-assets/img/portrait/small/avatar-s-8.jpg')}}" class="width-50 rounded-circle" alt="avatar" />
      </a>
    </div>
    <div class="chat-body">
      <div class="chat-content">
        <p>Can you provide me video link?</p>
      </div>
    </div>
  </div>
  <p class="time">10 minutes ago</p>
  <div class="chat">
    <div class="chat-avatar">
      <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
        <img src="{{URL::asset('app-assets/img/portrait/small/avatar-s-1.jpg')}}" class="width-50 rounded-circle" alt="avatar" />
      </a>
    </div>
    <div class="chat-body">
      <div class="chat-content">
        <p>Video</p>
      </div>
    </div>
  </div>
  <div class="chat chat-left">
    <div class="chat-avatar">
      <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
        <img src="{{URL::asset('app-assets/img/portrait/small/avatar-s-8.jpg')}}" class="width-50 rounded-circle" alt="avatar" />
      </a>
    </div>
    <div class="chat-body">
      <div class="chat-content">
        <p>Looks clean and fresh UI.</p>
      </div>
      <div class="chat-content">
        <p>It is perfect for my next project.</p>
      </div>
      <div class="chat-content">
        <p>How can I purchase it?</p>
      </div>
    </div>
  </div>
  <p class="time">just now</p>
  <div class="chat">
    <div class="chat-avatar">
      <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
        <img src="{{URL::asset('app-assets/img/portrait/small/avatar-s-1.jpg')}}" class="width-50 rounded-circle" alt="avatar" />
      </a>
    </div>
    <div class="chat-body">
      <div class="chat-content">
        <p>Thanks, from ThemeForest.</p>
      </div>
    </div>
  </div>
  <div class="chat chat-left">
    <div class="chat-avatar">
      <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
        <img src="{{URL::asset('app-assets/img/portrait/small/avatar-s-8.jpg')}}" class="width-50 rounded-circle" alt="avatar" />
      </a>
    </div>
    <div class="chat-body">
      <div class="chat-content">
        <p>I will purchase it for sure.</p>
      </div>
      <div class="chat-content">
        <p>Thanks.</p>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<section class="chat-app-form bg-blue-grey bg-lighten-5">
<form class="chat-app-input row">
<fieldset class="form-group position-relative has-icon-left col-lg-10 col-8 m-0">
  <div class="form-control-position">
    <i class="icon-emoticon-smile"></i>
  </div>
  <input type="text" class="form-control" id="iconLeft4" placeholder="Type your message"
   >
  <div class="form-control-position control-position-right">
    <i class="ft-image"></i>
  </div>
</fieldset>
<fieldset class="form-group position-relative has-icon-left col-lg-2 col-4 m-0">
  <button type="button" class="btn btn-info">
    <i class="fa fa-paper-plane-o hidden-lg-up"></i> Send</button>
</fieldset>
</form>
</section>
</div>
      </div>
    </div>
  </div>

  <footer class="footer footer-static footer-light">
    <p class="clearfix text-muted text-center px-2"><span>Copyright  &copy; 2021 <a href="https://pioneers-solutions.com/" id="pixinventLink" 
      target="_blank" class="text-bold-800 primary darken-2">pioneers-solutions </a>, All rights reserved. </span></p>
  </footer>

</div>
</div>
@endsection