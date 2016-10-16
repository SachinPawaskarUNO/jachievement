@extends('layouts.app')

@section('content')
<style>
    table{
        width:100%;
    }
    td, th {
        text-align:left;
        padding:8px;
    }
    th{
        background-color: #5cb85c;
    }
    tr:nth-child(even) {
        background-color:#f2f2f2;
    }

</style>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6-pull">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;"><span style="font-size:1.2em;"><b> "Donation to Junior Achievement Omaha"</b></span></div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/donation/donate', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
                        @include('common.errors')
                        @include('common.flash')
                        @include ('donation.partial')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-6-push">
                <div class="row">
                    <h3 class="text-center">Top 5 Contributors</h3>
      
        <div style="margin-left:20px;">
            <div>
            <div class="col-md-12">
                <table>
                    <th>Donor</th>
                    <th>Amount</th>

               @foreach($donors as $donor)
                    <tr>
                      <td>
                          {{$donor->firstname}} {{$donor->lastname}}.
                      </td>
                      <td>
                          ${{$donor->amount}}
                      </td>
                    </tr>

                  @endforeach
                </table>
            </div>
            </div>
        </div>


                <div class="row">
                    <img class="img-responsive" id="IMG" alt="Image" src="{{ url('images/DonationNotification.png') }}">
                </div>
            </div>
        </div>
    </div>
@endsection