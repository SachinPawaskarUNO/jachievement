@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">Welcome {{$user->roles->first()->display_name}} - {{$user->name}}</div>

                <div class="panel-body">
                    <!-- Carousel
                    ================================================== -->
                    <div id="myCarousel" class="carousel slide"  data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" style="text-align: center;">
                            <div class="item active" style="text-align: center;">
                                <a href="http://www.unomaha.edu/college-of-information-science-and-technology" target="_blank">
                                    <img src="/images/StudentWordCloud1.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="item" style="text-align: center;">
                                {{--<a href="http://www.nacada.ksu.edu" target="_blank">--}}
                                <a href="http://www.unomaha.edu/college-of-information-science-and-technology/academics/advising.php" target="_blank">
                                    <img src="/images/StudentFaculty.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="item" style="text-align: center;">
                                <a href="http://www.unomaha.edu" target="_blank">
                                    <img src="/images/StudentLearning.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="icon-prev"></span></a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="icon-next"></span></a>
                    </div>
                    <!-- /.carousel -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<style>
    /* -----------------------------------------------
    CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel { margin-bottom: 0px; }

    /* Since positioning the image, we need to help out the caption */
    /* Declare heights because of positioning of img element */
    .carousel .item { height: 400px; /*background-color:#555;*/ }

    .carousel img { /*position: absolute;*/ /*top: 0;*/ /*left: 0;*/ min-height: 400px; }

    /* RESPONSIVE CSS
    -------------------------------------------------- */
    @media (min-width: 768px) {
        /* Bump up size of carousel content */
        .carousel-caption p { margin-bottom: 20px; font-size: 21px; line-height: 1.4; }
    }

    img.img-responsive { display: block; margin-left: auto; margin-right: auto; }
    /*span.icon-next, span.icon-prev { margin: 0px !important; position: static !important; }*/
    span.icon-prev { margin-left: -30px !important }
    span.icon-next { margin-right: -30px !important }
</style>
@endsection