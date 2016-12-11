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
            line-height:1.0;
            padding:0px;
        }
    </style>
</head>
<body style="background-color: #ccc;">
<hr>
<br />
<div class="text-maincontent" style="background-color: #FFF; margin: auto; padding: 20px; width: 450px; border-top: 2px solid #27ae60;">
    <p align="center"><img src="http://photo-host.org/images/2016/12/03/dLNtZweb.png" align="middle" style="width:200px;height:60px;"></p>
    <div class="text-center">
        <br>
        <p class="description" >Hi Admin,</p>
        <p class="description"> User {{$first_name}} {{$last_name}} added a new comment in the hints and tips board. Please take necessary action. </p>
        <p class="description"> Here's some of the details about the post: </p>
        <p class="description"> User:  {{$first_name}} {{''}} {{$last_name}} </p>
        <p class="description"> Comment:  {{$text}} </p>
        <p class="description"> Created At:  {{$created_at}} </p>
        <br>
        <p class="description">Thank you,</p>
        <p class="description"><b>Junior Achievement of Midlands, Inc.</b></p>
    </div>
</div>
<br>
<hr>
</body>
</html>