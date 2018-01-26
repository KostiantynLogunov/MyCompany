<section>
    <div class="inner_wrapper">
        <div class="container">
            {{--<h2>{{ $page->name }}</h2>--}}
            <div class="inner_section">
                <div class="row">
                    <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                        <img src="{{ asset('assets/img/'.$page->images) }}" class="img-circle delay-03s animated wow zoomIn" alt="our_place" style="display: none">
                        <img src="{{ asset('assets/img/main_device_image5.png') }}" class=" delay-03s animated wow zoomIn" alt="our_place">

                    </div>
                    <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                        <div class=" delay-01s animated fadeInDown wow animated">
                            {!! $page->text !!}
                        </div>
                        <div class=" delay-03s animated fadeInDown wow animated">
                            {!! $page->about !!}
                        </div>
                        <br>
{{--                        <a href="{{route('home')}}">Back</a><br>--}}
                        <img src="{{ asset('assets/img/18.jpg') }}" class=" delay-03s animated wow zoomIn" alt="our_place">
                    </div>

                </div>

            </div>

        </div>

    </div>
    <footer>
        <div class="container">
            <div class="footer_bottom">
                <span style="color: black">Copyright © 2017,    Template by LKMC LLC </a>. </span>
            </div>
        </div>
    </footer>
</section>
{{--/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 29.09.2017
 * Time: 16:32
 */--}}
