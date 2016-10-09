@extends('layouts.app')

@section('content')

    <style xmlns:align="http://www.w3.org/1999/xhtml">

        .glyphicon{font-size:30px;
            float:left;
            margin-right:20px;
            color:green;}

        h4{
            margin-right: 20px;
            color:green;
        }

    </style>


    <div id="container"></div>
    <div id="sliders">
        <table>
            <tr>
                <td>Alpha Angle</td>
                <td><input id="alpha" type="range" min="0" max="45" value="15"/> <span id="alpha-value" class="value"></span></td>
            </tr>
            <tr>
                <td>Beta Angle</td>
                <td><input id="beta" type="range" min="-45" max="45" value="15"/> <span id="beta-value" class="value"></span></td>
            </tr>
            <tr>
                <td>Depth</td>
                <td><input id="depth" type="range" min="20" max="100" value="50"/> <span id="depth-value" class="value"></span></td>
            </tr>
        </table>
    </div>
    <div class="container-fluid" ID="1" style="background-color:rgb(245,245,245)">
        <div class="container"  ID="2">
            <br>
            <br>
            <br>
            <h2 class="text-center"  ID="3">PARTNERING WITH JUNIOR ACHIEVEMENT</h2>
            <br>
            <br>
            <div class="row"  ID="4">
                <div class="col-md-6"  ID="5">
                    <img class="img-responsive" alt="Educator with Junior Achievement" src="https://www.juniorachievement.org/documents/20009/1817412/about-pg.png" width="100%" height="auto"  ID="6"/>
                </div>
                <div class="col-md-6"  ID="7">

                    <p style="font-size: 16px"  ID="8"> Is your company looking to partner with an organization that makes a difference in the lives of youth in your community? Junior Achievement provides programs that are delivered to students in the classroom or in a simulated community (depending on the location). JA programs are developed with a focus on several different critically needed areas; STEM, building Leadership Skills, Uplifting At-Risk Communities, Work Readiness and Soft Skills, Business Ethics, College Readiness, Career and Technical Education (CTE), Industry Focus (Manufacturing/Health), and Financial Literacy.</p>
                    <br>
                    <div>
                        <div class="col-md-1"><span class="glyphicon glyphicon-gift"  ID="9"></span> </div>
                        <div class="col-md-11"  ID="10"><h4>YOUR DONATION HELPS JA REACH STUDENTS</h4>
                            <p style="font-size:16px"  > JA inspires and prepares young people to succeed in the global economy. By partnering with JA, you will empower young people to own their economic success.</p>
                            <br></div>
                    </div>

                    <div>
                        <div class="col-md-1"  ID="12"><span class="glyphicon glyphicon-grain"   ID="13"></span> </div>
                        <div class="col-md-11"  ID="14"> <h4>JA WILL HELP PREPARE YOUR FUTURE WORKFORCE</h4>
                            <p style="font-size: 16px"> JA will help you develop leaders with the critical skills and the character necessary to succeed in your 21st century workplace.</p>
                            <br></div>
                    </div>

                    <div>
                        <div class="col-md-1"  ID="15"><span class="glyphicon glyphicon-heart-empty" ></span> </div>
                        <div class="col-md-11"  ID="16"> <h4>JA PROVIDES AN ENRICHING VOLUNTEER EXPERIENCE FOR YOUR EMPLOYEES</h4>
                            <p style="font-size: 16px"  ID="17"> JA will empower your employees with quality, skills-based volunteering experiences in the community using proven programs that change young peoples' lives.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>


    <canvas id="line" class="chart chart-line" chart-data="data"
            chart-labels="labels" chart-series="series" chart-options="options"
            chart-dataset-override="datasetOverride" chart-click="onClick"
    </canvas>

    <div class="container-fluid" ID="25" style="background-color:rgb(245,245,245)">
        <div class="container" ID="26">
            <br>
            <br/>
            <div align="center"  class=col-md-3 style="align: center" ID="28"></div>
        <div align="center"  class="col-md-6 style="align= center" ID="29" >
        <div class="embed-responsive embed-responsive-16by9 text-center" ID="30" >
            <div class="video-embed" style="text-align:center" ID="31">
                <iframe allowfullscreen="" frameborder="0" height="100" src="https://www.youtube.com/embed/nTmryDIQq6s" width="300" ID="32"></iframe>
            </div>
        </div>
        <div align="center"  class="col-md-3 style="align= center" ID="33"></div>
    </div>
    </div>
    </div>

@endsection
@section('footer')
    <script>
        $(function () {
            // Set up the chart
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'container',
                    type: 'column',
                    options3d: {
                        enabled: true,
                        alpha: 15,
                        beta: 15,
                        depth: 50,
                        viewDistance: 25
                    }
                },
                title: {
                    text: 'Chart rotation demo'
                },
                subtitle: {
                    text: 'Test options by dragging the sliders below'
                },
                plotOptions: {
                    column: {
                        depth: 25
                    }
                },
                series: [{
                    data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
                }]
            });

            function showValues() {
                $('#alpha-value').html(chart.options.chart.options3d.alpha);
                $('#beta-value').html(chart.options.chart.options3d.beta);
                $('#depth-value').html(chart.options.chart.options3d.depth);
            }

            // Activate the sliders
            $('#sliders input').on('input change', function () {
                chart.options.chart.options3d[this.id] = this.value;
                showValues();
                chart.redraw(false);
            });

            showValues();
        });
    </script>
@endsection
