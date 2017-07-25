@extends('layouts.default')

@section('content')
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-12">
                    <h2>Map</h2>

                    <!-- <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol> -->
                </div>
                <!-- <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary">This is action area</a>
                    </div>
                </div> -->
            </div>

            <div id="map" style="height:700px"></div>

            


  @endsection


  @section('extra_script')
  <script>


     var map;
     function viewmaptask() {
       map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: 20.5937, lng: 78.9629},
         zoom: 3
       });

  @if(count($locations) > 0);

       @foreach($locations as $location)
         var location = new google.maps.LatLng('{{$location->lat}}', '{{$location->lng}}');
         var marker = new google.maps.Marker({
           position: location,
           map: map,
           title: 'LatLng (Ayers Rock)'
         });
       var infoWindow = new google.maps.InfoWindow();
       google.maps.event.addListener(marker, 'click', function () {
                var markerContent = '<div id="content">'+
                   '<div id="siteNotice">'+
                   '</div>'+
                   '<h1 id="firstHeading" class="firstHeading">Address</h1>'+
                   '<b>'+'{{$location->location}}'+'</b>'+
                   '<div id="bodyContent">'+
                   '<p></br><h2>Description</h2></br>' +
                   '<b>'+'{{$location->description}}'+'</b>.</p>'+
                   '</div>'+
                   '</div>';
                infoWindow.setContent(markerContent);
                infoWindow.open(map, this);
            });
      @endforeach
     @endif




   }
   </script>

  @endsection
