<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Empty Page</title>

    <link href="/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/inspinia/css/plugins/iCheck/custom.css" rel="stylesheet">
<!--caleander css-->

  <link href="/inspinia/css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
  <link href="/inspinia/css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.css">



    <link href="/inspinia/css/animate.css" rel="stylesheet">
    <link href="/inspinia/css/style.css" rel="stylesheet">

</head>

<body class="">

    <div id="wrapper">
<!--left nav header start-->
  @include('includes.left_nav')
    <!--left nav header end-->

      <!-- header start -->
         @include('includes.header')
        <div id="page-wrapper" class="gray-bg">
       <!-- header start  end-->
          @yield('content')

       <!-- footer start -->
           @include('includes.footer')
        <!-- footer start -->

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="/inspinia/js/jquery-2.1.1.js"></script>
    <script src="/inspinia/js/bootstrap.min.js"></script>
    <script src="/inspinia/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/inspinia/js/plugins/pace/pace.min.js"></script>


<!-- iCheck -->
<script src="/inspinia/js/plugins/iCheck/icheck.min.js"></script>

<!--caleander js-->
<!-- Full Calendar -->
<script src="/inspinia/js/plugins/fullcalendar/moment.min.js"></script>
<script src="/inspinia/js/plugins/fullcalendar/fullcalendar.min.js"></script>

<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css"></link>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMzHr6VJOy9WoiAs6Dofg_iqMDCEtF95U&libraries=places&callback=initMap"
async defer></script>

@yield('extra_script')

<script>
     function initMap()
     {
      var url =  '{{Request::url()}}';
      var result = url.split("/");
      if(result[3] == 'manageuser')
        viewmaptask();
      else if(result[3] == 'map' && result[5] =='create')
       createmap();
      else if(result[3] == 'map' && result[5] =='view')
       viewmap();
     }
</script>

</body>

</html>
