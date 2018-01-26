@if(isset($pages) && is_object($pages))

    @foreach($pages as $k=>$page)

        @if($k%2 == 0)
            <section id="home" class="top_cont_outer">
                <div class="hero_wrapper">
                    <div class="container">
                        <div class="hero_section">
                            <div class="row">
                                <div class="col-lg-5 col-sm-7">
                                    <div class="top_left_cont zoomIn wow animated" style="color: whitesmoke">
                                        {!! $page->text !!}
                                        <br>
                                        <a href="{{ route('page',array('alias'=>$page->alias)) }}" class="read_more2">Read more</a> </div>
                                </div>
                                <div class="col-lg-7 col-sm-5">
                                    <img src="{{ asset('assets/img/'.$page->images) }}" class="zoomIn wow animated" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section id="aboutUs"><!--Aboutus-->
                <div class="inner_wrapper">
                    <div class="container">
                        <h2 style="text-decoration: underline">{{ $page->name }}</h2>
                        <div class="inner_section">
                            <div class="row">
                                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{ asset('assets/img/'.$page->images) }}" class="img-circle delay-03s animated wow zoomIn" alt="our_place"></div>
                                <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                                    <div class=" delay-01s animated fadeInDown wow animated">
                                        {!! $page->text !!}
                                    </div>
                                    @if($page->name == 'about us')
                                        <div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact Us</a> </div>
                                    @else
                                        <div class="work_bottom"> <span>Want to know more..</span> <a href="{{ route('page',array('alias'=>$page->alias)) }}" class="contact_btn">Contact Us</a> </div>
                                    @endif
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </section>
            <!--Aboutus-->
        @endif

    @endforeach

@endif

<!--/Services-->
@if(isset($services) && is_object($services))
    <section class="Services" ><!--main-section team-start-->
        <div class="container">
            <h2 style="text-decoration: underline">services</h2>
            <h6>DESCTOP AND MOBILE APPLICATIONS DEVELOPMENT</h6>
            <div class="row ">

                @foreach($services as $k=>$service)
                    {{--<div class="row">--}}
                        <div class="col-sm-6 text-center wow fadeInDown delay-0{{ ($k*2 + 2) }}s">
                            {{--<br>--}}
                            <img class="img-responsive" src="{{ asset('assets/img/services/'.$service->icon) }}" alt="{{ $service->name }}" style="height: 100px; display: inline; ">
                            <br><br>

                            <h3 class="wow fadeInDown delay-0{{ ($k*2 + 2) }}s">{{ $service->name }}</h3>
                            <p class="wow fadeInDown delay-0{{ ($k*2 + 2) }}s">{{ $service->text }}</p>
                        </div>
                    {{--</div>--}}
                @endforeach

            </div>
        </div>
    </section>
@endif
<!--/Services-->

{{--methodologies--}}
@if(isset($methodologies) && is_object($methodologies))
    <section class="page_section" id="Methodologies"><!--page_section-->

        <!--page_section-->
        <div class="client_logos"><!--client_logos-->

            <div class="container">
                <h2 style="text-decoration: underline">Methodologies</h2><br>
                <p class="text-center" style="color: #2a2a2a">We use best methodologies</p><br>
                <ul class="fadeInRight animated wow">
                @foreach($methodologies as $methodology)

                    <li>
                        <a href="javascript:void(0)">
                            <img src="{{ asset('assets/img/methodology/'.$methodology->image) }}" alt="{{ $methodology->name }}" style="height: 100px;">
                            {{--<p>{{ $methodology->text }}</p>--}}
                        </a>
                    </li>

                @endforeach
                </ul>
                <br>
            </div>
        </div>
    </section>
@endif
{{--methodologies--}}


<!--technologies-->
@if(isset($technologies) && is_object($technologies))

    <section  id="service"><br><br><br>
        <div class="container">
            <h2 style="text-decoration: underline">Technologies</h2>
            <div class="service_wrapper">
                @foreach($technologies as $k=>$technology)

                    @if($k == 0 || $k%3 == 0)
                        <div class="row {{ ($k != 0) ? 'borderTop' : '' }}">
                    @endif

                            <div class=" col-xs-4 {{ ($k%3 > 0) ? 'borderLeft' : '' }} {{ ($k>2) ? 'mrgTop' : '' }}">
                                <div class="service_block">
                                     <div class=" delay-03s animated wow  zoomIn" >
                                         {{--<span><i class="fa {{ $service->icon }}"></i></span>--}}
                                         <img src="{{ asset('assets/img/technology/'.$technology->image) }}" alt="{{$technology->name}}" style="height: 100px;">
                                     </div>
                                     {{--<h3 class="animated fadeInUp wow">{{ $service->name }}</h3>--}}
                                     {{--<p class="animated fadeInDown wow">{{ $service->text }}</p>--}}
                                </div>
                            </div>

                        @if(($k+1) %3 == 0)
                        </div>
                        @endif

                @endforeach

            </div>
        </div>
    </section>

@endif
<!--technologies-->




<!-- Portfolio -->

@if(isset($portfolios) && is_object($portfolios))


    <section id="Portfolio" class="content">

        <!-- Container -->
        <div class="container portfolio_title">

            <!-- Title -->
            <div class="section-title">
                {{--<br>--}}
                <h2 style="text-decoration: underline">Portfolio</h2>
            </div>
            <!--/Title -->

        </div>
        <!-- Container -->

        <div class="portfolio-top"></div>

        <!-- Portfolio Filters -->
        <div class="portfolio">
            {{--<br>--}}
            @if(isset($tags))
                <div id="filters" class="sixteen columns">
                    <ul class="clearfix">
                        <li>
                            <a id="all" href="#" data-filter="*" class="active">
                                <h5>All</h5></a></li>

                            @foreach($tags as $tag)

                               <li><a class="" href="#" data-filter=".{{ $tag }}">
                               <h5>{{ $tag }}</h5>
                               </a></li>

                            @endforeach

                    </ul>
                </div>
            @endif
            <!--/Portfolio Filters -->

            <!-- Portfolio Wrapper -->
            <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">
                @foreach($portfolios as $portfolio)
                    <!-- Portfolio Item -->
                        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   {{ $portfolio->filter }} isotope-item">
                            <div class="portfolio_img">
                                <img src="{{ asset('assets/img/'.$portfolio->images) }}"  alt="{{$portfolio->name}}">
                            </div>
                            <a href="http://{{$portfolio->name}}" target="_blank">
                                <div class="item_overlay">
                                    <div class="item_info">
                                        <h4 class="project_name">{{$portfolio->name}}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <!--/Portfolio Item -->
                @endforeach
            </div>
            <!--/Portfolio Wrapper -->

        </div>
        <!--/Portfolio Filters -->

        <div class="portfolio_btm"></div>

        <div id="project_container">
            <div class="clear"></div>
            <div id="project_data"></div>
        </div>

    </section>
@endif
<!--/Portfolio -->


<!--client_logos-->
{{--<section class="page_section" id="clients"><!--page_section-->
    <h2>Clients</h2>
    <!--page_section-->
    <div class="client_logos"><!--client_logos-->
        <div class="container">
            <ul class="fadeInRight animated wow">
                <li><a href="javascript:void(0)"><img src="{{ asset('assets/img/client_logo1.png') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ asset('assets/img/client_logo2.png') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ asset('assets/img/client_logo3.png') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ asset('assets/img/client_logo4.png') }}" alt=""></a></li>
            </ul>
        </div>
    </div>
</section>--}}
<!--client_logos-->


<!--/Team-->
@if(isset($peoples) && is_object($peoples))
    <section class="page_section team" id="team"><!--main-section team-start-->
        <div class="container">
            <h2 style="text-decoration: underline">Team</h2>
            <h6>Our smart and young staff.</h6>
            <div class="team_section clearfix">

                @foreach($peoples as $k=>$person)
                    <div class="team_area">
                        <div class="team_box wow fadeInDown delay-0{{ ($k*3 + 3) }}s">
                            {{--<div class="team_box_shadow"><a href="javascript:void(0)"></a></div>--}}
                            <img src="{{ asset('assets/img/team/'.$person->images) }}" alt="{{ $person->images }}" style="border-radius: 40%">
                            {{--<ul>
                                <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                                <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                            </ul>--}}
                        </div>
                        <h3 class="wow fadeInDown delay-0{{ ($k*3 + 3) }}s">{{ $person->name }}</h3>
                        <span class="wow fadeInDown delay-0{{ ($k*3 + 3) }}s">{{ $person->position }}</span>
                        {{--<p class="wow fadeInDown delay-0{{ ($k*3 + 3) }}s">{{ $person->text }}</p>--}}
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endif
<!--/Team-->

<!--cases-->
@if(isset($cases) && is_object($cases))
    <section  id="service">
        <div class="container">
            <h2 style="text-decoration: underline">PRICELIST</h2>
            <div class="service_wrapper">
                @foreach($cases as $k=>$case)

                    @if($k == 0 || $k%4 == 0)
                        <div class="row {{ ($k != 0) ? 'borderTop' : '' }}">
                    @endif

                            <div class="col-sm-3 {{ ($k%4 > 0) ? 'borderLeft' : '' }} {{ ($k>3) ? 'mrgTop' : '' }}">
                                <div class="service_block">
                                    <div class=" delay-03s animated wow  zoomIn" >
                                        {{--<span><i class="fa {{ $service->icon }}"></i></span>--}}
{{--                                        <img src="{{ asset('assets/img/technology/'.$technology->image) }}" alt="{{$technology->name}}" style="height: 100px;">--}}
                                        <h3 style="background-color: #98bf0c; padding-top: 5px; padding-bottom: 5px;">{{ $case->name }}</h3>
                                        <b><p style="color: black"> {{ $case->text }}</p><br>
                                        <p style="color: black">up to {{ $case->screens }} screens</p><br></b>
                                        {{--@if($k != 2)
                                            <br>
                                        @endif--}}
                                        <p style="color: black">Client side {{ $case->front }}</p>
                                        @if($k != 0)
                                            <p style="color: black">Server side (in case of need) {{ $case->back }}</p>
                                        @endif
                                    </div>
                                    {{--<h3 class="animated fadeInUp wow">{{ $service->name }}</h3>--}}
                                    {{--<p class="animated fadeInDown wow">{{ $service->text }}</p>--}}
                                </div>
                            </div>

                            @if(($k+1) %4 == 0)
                        </div>
                            @endif

                @endforeach

            </div>
            <p class="text-center" style="color: black">Take a notice, that your application is special and individual, so its cost can vary. Feel free to call or email us - we will gladly answer any of your questions concerning your app development.</p>
        </div>
        <br><br>
    </section>

@endif

<!--cases-->

<!--Footer-->
<footer class="footer_wrapper" id="contact">
    <div class="container">
        <section class="page_section contact" id="contact">
            <div class="contact_section">
                <h2 style="text-decoration: underline">Contact Us</h2>
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="contact_info">
                        <div class="detail">
                            <h4>LKMC Infoway</h4>
                            <p>30A, Kosmonavtiv avenue, Vinnitsia, Ukraine</p>
                        </div>
                        <div class="detail">
                            <h4>call us</h4>
                            <p>+38 063 724 52 97 <br>
                            +38 097 564 94 25</p>
                        </div>
                        <div class="detail">
                            <h4>Email us</h4>
                            <p>support@lkmc.com <br>
                            lkmc@gmail.com</p>
                        </div>
                    </div>



                    <ul class="social_links">
                        <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
                        <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                        <li class="gplus animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 wow fadeInLeft delay-06s">
                    <div class="form">
                        <form action="{{ route('home') }}" method="post">
                            <input class="input-text" type="text" name="name" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <input class="input-text" type="text" name="email" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <textarea class="input-text text-area" name="text" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                            <input class="input-btn" type="submit" value="send message">

                            {{--<input class="input-btn" type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                            {{--or--}}
                            {{ csrf_field() }}


                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="footer_bottom"><span>Copyright © 2017,    Template by LKMC LLC </a>. </span> </div>
    </div>
</footer>
{{--/**
 * Created by PhpStorm.
 * User: Kostiantyn
 * Date: 28.09.2017
 * Time: 16:43
 */--}}
