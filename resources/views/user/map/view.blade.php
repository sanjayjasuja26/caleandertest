@extends('layouts.default')

@section('content')
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Location Map</h2>
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
                        <a href="/map/location/create" class="btn btn-primary">create</a>
                    </div>
                </div> -->
            </div>

            <div class="wrapper wrapper-content">
              <div class="col-lg-6 col-lg-offset-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                      <div class="row">
                       <div class="col-lg-12" style="text-align:center">
                         <h2 style="color:blue">Location details</h2>
                       </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-lg-6">
                          Location
                        </div>
                        <div class="col-lg-6" >
                          {{$location}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-lg-6" >
                        Description
                        </div>
                        <div class="col-lg-6" >
                         {{$description}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-lg-6" >
                          Created_at
                        </div>
                        <div class="col-lg-6" >
                          {{$created_at}}
                        </div>
                      </div>



                    </div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">

               <div id="map" style="height:400px"></div>

            </div>
          </div>


    @endsection

    @section('extra_script')
    <script>

        function initMap() {
          var LatLng = {lat:{{$lat}}, lng:{{$lng}} };
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
