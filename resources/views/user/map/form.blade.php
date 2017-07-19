@extends('layouts.default')

@section('content')
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Dashboard</h2>
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
          <div class="row">
            <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Horizontal form</h5>

                        </div>
                        <div class="ibox-content">
                          <form action="/map/location/create"  method="post"  class="form-horizontal" >
                              {{csrf_field()}}

                                <div class="form-group"><label class="col-lg-2 control-label">Location</label>

                                    <div class="col-lg-10">
                                      <input name="location" placeholder="Locations" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Task</label>
                                    <div class="col-lg-10">
                                      <textarea  name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <input  name="lat" class="form-control" type="hidden" id="lat">
                                <input name="lng" class="form-control" type="hidden" id="lng">
                                <div class="form-group">

                                    <div class="col-lg-10">
                                      <button type="submit">submit</button>
                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
             </div>
             <div class=" row">
               <div class=" ibox-content col-lg-12">

                 <div id="map" style="height:400px"></div>
               </div>
            </div>

@endsection

@section('extra_script')
<script>
    function initMap() {
      var LatLng = {lat:24.64790459281855, lng: 76.46392187499998};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: LatLng,
        draggable: true
      });
      var marker = new google.maps.Marker({
        position: LatLng,
        map: map,
        draggable:true,
      });

      google.maps.event.addListener(marker, 'dragend', function(evt) {
      var lat = evt.latLng.lat();
      var lng = evt.latLng.lng();
      $('#lat').val(lat);
      $('#lng').val(lng);
});

    }
  </script>

@endsection
