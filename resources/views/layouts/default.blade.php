<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Empty Page</title>

    <link href="/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">
<!--caleander css-->




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
<!--caleander js-->



</body>

</html>
