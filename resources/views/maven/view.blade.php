<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="{{ URL::asset('js/modernizr.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <title>FAQ Template | CodyHouse</title>
</head>
<body>
<header>
    <h1>FAQ Template</h1>
</header>
<section class="cd-faq">
    <ul class="cd-faq-categories">
        <li><a class="selected" href="#basics">Basics</a></li>
    </ul> <!-- cd-faq-categories -->

{{--    <div class="cd-faq-items">
        <ul id="basics" class="cd-faq-group">
            <li class="cd-faq-title"><h2>Educator</h2></li>
            @foreach($maven_items as $maven_item)
            <li>
                <a class="cd-faq-trigger" href="#0">{{$maven_item->faq->raw_question}}</a>
                <div class="cd-faq-content">
                    <p>{{$maven_item->faq->raw_answer}}</p>
                </div> <!-- cd-faq-content -->
            </li>
            @endforeach
        </ul> <!-- cd-faq-group -->
    </div> <!-- cd-faq-items -->--}}

    <div class="cd-faq-items">
        <ul id="basics" class="cd-faq-group">
            <li class="cd-faq-title"><h2>Educator</h2></li>
            @foreach($maven_items as $maven_item)
                <li>
                    <a class="cd-faq-trigger" href="#0">{{$maven_item->question}}</a>
                    <div class="cd-faq-content">
                        <p>{{$maven_item->answer}}</p>
                        <p>{{$maven_item->tag}}</p>
                    </div> <!-- cd-faq-content -->
                </li>
            @endforeach
        </ul> <!-- cd-faq-group -->
    </div> <!-- cd-faq-items -->

    <a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.1.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.mobile.custom.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>

</body>
</html>