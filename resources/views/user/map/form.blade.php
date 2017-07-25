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
                                      <input id="autocomplete" name="location"  placeholder="Enter your address"
                                             onFocus="geolocate()" type="text"  class="form-control" required></input>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Task</label>
                                    <div class="col-lg-10">
                                      <textarea id="description"  name="description" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <input  name="lat" class="form-control"  id="lat" type="hidden">
                                <input name="lng" class="form-control"  id="lng"  type="hidden">
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
      var placeSearch, autocomplete;
      var map;
      var marker;
      function createmap() {
        var LatLng = {lat:-25.996672326320144, lng:134.38384374999998 };
        autocomplete = new google.maps.places.Autocomplete( (document.getElementById('autocomplete')),
            {types: ['geocode']});
        var geocoder = new google.maps.Geocoder;
          var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: LatLng,
        });

         marker = new google.maps.Marker({
          position: LatLng,
          map: map,
          draggable: true
        });

        google.maps.event.addListener(marker, 'dragend', function(evt) {

            geocoder.geocode( { 'location': evt.latLng}, function(results, status) {
              if (status == 'OK') {
                var location = results[0].formatted_address;
                alert(location);
                 $('#autocomplete ').val(location);
              } else {
                alert('Geocode was not successful for the following reason: ' + status);
              }
            });
            var lat = evt.latLng.lat();
            var lng = evt.latLng.lng();
            $('#lat').val(lat);
            $('#lng').val(lng);

          });

            google.maps.event.addListener(map, 'click', function(evt) {
              geocoder.geocode( { 'location': evt.latLng}, function(results, status) {
                if (status == 'OK') {
                  var location = results[0].formatted_address;
                  alert(location);
                   $('#autocomplete').val(location);
                } else {
                  alert('Geocode was not successful for the following reason: ' + status);
                }
              });

              var lat = evt.latLng.lat();
              var lng = evt.latLng.lng();
              $('#lat').val(lat);
              $('#lng').val(lng);

              marker.setPosition(evt.latLng);
            });

        autocomplete.addListener('place_changed', fillInAddress);

      }
      function fillInAddress() {
        // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();
            var lat =  place.geometry.location.lat()
            var lng =  place.geometry.location.lng()
                $('#lat').val(lat);
                $('#lng').val(lng);
                marker.setPosition(place.geometry.location);
                marker.getMap().setCenter(place.geometry.location);
      }

      function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
            };
          autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
@endsection
