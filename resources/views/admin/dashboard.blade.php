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
              <h4 class="box-title">Grafik Luapan Air</h4>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="card-body">
                  <span class="updating-chart" style="display: none;">4,4,4,0,6,2,1,5,7,0,4,4,5,6,4,1,7,10,9,7</span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card-body">
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

<!-- jquery.peity -->
@push('after-script')
  <script>
    // Peity jQuery plugin version 3.3.0
    // (c) 2018 Ben Pickles
    //
    // http://benpickles.github.io/peity
    //
    // Released under MIT license.
    ! function(t, i, e, n) {
      var a = t.fn.peity = function(i, e) {
          return l && this.each(function() {
              var n = t(this),
                h = n.data("_peity");
              h ? (i && (h.type = i),
                  t.extend(h.opts, e)) : (h = new r(n, i, t.extend({}, a.defaults[i], n.data("peity"), e)),
                  n.change(function() {
                    h.draw()
                  }).data("_peity", h)),
                h.draw()
            }),
            this
        },
        r = function(t, i, e) {
          this.$el = t,
            this.type = i,
            this.opts = e
        },
        h = r.prototype,
        s = h.svgElement = function(e, n) {
          return t(i.createElementNS("http://www.w3.org/2000/svg", e)).attr(n)
        },
        l = "createElementNS" in i && s("svg", {})[0].createSVGRect;
      h.draw = function() {
          var t = this.opts;
          a.graphers[this.type].call(this, t),
            t.after && t.after.call(this, t)
        },
        h.fill = function() {
          var i = this.opts.fill;
          return t.isFunction(i) ? i : function(t, e) {
            return i[e % i.length]
          }
        },
        h.prepare = function(t, i) {
          return this.$svg || this.$el.hide().after(this.$svg = s("svg", {
              class: "peity"
            })),
            this.$svg.empty().data("_peity", this).attr({
              height: i,
              width: t
            })
        },
        h.values = function() {
          return t.map(this.$el.text().split(this.opts.delimiter), function(t) {
            return parseFloat(t)
          })
        },
        a.defaults = {},
        a.graphers = {},
        a.register = function(t, i, e) {
          this.defaults[t] = i,
            this.graphers[t] = e
        },
        a.register("pie", {
          fill: ["#ff9900", "#fff4dd", "#ffc66e"],
          radius: 8
        }, function(i) {
          if (!i.delimiter) {
            var n = this.$el.text().match(/[^0-9\.]/);
            i.delimiter = n ? n[0] : ","
          }
          var a = t.map(this.values(), function(t) {
            return t > 0 ? t : 0
          });
          if ("/" == i.delimiter) {
            var r = a[0],
              h = a[1];
            a = [r, e.max(0, h - r)]
          }
          for (var l = 0, p = a.length, o = 0; l < p; l++)
            o += a[l];
          o || (p = 2,
            o = 1,
            a = [0, 1]);
          var f = 2 * i.radius,
            c = this.prepare(i.width || f, i.height || f),
            u = c.width() / 2,
            d = c.height() / 2,
            g = e.min(u, d),
            v = i.innerRadius;
          "donut" != this.type || v || (v = .5 * g);
          var m = e.PI,
            y = this.fill(),
            w = this.scale = function(t, i) {
              var n = t / o * m * 2 - m / 2;
              return [i * e.cos(n) + u, i * e.sin(n) + d]
            },
            x = 0;
          for (l = 0; l < p; l++) {
            var k, $ = a[l],
              j = $ / o;
            if (0 != j) {
              if (1 == j)
                if (v) {
                  var A = u - .01,
                    E = d - g,
                    F = d - v;
                  k = s("path", {
                    d: ["M", u, E, "A", g, g, 0, 1, 1, A, E, "L", A, F, "A", v, v, 0, 1, 0, u, F].join(" "),
                    "data-value": $
                  })
                } else
                  k = s("circle", {
                    cx: u,
                    cy: d,
                    "data-value": $,
                    r: g
                  });
              else {
                var M = x + $,
                  S = ["M"].concat(w(x, g), "A", g, g, 0, j > .5 ? 1 : 0, 1, w(M, g), "L");
                v ? S = S.concat(w(M, v), "A", v, v, 0, j > .5 ? 1 : 0, 0, w(x, v)) : S.push(u, d),
                  x += $,
                  k = s("path", {
                    d: S.join(" "),
                    "data-value": $
                  })
              }
              k.attr("fill", y.call(this, $, l, a)),
                c.append(k)
            }
          }
        }),
        a.register("donut", t.extend(!0, {}, a.defaults.pie), function(t) {
          a.graphers.pie.call(this, t)
        }),
        a.register("line", {
          delimiter: ",",
          fill: "#c6d9fd",
          height: 16,
          min: 0,
          stroke: "#4d89f9",
          strokeWidth: 1,
          width: 32
        }, function(t) {
          var i = this.values();
          1 == i.length && i.push(i[0]);
          for (var a = e.max.apply(e, t.max == n ? i : i.concat(t.max)), r = e.min.apply(e, t.min == n ? i : i.concat(t.min)), h = this.prepare(t
              .width, t.height), l = t.strokeWidth, p = h.width(), o = h.height() - l, f = a - r, c = this.x = function(t) {
              return t * (p / (i.length - 1))
            }, u = this.y = function(t) {
              var i = o;
              return f && (i -= (t - r) / f * o),
                i + l / 2
            }, d = u(e.max(r, 0)), g = [0, d], v = 0; v < i.length; v++)
            g.push(c(v), u(i[v]));
          g.push(p, d),
            t.fill && h.append(s("polygon", {
              fill: t.fill,
              points: g.join(" ")
            })),
            l && h.append(s("polyline", {
              fill: "none",
              points: g.slice(2, g.length - 2).join(" "),
              stroke: t.stroke,
              "stroke-width": l,
              "stroke-linecap": "square"
            }))
        }),
        a.register("bar", {
          delimiter: ",",
          fill: ["#4D89F9"],
          height: 16,
          min: 0,
          padding: .1,
          width: 32
        }, function(t) {
          for (var i = this.values(), a = e.max.apply(e, t.max == n ? i : i.concat(t.max)), r = e.min.apply(e, t.min == n ? i : i.concat(t.min)), h =
              this.prepare(t.width, t.height), l = h.width(), p = h.height(), o = a - r, f = t.padding, c = this.fill(), u = this.x = function(t) {
                return t * l / i.length
              }, d = this.y = function(t) {
                return p - (o ? (t - r) / o * p : 1)
              }, g = 0; g < i.length; g++) {
            var v, m = u(g + f),
              y = u(g + 1 - f) - m,
              w = i[g],
              x = d(w),
              k = x,
              $ = x;
            o ? w < 0 ? k = d(e.min(a, 0)) : $ = d(e.max(r, 0)) : v = 1,
              0 == (v = $ - k) && (v = 1,
                a > 0 && o && k--),
              h.append(s("rect", {
                "data-value": w,
                fill: c.call(this, w, g, i),
                x: m,
                y: k,
                width: y,
                height: v
              }))
          }
        })
    }(jQuery, document, Math);
  </script>
@endpush

<!-- peitychart.init -->
@push('after-script')
  <script>
    (function($) {
      "use strict";
      $(function() {
        "use strict";
        $("span.pie").peity("pie", {
          width: '50',
          height: '50'
        })
        $('span.donut').peity('donut', {
          width: '50',
          height: '50'
        })
        $(".peity-line").peity("line", {
          width: '300',
          height: '100'
        })
        $(".bar").peity("bar", {
          width: '300',
          height: '100'
        })
        $(".bar-colours-1").peity("bar", {
          fill: ["red", "green", "blue"],
          width: '100',
          height: '100'
        })
        $(".bar-colours-2").peity("bar", {
          fill: function(value) {
            return value > 0 ? "green" : "red"
          },
          width: '100',
          height: '100'
        })
        $(".bar-colours-3").peity("bar", {
          fill: function(_, i, all) {
            var g = parseInt((i / all.length) * 255)
            return "rgb(255, " + g + ", 0)"
          },
          width: '100',
          height: '100'
        })
        $(".pie-colours-1").peity("pie", {
          fill: ["cyan", "magenta", "yellow", "black"],
          width: '100',
          height: '100'
        })
        $(".pie-colours-2").peity("pie", {
          fill: function(_, i, all) {
            var g = parseInt((i / all.length) * 255)
            return "rgb(255, " + g + ", 0)"
          },
          width: '100',
          height: '100'
        })
        $(".data-attributes span").peity("donut")
        $("select").change(function() {
          var text = $(this).val() + "/" + 5
          $(this).siblings("span.graph").text(text).change()
          $("#notice").text("Chart updated: " + text)
        }).change()
        $("span.graph").peity("pie")
        var updatingChart = $(".updating-chart").peity("line", {
          width: "100%",
          height: 100
        })
        setInterval(function() {
          var random = Math.round(Math.random() * 10)
          var values = updatingChart.text().split(",")
          values.shift()
          values.push(random)
          updatingChart.text(values.join(",")).change()
        }, 1000)
      })
    })(jQuery);
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
