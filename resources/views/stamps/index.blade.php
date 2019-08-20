@extends('layouts.default')
<!--=== End Slider ===-->

@section('content')
<div class="row">
    <div class="col-md-3">
        <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
            <li class="list-group-item list-toggle">
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-stamps" aria-expanded="true">Печати и штампы</a>
                <ul id="collapse-stamps" class="collapsed collapse in">
                        <li><a href="/stamps/1"> Печати ИП, ТОО, АО</a></li>
                        <li><a href="/stamps/2"> Врачебные печати</a></li>
                        <li><a href="/stamps/3"> Гербовые печати в соответствии с требованиями СТ РК 1430-2005</a></li>
                        <li><a href="/stamps/4"> Печати нотариуса</a>{{--<span class="badge badge-u">New</span>--}}</li>
                        <li><a href="/stamps/5"> Штампы</a></li>
                        <li><a href="/stamps/6"> Датеры</a></li>
                        <li><a href="/stamps/7"> Нумераторы</a></li>
                        <li><a href="/stamps/8"> Факсимиле</a></li>
                        <li><a href="/stamps/9"> Экслибрис (личная печать)</a></li>
                        <li><a href="/stamps/10"> Печати по оттиску и эскизу</a></li>
                        <li><a href="/stamps/11"> Клише для печатей и штампов</a></li>
                        <li><a href="/stamps/12"> Ликвидация печати</a></li>
                        <li><a href="/stamps/13"> Аксессуары</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="col-md-9">
        {{--<!--=== Purchase Block ===-->
        <div class="purchase">
                <div class="row">
                    <div class="col-md-9 animated fadeInLeft">
                        <span>Unify is a clean and fully responsive incredible Template.</span>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi  vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat corrupti quos.</p>
                    </div>
                    <div class="col-md-3 btn-buy animated fadeInRight">
                        <a href="#" class="btn-u btn-u-lg"><i class="fa fa-cloud-download"></i> Download Now</a>
                    </div>
                </div>
        </div><!--/row-->
        <!-- End Purchase Block -->--}}

        <!--=== Content Part ===-->
        <div class="">
            {{--<!-- Service Blocks -->
            <div class="row margin-bottom-30">
                <div class="col-md-4">
                    <div class="service">
                        <i class="fa fa-compress service-icon"></i>
                        <div class="desc">
                            <h4>Fully Responsive</h4>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <i class="fa fa-cogs service-icon"></i>
                        <div class="desc">
                            <h4>HTML5 + CSS3</h4>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <i class="fa fa-rocket service-icon"></i>
                        <div class="desc">
                            <h4>Launch Ready</h4>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Service Blokcs -->--}}

            {{--<!-- Recent Works -->
            <div class="headline"><h2>Recent Works</h2></div>
            <div class="row margin-bottom-20">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="assets/img/main/img1.jpg" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project One</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="assets/img/main/img12.jpg" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project Two</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="assets/img/main/img3.jpg" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project Three</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="assets/img/main/img17.jpg" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project Four</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Recent Works -->--}}

            <!-- Info Blokcs -->
            <div class="row margin-bottom-30">
                <!-- Welcome Block -->
                <ul class="col-md-12 md-margin-bottom-40">
                    <div class="headline"><h2>Печати и штампы</h2></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p>ExpressCopy — это парк оборудования, обладающий необходимыми мощностями, чтобы удовлетворить потребности заказчика в таких направлениях как оперативная полиграфия и дизайн (изготовление полиграфической продукции в короткие сроки), лазерная гравировка (изготовление печатей и штампов, многоцветных печатей, печатей с защитой от подделки), копировально — печатные услуги (копирование и печать в больших объемах) и др.</p>
                            <blockquote class="hero-unify">
                            <ul class="list-unstyled margin-bottom-20">
                                <li>- Печати ИП, ТОО, АО</li>
                                <li>- Врачебные печати</li>
                                <li>- Гербовые печати</li>
                                <li>- Печати нотариуса</li>
                                <li>- Штампы</li>
                                <li>- Датеры</li>
                                <li>- Нумераторы</li>
                                <li>- Факсимиле</li>
                                <li>- Экслибрис (личная печать)</li>
                                <li>- Печати по оттиску и эскизу</li>
                                <li>- Клише для печатей и штампов</li>
                                <li>- Ликвидация печати</li>
                                <li>- Аксессуары</li>
                            </ul>
                            </blockquote>
                        </div>
                    </div>
                </div><!--/col-md-8-->

                {{--<!-- Latest Shots -->
                <div class="col-md-4">
                    <div class="headline"><h2>Latest Shots</h2></div>
                    <div id="myCarousel" class="carousel slide carousel-v1">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="assets/img/main/img4.jpg" alt="">
                                <div class="carousel-caption">
                                    <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="assets/img/main/img2.jpg" alt="">
                                <div class="carousel-caption">
                                    <p>Cras justo odio, dapibus ac facilisis into egestas.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="assets/img/main/img24.jpg" alt="">
                                <div class="carousel-caption">
                                    <p>Justo cras odio apibus ac afilisis lingestas de.</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-arrow">
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!--/col-md-4-->--}}
            </div>
            <!-- End Info Blokcs -->

            {{--<!-- Owl Clients v1 -->
            <div class="headline"><h2>Our Clients</h2></div>
            <div class="owl-clients-v1">
                <div class="item">
                    <img src="assets/img/clients4/1.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/2.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/3.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/4.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/5.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/6.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/7.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/8.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients4/9.png" alt="">
                </div>
            </div>
            <!-- End Owl Clients v1 -->--}}
        </div><!--/container-->
        <!-- End Content Part -->
    </div>
</div>

@stop