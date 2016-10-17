@extends('layouts.app')
@section('content')
        <!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title>Junior achievement Programs</title>
<div style="background-color:rgb(245,245,245)">
<style>
    .button {
        background-color: rgba(140,198,62,0.85);
        border: none;
        color: white;
        padding: 10px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>
<div align="right"><a href= "{{ url('/aboutus/map') }}" class="button">Local Schools with JA</a></div>
</div>
<body>

<div class="container-fluid" style="background-color:rgb(245,245,245)">
    <div class="container">
        <div class="row">
            <br>
            <h3 class="text-center" style="font-family:'Arial Black'">JUNIOR ACHIEVEMENT'S PURPOSE AND VALUES</h3>
            <br>
            <div class="col-md-6">
                <img class="img-responsive" alt="JUNIOR ACHIEVEMENT'S PURPOSE AND VALUES" src="http://lyderis.eu/wp-content/uploads/2011/05/junior-achievement.jpg" width="100%" height="auto">
            </div>
            <div class="col-md-6">
                <br>
                <p class="lead" style="font-size:x-large;font-family: bold;">Junior Achievement's Purpose is to inspire and prepare young people to succeed in a global economy.</p>
                <br>
                <p style="font-size: 16px">Diversity Statement: Junior Achievement is the recognized leader in "empowering young people to own their economic success®" through volunteer-led, experiential learning. We are dedicated to providing a positive, enriching learning experience free of bias. Junior Achievement welcomes K-12 students, volunteers and potential staff regardless of race, religion, age, gender, national origin, disability, sexual orientation or any other legally protected characteristic.</p>
                <br>
                <p style="font-size: 16px">The envisioned future - what we aspire to become. Junior Achievement maintains an active vision, front and center, on how we can have a positive impact on the lives of more students - guided by our core values:</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color:white;">
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="align-content: center; color:green">
                <p style="font-size:16px; text-align: center;"><span class="glyphicon glyphicon-star-empty"></span> Belief in the boundless potential of young people</p>
                <p style="font-size:16px; text-align: center;"><span class="glyphicon glyphicon-star-empty"></span> Commitment to the principles of market-based economics and entrepreneurship</p>
                <p style="font-size:16px; text-align: center;"><span class="glyphicon glyphicon-star-empty"></span> Passion for what we do and honesty, integrity, and excellence in how we do it</p>
                <p style="font-size:16px; text-align: center;"><span class="glyphicon glyphicon-star-empty"></span> Respect for the talents, creativity, perspectives, and backgrounds of all individuals</p>
                <p style="font-size:16px; text-align: center;"><span class="glyphicon glyphicon-star-empty"></span> Belief in the power of partnership and collaboration</p>
                <p style="font-size:16px; text-align: center;"><span class="glyphicon glyphicon-star-empty"></span> Conviction in the educational and motivational impact of relevant, hands-on learning</p>
                <br>
            </div>
            <div class="col-md-2"></div>
        </div>
</div>


<div class="container-fluid" style="background-color: rgb(245,245,245)">
    <div class="row" style="background-color: rgba(140,198,62,0.85)">
        <h3 class="text-center" style="color: white">Junior Achievement Facts</h3>
    </div>

    <div class="container">
        <div class="row">
                <div class="col-sm-6">
                    <br>
                    <h4 class="text-center" style="font-family: 'Arial Black'">What Is Junior Achievement USA®?</h4>
                    <p class="text-left">We are the nation's largest organization dedicated to giving young people the knowledge and skills they need to own their economic success, plan for their futures, and make smart academic and economic choices. Junior Achievement's programs—in the core content areas of work readiness, entrepreneurship and financial literacy—ignite the spark in young people to experience and realize the opportunities and realities of work and life in the 21st century.</p>
                </div>

                <div class="col-sm-6">
                    <br>
                    <h4 class="text-center" style="font-family: 'Arial Black'">Proven Success</h4>
                    <p class="text-left">Junior Achievement is one of a few nonprofits to use independent, third-party evaluators to gauge the impact of its programs. Since 1993, independent evaluators have conducted studies on Junior Achievement's effectiveness. Findings prove that Junior Achievement has a positive impact in a number of critical areas. We invite you to read the Programs Evaluation Results.</p>
                </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <br>
                <h4 class="text-center" style="font-family: 'Arial Black'">Purpose</h4>
                <p class="text-left">Junior Achievement's purpose is to inspire and prepare young people to succeed in a global economy.</p>
            </div>

            <div class="col-sm-6">
                <br>
                <h4 class="text-center" style="font-family: 'Arial Black'">Program Reach</h4>
                <p class="text-left">Junior Achievement USA reaches more than 4.6 million students per year in 201,444 classrooms and after-school locations. JA programs are taught by volunteers in inner cities, suburbs, and rural areas throughout the United States, by 112 Area Offices in all 50 states.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <br>
                <h4 class="text-center" style="font-family: 'Arial Black'">A Brief History</h4>
                <p class="text-left">Junior Achievement was founded in 1919 by Theodore Vail, president of American Telephone & Telegraph; Horace Moses, president of Strathmore Paper Co.; and Senator Murray Crane of Massachusetts. Its first program, JA Company Program®, was offered to high school students on an after-school basis. In 1975, the organization entered the classroom with the introduction of Project Business for the middle grades. Over the last 39 years, Junior Achievement has expanded its activities and broadened its scope to include in-school and after-school students.</p>
            </div>

            <div class="col-sm-6">
                <br>
                <h4 class="text-center" style="font-family: 'Arial Black'">Leadership</h4>
                <p class="text-left">Ms. Julie Monaco, Global Head of Citi's Public Sector Group in the Corporate and Investment Banking division of Citi's Institutional Clients Group, is chairwoman of the Junior Achievement USA board of directors. Jack E. Kosakowski is the president and chief executive officer of Junior Achievement. Junior Achievement USA board members represent a wide range of businesses and academic institutions around the world. In addition, approximately 4,400 board members lead JA Area Offices around the United States.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <br>
                <h4 class="text-center" style="font-family: 'Arial Black'">Organization Overview</h4>
                <p class="text-left">Junior Achievement USA is headquartered in Colorado Springs, Colorado, and provides strategic direction, leadership, and support to approximately 1,500 employees throughout the United States. Local volunteer boards of directors comprised of business, education, and civic leaders set the policy and direction for each local office.</p>
            </div>

            <div class="col-sm-6">
               <br>
               <h4 class="text-center" style="font-family: 'Arial Black'">Volunteers</h4>
               <p class="text-left">Junior Achievement's 218,896 classroom volunteers come from all walks of life, including: business people, college students, parents and retirees. These dedicated individuals are the backbone of our organization.</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection

