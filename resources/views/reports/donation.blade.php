@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">

        <!-- Donation Summary -->
        <div class="col-md-12">
<div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div><h4><b>Donation Summary</b></h4></div>
                    </div>

                     <div class="panel-body">


                        <p>Bar Chart of Donation by Months</p>  
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


<div id="container"></div>
<button id="plain">Plain</button>
<button id="inverted">Inverted</button>
<button id="polar">Polar</button>
</div>
        </div>
        </div>
        </div>

<br>



<!-- Donation Reports -->
            
             
             <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div><h4><b>Donation Report</b></h4></div>
                    </div>
                    <br>
                 
     


    
                    <div class="panel-body">
                        @if (count($donors) > 0)
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead>
                                    <th>Name</th><th>Amount</th><th>Status</th><th>Date</th>

                                    </thead>
                                    <tbody> <!-- Table Body -->
                                   @foreach($donors as $donor)
                    

                    <tr>
                                            <td class="table-text"><div>{{$donor->firstname}} {{$donor->lastname}}</div></td>
                                            <td class="table-text"><div>${{number_format($donor->amount,2)}}</div></td>
                                            <td class="table-text"><div>{{$donor->status}}</div></td>
                                            <td class="table-text"><div>{{$donor->created_at}}</div></td>
                                        </tr>

                  @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>No Donation Records found</h4></div>
                        @endif
                    </div>
                </div>
                </div>
 </div>

@endsection



@section('footer')
    <style>
        .table td { border: 0px !important; }
        .tooltip-inner { white-space:pre-wrap; max-width: 400px; }


   
    </style>

    <script>
        $(document).ready(function() {
            $('table.cds-datatable').on( 'draw.dt', function () {
                $('tr').tooltip({html: true, placement: 'auto' });
            } );

            $('tr').tooltip({html: true, placement: 'auto' });
        } );

        /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

// Bar Chart for Donations
$(function () {

    var processed_json = new Array();   
    $.getJSON($donation_sum, function(data) {
                    // Populate series
                    for (i = 0; i < data.length; i++){
                        processed_json.push([data[i].key, data[i].value]);
                    }
                 
    var chart = Highcharts.chart('container', {

        title: {
            text: 'Donation Chart'
        },

        subtitle: {
            text: ''
        },

        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },

        series: [{
             data: processed_json

            // type: 'column',
            // colorByPoint: true,
            // data: [34, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
            // showInLegend: false
        }]

    });


    $('#plain').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: false
            },
            subtitle: {
                text: 'Plain'
            }
        });
    });

    $('#inverted').click(function () {
        chart.update({
            chart: {
                inverted: true,
                polar: false
            },
            subtitle: {
                text: 'Inverted'
            }
        });
    });

    $('#polar').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: true
            },
            subtitle: {
                text: 'Polar'
            }
        });
    });

});
    </script>
@endsection