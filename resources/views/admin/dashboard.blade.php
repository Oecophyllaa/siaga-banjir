@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ route('admin.mqtt.subs') }}">
        <i class="fab fa-creative-commons-sampling fa-sm text-white-50"></i>
        MQTT
      </a>
    </div>

    <!-- Alert -->
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> {{ session('success') }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    <!-- Content Row -->
    <div class="row">

      <!-- Water Level -->
      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary h-100 py-2 shadow">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="font-weight-bold text-primary text-uppercase mb-1 text-xs">
                  Water Level (cm)
                </div>
                <div class="h5 font-weight-bold mb-0 text-gray-800">3.20</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-ruler-vertical fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Battery Voltage -->
      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success h-100 py-2 shadow">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="font-weight-bold text-success text-uppercase mb-1 text-xs">
                  Battery Voltage (V)
                </div>
                <div class="h5 font-weight-bold mb-0 text-gray-800">3.28</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-battery-three-quarters fa-rotate-270 fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sensor Status -->
      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info h-100 py-2 shadow">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="font-weight-bold text-info text-uppercase mb-1 text-xs">
                  Sensor Status
                </div>
                <div class="h5 font-weight-bold mb-0 text-gray-800" id="status">OK</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-signal fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Row -->

    <div class="row">

      <!-- Area Chart -->
      <div class="col-xl-8 col-lg-7">
        <div class="card mb-4 shadow">
          <!-- Card Header - Dropdown -->
          <div class="card-header d-flex align-items-center justify-content-between flex-row py-3">
            <h6 class="font-weight-bold text-primary m-0">Grafik Tren</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div class="chart-area">
              <canvas id="myAreaChart"></canvas>
            </div>
          </div>
        </div>
      </div>

      <!-- Pie Chart -->
      <div class="col-xl-4 col-lg-5">
        <div class="card mb-4 shadow">
          <!-- Card Header - Dropdown -->
          <div class="card-header d-flex align-items-center justify-content-between flex-row py-3">
            <h6 class="font-weight-bold text-primary m-0">Revenue Sources</h6>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right animated--fade-in shadow" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Dropdown Header:</div>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div class="chart-pie pt-4 pb-2">
              <canvas id="myPieChart"></canvas>
            </div>
            <div class="small mt-4 text-center">
              <span class="mr-2">
                <i class="fas fa-circle text-primary"></i> Direct
              </span>
              <span class="mr-2">
                <i class="fas fa-circle text-success"></i> Social
              </span>
              <span class="mr-2">
                <i class="fas fa-circle text-info"></i> Referral
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection

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

      client.subscribe("mqtt/test");

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
    }
  </script>
@endpush
