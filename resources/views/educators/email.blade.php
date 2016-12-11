<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .description {
            font-family: "Calibri";
            font-size: 13px;
            font-weight: 500;
            color: #1a1a1a;
            text-align: left;
            margin-left: 10%;
            margin-right: 7%;
            line-height: 1.0;
            padding: 0px;
        }
    </style>
</head>
<body style="background-color: #ccc;">
<hr>
<br/>
<div class="text-maincontent"
     style="background-color: #FFF; margin: auto; padding: 20px; width: 450px; border-top: 2px solid #27ae60;">
    <p align="center"><img src="http://photo-host.org/images/2016/12/03/dLNtZweb.png" align="middle"
                           style="width:200px;height:60px;"></p>
    <div class="text-center">
        <br>
        <p class="description">Hi {{$first_name }},</p>
        <p class="description"> Thank you for registering as an Educator! We will contact you soon. </p>
        <p class="description"> We received the following information from you. Please reach out to us if this
            information is incorrect.</p>
        <p class="description">First Name: {{ $first_name }}</p>
        <p class="description">Last Name: {{ $last_name }}</p>
        <p class="description">School Name: {{ $school_name }}</p>
        <p class="description">School Phone: {{ $school_phone }}</p>
        <p class="description">School Address: {{ $school_address }}</p>
        <p class="description">School City: {{ $school_city }}</p>
        <p class="description">School State: {{ $school_state }}</p>
        <p class="description">School Zip: {{ $school_zip }}</p>
        <p class="description">Email: {{ $email }}</p>
        <p class="description">Grade: {{$grade}}</p>
        <p class="description">Program Theme: {{ $program_theme }}</p>
        <p class="description">Planning Time: {{ $planning_time }}</p>
        <p class="description">Cell Phone: {{ $cell_phone }}</p>
        <p class="description">Comments Requests: {{ $comments_requests }}</p>
        <p class="description">Number of Classes: {{ $no_of_classes }}</p>
        <p class="description">Number of Students per class: {{ $no_of_students_per_class }}
        <p class="description"> Please visit our <a href="{{ url('http://jachievement.herokuapp.com/') }}">website</a> to learn more about Junior Achievement. </p>

        <br>
        <p class="description">Thank you,</p>
        <p class="description"><b>Junior Achievement of Midlands, Inc.</b></p>
    </div>
</div>
<br>
<hr>
</body>
</html>