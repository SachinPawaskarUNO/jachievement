@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
        <div class="col-md-3">
<div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div><h4><b>Donation Summary</b></h4></div>
                    </div>

                     <div class="panel-body">


                     	<p>Bar Chart of Donation by Months</p>	

                     </div>
        </div>
        </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div><h4><b>Donation Report</b></h4></div>
                    </div>
                    <br>
                    <div>
                    <div class="col-md-10"> </div>
                    <div class="col-md-2">
                              <button onclick="myFunction()" class="dropbtn">Filter By</button>
  <div id="myDropdown" class="dropdown-content" >
    <a href="#">Amount</a>
    <a href="#">Date</a>
    <a href="#">Status</a>

    </div>	
    
     </div>	
     </div>


    
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
    </div>
@endsection



@section('footer')
    <style>
        .table td { border: 0px !important; }
        .tooltip-inner { white-space:pre-wrap; max-width: 400px; }


       /* Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;

}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
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
    </script>
@endsection