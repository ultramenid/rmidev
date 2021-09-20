<div class="bgrmi">
    <div id="chart"></div>


</div>
@push('scripts')
    <script>
         var options = {
          series: [{
            name: 'Business Execution %' ,
            type: 'bar',
            data: [@foreach ($corporateData as $name) '{{$name->bExecution}}', @endforeach],
          }, {
            name: 'Average %',
            type: 'line',
            data: [@foreach ($corporateData as $name) '{{$name->bAverage}}', @endforeach],
          },{
            name: 'B-ALL',
            type: 'area',
            data: [@foreach ($corporateData as $name) '{{$name->bAll}}', @endforeach],
          }],

          chart: {
            foreColor: 'gray',
            width: '100%',
            height: 650,
            type: 'line',
            stacked: false,
            toolbar: {
              show: true,
              offsetX: 0,
              offsetY: 0,
              tools: {
              download: true,
              selection: false,
              reset: false,
              zoom: false,
              zoomin: false,
              zoomout: false,
              pan: false
              },
            },

          },
          stroke: {
            width: [0, 2, 5],
            curve: 'smooth'
          },
          plotOptions: {
            bar: {
              columnWidth: '50%'
            }
          },
          colors:['#835640', '#32a86d', '#32a86d'],
          fill: {
            colors: ['#835640', '#32a86d', '#32a86d'],
            gradient: {
              inverseColors: false,
              shade: 'light',
              type: "vertical",
              opacityFrom: 0.85,
              opacityTo: 0.55,
              stops: [0, 100, 100, 100]
            }
          },
          markers: {
            size: 0
          },
          labels:[@foreach ($corporateData as $name) '{{$name->name}}', @endforeach],
          xaxis: {
              type: 'category',
              categories: []
          },
          yaxis: {
            type: 'string',
            labels: {
              minWidth: 40,
              formatter: function (value) {
                return value + "%";
              }
            },
            min: 0,
            max: 100
          },
          tooltip: {
            shared: true,
            intersect: false,
            theme: "dark",
            y: {
              formatter: function (value) {
                return value.toFixed(2);
              }
            },
          }
        };
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endpush
