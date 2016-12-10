@extends('layouts.app')

@section('content')
    <style>
        table {
            width: 100%;
        }

        td, th {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #5cb85c;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6-push">
                <h3 class="text-center">Thank You For Your Support!</h3>

            </div>

            <div class="col-md-5 col-sm-6-push">
                <div class="row">
                    <h3 class="text-center">Recent Donors</h3>

                    <div style="margin-left:20px;">
                        <div>
                            <div class="col-md-12">
                                <table>
                                    <th>Donor</th>
                                    <th>Amount</th>

                                    @foreach($donors as $donor)
                                        <tr>
                                            <?php if($donor->anonymous == 'yes'): ?>
                                            <td>
                                                Anonymous
                                            </td>
                                            <?php else: ?>
                                            <td>
                                                {{$donor->firstname}} {{$donor->lastname}}.
                                            </td>
                                            <?php endif;?>
                                            <td>
                                                ${{number_format($donor->amount,2)}}
                                            </td>
                                        </tr>

                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <img class="img-responsive" id="IMG" alt="Image"
                             src="{{ url('images/DonationNotification.png') }}">
                    </div>
                </div>
            </div>
        </div>
@endsection