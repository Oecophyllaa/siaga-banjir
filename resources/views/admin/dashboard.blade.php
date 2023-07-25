@extends('layouts.admin')

@section('content')
  <div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
      <!-- Widgets  -->
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
                    <div class="stat-text"><span class="count">12</span> CM</div>
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
      <!-- /Widgets -->
      <!--  Traffic  -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="box-title">Grafik Tren & Statistik Pengunjung</h4>
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
      <!--  /Traffic -->
      <div class="clearfix"></div>
    </div>
    <!-- .animated -->
  </div>
@endsection

<!-- flotchart.js -->
@push('after-script')
  <script src="{{ asset('admin/assets/js/lib/flot-chart/flot-chart-init.js') }}"></script>
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
