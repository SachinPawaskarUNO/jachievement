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
        <p class="description"> Thank you for registering as a Volunteer! We will contact you soon. </p>
        <p class="description"> Below is the information we have received from you. Please reach out to us if this
            information is incorrect.</p>
        <p class="description">First Name: {{ $first_name }}</p>
        <p class="description">Last Name: {{ $last_name }}</p>
        <p class="description">Preferred School Name: {{ $school_preference_id }}</p>
        <p class="description">Company Name: {{ $company_name }}</p>
        <p class="description">Company Address: {{ $company_address }}</p>
        <p class="description">Company City: {{ $company_city }}</p>
        <p class="description">Company State: {{ $company_state_id }}</p>
        <p class="description">Company Zip: {{ $company_zip }}</p>
        <p class="description">Work Phone: {{ $work_phone }}</p>
        <p class="description">Home Phone: {{ $home_phone }}</p>
        <p class="description">Home Address: {{ $home_address }}</p>
        <p class="description">City: {{ $home_city }}</p>
        <p class="description">State: {{ $home_state_id }}</p>
        <p class="description">Zip: {{ $home_zip }}</p>
        <p class="description">Email: {{ $email }}</p>
        <p class="description">Mode of contact: {{ $mode_of_contact }}</p>
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