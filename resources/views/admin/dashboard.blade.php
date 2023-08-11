@extends('layouts.admin')

@section('content')
  <div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
      <!-- Status  -->
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="stat-widget-five">
                <div class="stat-icon dib flat-color-3">
                  <i class="pe-7s-drop"></i>
                </div>
                <div class="stat-content">
                  <div class="text-left dib">
                    <div class="stat-text"><span class="count" id="water-level">0</span> CM</div>
                    <div class="stat-heading">Luapan Air</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="stat-widget-five">
                <div class="stat-icon dib flat-color-4">
                  <i class="pe-7s-attention"></i>
                </div>
                <div class="stat-content">
                  <div class="text-left dib">
                    <div class="stat-text">Siaga</div>
                    <div class="stat-heading">Status</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Status -->

      <!--  Grafik-Statistik  -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="box-title">Grafik Tren & Statistik Pengunjung</h4>
              <hr />
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="card-body">
                  <h4 class="mb-3">Grafik Luapan Air (CM)</h4>
                  <div class="flot-container">
                    <div id="cpu-load" class="cpu-load" style="padding: 0px; position: relative;">
                      <canvas class="flot-base" width="463" height="272"
                        style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 463px; height: 272px;"></canvas>
                      <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                        <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;">
                          <div class="flot-tick-label tickLabel" style="position: absolute; top: 255px; left: 13px; text-align: right;">0</div>
                          <div class="flot-tick-label tickLabel" style="position: absolute; top: 204px; left: 7px; text-align: right;">20</div>
                          <div class="flot-tick-label tickLabel" style="position: absolute; top: 153px; left: 7px; text-align: right;">40</div>
                          <div class="flot-tick-label tickLabel" style="position: absolute; top: 102px; left: 7px; text-align: right;">60</div>
                          <div class="flot-tick-label tickLabel" style="position: absolute; top: 51px; left: 7px; text-align: right;">80</div>
                          <div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">100</div>
                        </div>
                      </div>
                      <canvas class="flot-overlay" width="463"
                        height="272"style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 463px; height: 272px;"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card-body">
                  <h4 class="mb-3">Statistik Website</h4>
                  <div class="progress-box progress-1">
                    <h4 class="por-title">Pengunjung</h4>
                    <div class="por-txt">255 Pengunjung</div>
                    <div class="progress mb-2" style="height: 5px;">
                      <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>
                </div> <!-- /.card-body -->
              </div>
            </div> <!-- /.row -->
          </div>
        </div><!-- /# column -->
      </div>
      <!--  /Grafik-Statistik -->

      <!-- Peta -->
      <div class="row">
        <div class="col-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <strong class="card-title mb-3">Peta</strong>
              <span class="float-right" id="ct"></span>
            </div>
            <div class="card-body">
              <div id="map" style="height: 65vh"></div>
              <hr>
              <div class="card-text text-sm-start vue-lists">
                <h5>Catatan :</h5>
                <ul>
                  <li>Normal : 0 - 10 cm</li>
                  <li>Waspada : 11 - 30 cm</li>
                  <li>Siaga : &GreaterEqual; 30 cm</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Peta -->
      <div class="clearfix"></div>
    </div>
    <!-- .animated -->
  </div>
@endsection

<!-- flotchart.js -->
@push('after-script')
  <script src="{{ asset('admin/assets/js/lib/flot-chart/flot-chart-init.js') }}"></script>
@endpush

<!-- Timestamps Peta -->
@push('after-script')
  <script>
    $('#infografikModal').on('show.bs.modal', function(e) {
      var button = $(e.relatedTarget);
      var modal = $(this);

      modal.find('.infografik-img').attr('src', button.data('img-url'));
      modal.find('.infografik-title').html(button.data('title'));
    });

    function display_c() {
      var refresh = 1000;
      mytime = setTimeout('display_ct()', refresh);
    }

    function display_ct() {
      var x = new Date();
      // date part ///
      var month = x.getMonth() + 1;
      var day = x.getDate();
      var year = x.getFullYear();
      if (month < 10) {
        month = '0' + month;
      }
      if (day < 10) {
        day = '0' + day;
      }
      var x3 = day + '-' + month + '-' + year;

      // time part //
      var hour = x.getHours();
      var minute = x.getMinutes();
      var second = x.getSeconds();
      if (hour < 10) {
        hour = '0' + hour;
      }
      if (minute < 10) {
        minute = '0' + minute;
      }
      if (second < 10) {
        second = '0' + second;
      }
      var x3 = x3 + ' ' + hour + ':' + minute + ':' + second

      document.getElementById('ct').innerHTML = x3;
      display_c();
    }
  </script>
@endpush

<!-- MQTT -->
@push('after-script')
  <script>
    // Create a client instance
    var client = new Paho.Client("test.mosquitto.org", Number(8081), "RPI_" + parseInt(Math.random() * 100, 10));

    // set callback handlers
    client.onConnectionLost = onConnectionLost;
    client.onMessageArrived = onMessageArrived;

    // connect the client
    client.connect({
      onSuccess: onConnect
    });

    // called when the client connects
    function onConnect() {
      // Once a connection has been made, make a subscription and send a message.
      console.log("onConnect");

      client.subscribe("mqtt/water-level");

      message = new Paho.Message("OK");
      message.destinationName = "mqtt/web";
      client.send(message);
    }

    // called when the client loses its connection
    function onConnectionLost(responseObject) {
      if (responseObject.errorCode !== 0) {
        console.log("onConnectionLost:" + responseObject.errorMessage);
      }
    }

    // called when a message arrives
    function onMessageArrived(message) {
      if (message.destinationName == "mqtt/test") {
        document.getElementById("status").innerHTML = message.payloadString;
        // console.log("onMessageArrived:" + message.payloadString);
      }

      if (message.destinationName == "mqtt/water-level") {
        document.getElementById("water-level").innerHTML = Math.round(message.payloadString);
        // console.log("onMessageArrived:" + message.payloadString);
      }
    }
  </script>
@endpush

<!-- Leaflet Configs -->
@push('after-script')
  <script src="{{ asset('front/locations/data.js') }}"></script>
  <script>
    let map = L.map('map').setView([-7.400538, 112.578910], 17);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 20,
    }).addTo(map);

    L.geoJSON(location1).addTo(map);

    const sensor1 = "<b>Pos 15</b> <br />" +
      "Luapan air: " + "<x id='water-level'>0</x>" + " cm <br />" +
      "Status: " + "Siaga <br />" +
      "Sensor: Aktif";

    const sensor2 = "<b>Pos 17</b> <br />" +
      "Luapan air: " + Math.floor(Math.random() * 30) + " cm <br />" +
      "Status: " + "Siaga <br />" +
      "Sensor: Nonaktif";

    const markerX = L.marker([-7.4005546571160705, 112.5789206127241]).addTo(map)
      .bindPopup(sensor1)
      .openPopup();

    const markerY = L.marker([-7.402802054057466, 112.58622149464613]).addTo(map)
      .bindPopup(sensor2);
  </script>
@endpush
