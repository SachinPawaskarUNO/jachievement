@extends('layouts.app')
@section('content')
        <!DOCTYPE html>
<html lang="en">
<style>
    html, body {
        height: 50%;
        margin: 0;
        padding: 0;
    }
    #map {
        height: 50%;
    }
</style>
<title>Junior achievement Programs</title>
<meta charset="utf-8">
<body>
<div class="container-fluid" style="background-color:#A9DFBF">
    <div class="container">
        <div class="row">
            <h2 class="text-center">JUNIOR ACHIEVEMENT'S PURPOSE AND VALUES</h2>
            <br>
            <div class="col-md-6">
            <img class="img-responsive" alt="JUNIOR ACHIEVEMENT'S PURPOSE AND VALUES" src="http://lyderis.eu/wp-content/uploads/2011/05/junior-achievement.jpg" width="100%" height="180px"/>
            </div>
            <div class="col-md-6">
            <br>
            <h1 style="font-family:'Eras Medium ITC'">Junior Achievement's Purpose is to inspire and prepare young people to succeed in a global economy.</h1>
            <br>
            <p style="font-size:25px">The envisioned future - what we aspire to become. Junior Achievement maintains an active vision, front and center, on how we can have a positive impact on the lives of more students - guided by our core values:</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#A9DFBF">
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <p style="font-size:18px; text-align: center"><span class="glyphicon glyphicon-star"></span> BELIEF IN THE BOUNDLESS POTENTIAL OF YOUNG PEOPLE <span class="glyphicon glyphicon-star"></span></p>
            <p style="font-size:18px; text-align: center"><span class="glyphicon glyphicon-star"></span> COMMITMENT TO THE PRINCIPLES OF MARKET-BASED ECONOMICS AND ENTREPRENEURSHIP <span class="glyphicon glyphicon-star"></span></p>
            <p style="font-size:18px; text-align: center"><span class="glyphicon glyphicon-star"></span> PASSION FOR WHAT WE DO AND HONESTY, INTEGRITY, AND EXCELLENCE IN HOW WE DO IT <span class="glyphicon glyphicon-star"></span></p>
            <p style="font-size:18px; text-align: center"><span class="glyphicon glyphicon-star"></span> RESPECT FOR THE TALENTS, CREATIVITY, PERSPECTIVES, AND BACKGROUNDS OF ALL INDIVIDUALS <span class="glyphicon glyphicon-star"></span></p>
            <p style="font-size:18px; text-align: center"><span class="glyphicon glyphicon-star"></span> BELIEF IN THE POWER OF PARTNERSHIP AND COLLABORATION <span class="glyphicon glyphicon-star"></span></p>
            <p style="font-size:18px; text-align: center"><span class="glyphicon glyphicon-star"></span> CONVICTION IN THE EDUCATIONAL AND MOTIVATIONAL IMPACT OF RELEVANT, HANDS-ON LEARNING <span class="glyphicon glyphicon-star"></span></p>
            <br>
            </div>
            <div class="col-md-2"></div>
        </div>
</div>


<div class="container-fluid">
    <h3 class="text-center">Junior Achievement facts</h3>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="text-center">What Is Junior Achievement USA®?</h4>
            <p class="text-left">We are the nation's largest organization dedicated to giving young people the knowledge and skills they need to own their economic success, plan for their futures, and make smart academic and economic choices. Junior Achievement's programs—in the core content areas of work readiness, entrepreneurship and financial literacy—ignite the spark in young people to experience and realize the opportunities and realities of work and life in the 21st century.</p>

        </div>
        <div class="col-sm-6">
            <h4 class="text-center">Proven Success</h4>
            <p class="text-left">Junior Achievement is one of a few nonprofits to use independent, third-party evaluators to gauge the impact of its programs. Since 1993, independent evaluators have conducted studies on Junior Achievement's effectiveness. Findings prove that Junior Achievement has a positive impact in a number of critical areas. We invite you to read the Programs Evaluation Results.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-center">Purpose</h4>
                <p class="text-left">Junior Achievement's purpose is to inspire and prepare young people to succeed in a global economy.</p>
            </div>
            <div class="col-sm-6">
                <h4 class="text-center">Program Reach</h4>
                <p class="text-left">Junior Achievement USA reaches more than 4.6 million students per year in 201,444 classrooms and after-school locations. JA programs are taught by volunteers in inner cities, suburbs, and rural areas throughout the United States, by 112 Area Offices in all 50 states.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-center">A Brief History</h4>
                <p class="text-left">Junior Achievement was founded in 1919 by Theodore Vail, president of American Telephone & Telegraph; Horace Moses, president of Strathmore Paper Co.; and Senator Murray Crane of Massachusetts. Its first program, JA Company Program®, was offered to high school students on an after-school basis. In 1975, the organization entered the classroom with the introduction of Project Business for the middle grades. Over the last 39 years, Junior Achievement has expanded its activities and broadened its scope to include in-school and after-school students.</p>
            </div>
                <div class="col-sm-6">
                <h4 class="text-center">Leadership</h4>
                <p class="text-left">Ms. Julie Monaco, Global Head of Citi's Public Sector Group in the Corporate and Investment Banking division of Citi's Institutional Clients Group, is chairwoman of the Junior Achievement USA board of directors. Jack E. Kosakowski is the president and chief executive officer of Junior Achievement. Junior Achievement USA board members represent a wide range of businesses and academic institutions around the world. In addition, approximately 4,400 board members lead JA Area Offices around the United States.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-center">Organization Overview</h4>
                <p class="text-left">Junior Achievement USA is headquartered in Colorado Springs, Colorado, and provides strategic direction, leadership, and support to approximately 1,500 employees throughout the United States. Local volunteer boards of directors comprised of business, education, and civic leaders set the policy and direction for each local office.</p>
                </div>

                <div class="col-sm-6">
                <h4 class="text-center">Volunteers</h4>
                <p class="text-left">Junior Achievement's 218,896 classroom volunteers come from all walks of life, including: business people, college students, parents and retirees. These dedicated individuals are the backbone of our organization.</p>
            </div>
        </div>
    </div>
</div>
</div>

<div id="map"></div>
<script>
    var map;
    function initMap() {

        var PineCreek= {
            info: '<strong>Pine Creek Elementary</strong><br>\
					7801 N HWS Cleveland Blvd<br>Bennington, NE 68007<br>',
            lat: 41.330086,
            long:-96.167939
        };

        var PineCreek= {
            info: '<strong>Pine Creek Elementary</strong><br>\
					7801 N HWS Cleveland Blvd<br>Bennington, NE 68007<br>',
            lat: 41.330086,
            long:-96.167939
        };

        var locations = [
            [PineCreek.info, PineCreek.lat, PineCreek.long, 0],
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(41.2523634, -95.9979883),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow({});

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqOmmqwN3ZKjnKRqO68H3OnCPHohK2okM&callback=initMap"
        async defer></script>
</body>
</html>
@endsection

