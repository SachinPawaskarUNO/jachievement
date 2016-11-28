@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div style="font-size:1.2em;color:white;"><b>{{ $heading }}</b></div>
                    </div>
                    <div class="panel-body">
                        @include('common.flash')
                        @if (count($static) > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped cds-datatable">
                                <thead>
                                <th>Description</th><th>Web Page</th><th>Type</th><th>Content</th><th>Default</th>
                                </thead>
                                <tbody>
                                @foreach ($static as $content)
                                    <tr>
                                        <td class="table-text"><div><a href="{{ url('/staticcontents/'.$content->id.'/edit') }}">{{ $content->item }}</a></div>
                                        <td class="table-text"><div>{{ $content->page }}</div></td>
                                        <td class="table-text"><div>{{ $content->type}}</div></td>
                                        <td class="table-text"><div>{{ $content->content}}</div></td>
                                        <td class="table-text"><div>{{ $content->default_content}}</div></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                            <div class="panel-body"><h4>No Static Content found</h4></div>
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
    </style>

    <script>
        $(document).ready(function() {
            $('table.cds-datatable').on( 'draw.dt', function () {
                $('tr').tooltip({html: true, placement: 'auto' });
            } );

            $('tr').tooltip({html: true, placement: 'auto' });
        } );
    </script>
@endsection