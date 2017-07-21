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
            @if(count($locations) > 0)
            <div id="map" style="height:400px"></div>

           @else
           <div style="text-align:center">
              <h2>NO data avilabel</h2>
           </div>
           @endif


  @endsection


  @section('extra_script')
  <script>
    var lat ={{$locations->lat}};
    var lng ={{$locations->lng}};

      function initMap() {
        var LatLng ={lat:lat,lng:lng};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: LatLng,
          draggable: true

        });


        var marker = new google.maps.Marker({
          position: LatLng,
          map: map,

        });





      }
    </script>

  @endsection
