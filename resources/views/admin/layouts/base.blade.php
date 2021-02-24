<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Exam 2021</title>

    <!-- vendor css -->
   {{--  {{asset('/admin/')}} --}}
    <link href="{{asset('/admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/lib/summernote/summernote-bs4.css')}}" rel="stylesheet">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href=" {{asset('/admin/css/starlight.css')}}">
    {{-- Toaster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="">CRUD Exam</a></div>
    <div class="sl-sideleft">
      

      <div class="sl-sideleft-menu">
        <a href="{{route('dashboard.index')}}" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{route('category.index')}}" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Category</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-cart tx-20"></i>
            <span class="menu-item-label">Product</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('product.index')}}" class="nav-link">Product List</a></li>
          <li class="nav-item"><a href="{{route('product.create')}}" class="nav-link">Add Product</a></li>
        </ul>

        {{-- <a href="{{route('catpro.index')}}" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-gear-b tx-20"></i>
            <span class="menu-item-label">Product Category</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link --> --}}
        
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name"><span class="hidden-md-down"> {{auth()->user()->name}}</span></span>
              <img src="{{asset('/admin/img/img3.jpg')}}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>

                <li><form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();"><i class="icon ion-power"></i> Sign Out</a>
                  </form></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    

    <!-- ########## START: MAIN PANEL ########## -->
    <!-- ########## END: MAIN PANEL ########## -->
    @yield('content')
    <script src="{{asset('/admin/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('/admin/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('/admin/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('/admin/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('/admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('/admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('/admin/lib/d3/d3.js')}}"></script>
    <script src="{{asset('/admin/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('/admin/lib/chart.js/Chart.js')}}"></script>
    <script src="{{asset('/admin/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('/admin/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('/admin/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('/admin/lib/flot-spline/jquery.flot.spline.js')}}"></script>


    <script src="{{asset('/admin/js/starlight.js')}}"></script>
    <script src="{{asset('/admin/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('/admin/js/dashboard.js')}}"></script>
    
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="{{asset('/admin/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/admin/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    <script>
      @if(Session::has('message'))
        var type = "{{Session::get('alert-type')}}";
        switch(type){
          case 'info':
            toastr.info("{{Session::get('message')}}");
            break;
          case 'success':
            toastr.success("{{Session::get('message')}}");
            break;
          case 'warning':
            toastr.warning("{{Session::get('message')}}");
            break;
          case 'error':
            toastr.error("{{Session::get('message')}}");
            break;
        }
      @endif
      
      @if($errors->any())
          @foreach ($errors->all() as $error)
            toastr.error("{{$error}}");  
          @endforeach
      @endif
      $(function(){
        'use strict';
        $('#datatable1').DataTable({
          responsive: true,
          searching: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          responsive: true,
          searching: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });
        
      });
    </script>
    <script src="{{asset('/admin/lib/medium-editor/medium-editor.js')}}"></script>
    <script src="{{asset('/admin/lib/summernote/summernote-bs4.min.js')}}"></script>
     <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>
    
  </body>
</html>
