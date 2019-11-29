<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SU Botswana - Edit Event</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('dash/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('css/jquery.simple-dtpicker.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
 
  <link rel="stylesheet" href="{{asset('dash/dist/css/adminlte.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('dash/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

  
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="index3.html" class="navbar-brand">
        
        <span class="brand-text font-weight-heavy">SU - Botswana</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

     <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
      
        <!-- Notifications Dropdown Menu -->
        
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
              class="fas fa-user"></i>
            Coordinator
            </a>
        </li>
      </ul>
    </div>
  </nav>
 

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-2"></div>
          <div class="col-lg-8">

       @if(count($errors) > 0)
<div class="alert alert-danger">
       <ul>
       @foreach($errors->all() as $error)
        <li>{{$error}}</li>
       @endforeach
       </ul>
@endif
</div>
          <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">            
              Edit Event           
            </h3>

         </div>

  
          <div class="card-body">         
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                <form method="post" action="{{action('EventController@update', $id)}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH" />
                     
                     <div class="form-group">
                            <input type="text" value="{{$event->event_name}}" required class="form-control" name="title" placeholder="Title">
                     </div>
                        <div class="form-group">
                         <div class="row">
                                <div class="col-lg-6">
                                <label for="">Start Date</label>
                                <input type="text"  name="start_date" class="form-control" value="{{$event->start_date}}">
                         
                            </div>
                                <div class="col-lg-6">
                                       <label for="">End Date</label>
                                   <input type="text" required name="end_date" class="form-control" value="{{$event->end_date}}">
                       
                            </div>
                         </div>
                       </div>
                       <div class="form-group">
                            <input type="text" required class="form-control" name="location" value="{{$event->event_venue}}" placeholder="Location">
                     </div>

                     <div class="form-group">
                            <input type="submit" required class="btn btn-primary btn-flat" name="submit" value="Save Changes">
                     </div>
                     </form>                    
                </div>
              </div>
            </div>
          </div>
        
        </div>
          </div>
          <div class="col-lg-2"></div>
        
        <!-- tabs-->
       
       
      </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <div class="modal fade" id="compose">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Compose a messsage</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="">
                  <div class="form-group">
                      <input type="text" name="receipient" class="form-control" placeholder="to">
                  </div>
                  <div class="form-group">
                      <input type="text" name="subject" class="form-control" placeholder="subject">
                  </div>
                  <div class="form-group">
                     <textarea name="message" id="" class="form-control" placeholder="message" ></textarea>
                   </div>
                   <div class="form-group">
                      <input type="file" name="attachment"  class="form-control" placeholder="subject">
                  </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Send</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



<script src="{{asset('dash/plugins/moment/moment.min.js')}}"></script>

<script src="{{asset('dash/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{asset('dash/dist/js/adminlte.js')}}"></script>
<script src="{{asset('js/sdp/jquery.simple-dtpicker.js')}}"></script>
<script>
$(document).ready(function(){
    $(function(){
       $('*[name=start_date]').appendDtpicker({					
		
              "closeOnSelected": true
	});
       $('*[name=end_date]').appendDtpicker({					
		
              "closeOnSelected": true
	});
    });
				
});
</script>
</body>
</html>
