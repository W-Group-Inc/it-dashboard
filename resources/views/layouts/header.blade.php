<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @php
  ini_set('upload_max_filesize', '1000M');
  ini_set('post_max_size', '100M');
  ini_set('max_input_time', '1000');
  ini_set('max_execution_time', '1000');
  ini_set('memory_limit', '-1');
  @endphp
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IT Ticketing</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- endinject -->
 
    <link rel="icon" type="image/png" href="{{ asset('/img/sap-icon.png')}}" />
    <link href="{{ asset('/inside/login_css/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <link href="{{ asset('/inside/login_css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    @yield('css')
    <link href="{{ asset('/inside/login_css/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('/inside/login_css/css/style.css')}}" rel="stylesheet">
   
  <!-- End plugin css for this page -->
    <style>
      .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }
      /* width */
      ::-webkit-scrollbar {
        width: 5px;
      }
      
      /* Track */
      ::-webkit-scrollbar-track {
        background: #f1f1f1; 
      }
       
      /* Handle */
      ::-webkit-scrollbar-thumb {
        background: #aee1f5; 
      }
      
      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
        background: #2596be; 
      }
      .loader {
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background: url("{{ asset('/images/3.gif')}}") 50% 50% no-repeat white ;
          opacity: .8;
          background-size:120px 120px;
      }
      
      .dataTables_filter {
        float: right;
        text-align: right;
        }
        .dataTables_info {
        float: left;
        text-align: left;
        }
        .shownext { display: none; }
        li:hover + .shownext { display: block; }
    </style>
</head>
<body class="top-navigation">
    <div id = "loader" style="display:none;" class="loader">
    </div>
    <div id="wrapper">
      <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg ">
          <nav class="navbar navbar-static-top container" role="navigation">
              <div class="navbar-header ">
                  <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                      <i class="fa fa-reorder"></i>
                  </button>
                  <a href="{{url('/report')}}" onclick='show();' class="align-middle" > <img  style='margin-top:10px;margin-left:25px;margin-bottom:5px;' src="{{URL::asset('/img/sap-logo.png')}}" height='45px' alt="AVATAR"></a>
              </div>
              <div class="navbar-collapse collapse justify-content-center" id="navbar">
                <ul class="nav navbar-nav">
                  <li class="">
                      <a aria-expanded="false" role="button" href="{{url('/')}}">Ticketing</a>
                  </li>
                  {{-- <li class="">
                      <a aria-expanded="false" role="button" href="{{url('/servers')}}">Servers/Biometrics</a>
                  </li>  
                  <li class="">
                      <a aria-expanded="false" role="button" href="{{url('/systems')}}">SCRF</a>
                  </li> --}}
                 
              </ul>
              </div>
          </nav>
        </div>
          @yield('content')
      
        <div class="footer">
          <div class="pull-right">
            <strong>WGROUP</strong> DEVELOPER &copy; {{date('Y')}}
          </div>
        </div>
    </div>
 
<script>
    function show() {
                document.getElementById("loader").style.display="block";
    }
    function logout() {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }
</script>
<!-- Mainly scripts -->
<script src="{{ asset('inside/login_css/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{ asset('inside/login_css/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('inside/login_css/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{ asset('inside/login_css/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('inside/login_css/js/inspinia.js')}}"></script>
<script src="{{ asset('inside/login_css/js/plugins/pace/pace.min.js')}}"></script>
{{-- @include('sweetalert::alert') --}}
@yield('footer')
<script>
   function myFunction() {

        var input = document.getElementById("Search");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('target');

        for (i = 0; i < nodes.length; i++) {
            if (nodes[i].innerText.toLowerCase().includes(filter)) {
                nodes[i].style.display = "";
            } else {
                nodes[i].style.display = "none";
            }
        }
    }
    function myFunction1() {

    var input = document.getElementById("Search1");
    var filter = input.value.toLowerCase();
    var nodes = document.getElementsByClassName('target1');

    for (i = 0; i < nodes.length; i++) {
        if (nodes[i].innerText.toLowerCase().includes(filter)) {
            nodes[i].style.display = "";
        } else {
            nodes[i].style.display = "none";
        }
    }
    }
</script>
</body>
</html>
