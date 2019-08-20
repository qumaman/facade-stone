@extends('layouts.default')
<!--=== End Slider ===-->

@section('content')
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
                <li class="list-group-item list-toggle">
                    <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-stamps" aria-expanded="true">Печати и штампы</a>
                    <ul id="collapse-stamps" class="collapsed collapse in">
                        <li class="{{ ($id == 1)?'active':'' }}"><a href="/stamps/1"> Печати ИП, ТОО, АО</a></li>
                        <li class="{{ ($id == 2)?'active':'' }}"><a href="/stamps/2"> Врачебные печати</a></li>
                        <li class="{{ ($id == 3)?'active':'' }}"><a href="/stamps/3"> Гербовые печати в соответствии с требованиями СТ РК 1430-2005</a></li>
                        <li class="{{ ($id == 4)?'active':'' }}"><a href="/stamps/4"> Печати нотариуса</a>{{--<span class="badge badge-u">New</span>--}}</li>
                        <li class="{{ ($id == 5)?'active':'' }}"><a href="/stamps/5"> Штампы</a></li>
                        <li class="{{ ($id == 6)?'active':'' }}"><a href="/stamps/6"> Датеры</a></li>
                        <li class="{{ ($id == 7)?'active':'' }}"><a href="/stamps/7"> Нумераторы</a></li>
                        <li class="{{ ($id == 8)?'active':'' }}"><a href="/stamps/8"> Факсимиле</a></li>
                        <li class="{{ ($id == 9)?'active':'' }}"><a href="/stamps/9"> Экслибрис (личная печать)</a></li>
                        <li class="{{ ($id == 10)?'active':'' }}"><a href="/stamps/10"> Печати по оттиску и эскизу</a></li>
                        <li class="{{ ($id == 11)?'active':'' }}"><a href="/stamps/11"> Клише для печатей и штампов</a></li>
                        <li class="{{ ($id == 12)?'active':'' }}"><a href="/stamps/12"> Ликвидация печати</a></li>
                        <li class="{{ ($id == 13)?'active':'' }}"><a href="/stamps/13"> Аксессуары</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <!--=== Content Part ===-->
            <div class="">
                <!-- Recent Works -->
                <div class="headline"><h2>Образцы</h2></div>
                <div class="row margin-bottom-20 stamp-images">
                    @foreach($stamps as $stamp)
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnails thumbnail-style thumbnail-kenburn">
                                <div class="thumbnail-img">
                                    <div class="overflow-hidden">
                                        <img class="img-responsive" src="/images/stamps/46045-pechat.jpg" alt="">
                                    </div>
                                    <a class="btn-more hover-effect" href="#">подробнее +</a>
                                </div>
                                <div class="caption">
                                    <h3><a class="hover-effect" href="#">{{ $stamp['title'] }}</a></h3>
                                    <p>{{ $stamp['article'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--<div class="col-md-3 col-sm-6">
                        <div class="thumbnails thumbnail-style thumbnail-kenburn">
                            <div class="thumbnail-img">
                                <div class="overflow-hidden">
                                    <img class="img-responsive" src="/images/stamps/46045-pechat.jpg" alt="">
                                </div>
                                <a class="btn-more hover-effect" href="#">подробнее +</a>
                            </div>
                            <div class="caption">
                                <h3><a class="hover-effect" href="#">Печать для организация</a></h3>
                                <p>46045</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnails thumbnail-style thumbnail-kenburn">
                            <div class="thumbnail-img">
                                <div class="overflow-hidden">
                                    <img class="img-responsive" src="/images/stamps/046045.jpg" alt="">
                                </div>
                                <a class="btn-more hover-effect" href="#">подробнее +</a>
                            </div>
                            <div class="caption">
                                <h3><a class="hover-effect" href="#">Печать для организация</a></h3>
                                <p>046045</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnails thumbnail-style thumbnail-kenburn">
                            <div class="thumbnail-img">
                                <div class="overflow-hidden">
                                    <img class="img-responsive" src="/images/stamps/046125.jpg" alt="">
                                </div>
                                <a class="btn-more hover-effect" href="#">подробнее +</a>
                            </div>
                            <div class="caption">
                                <h3><a class="hover-effect" href="#">Печать для организация</a></h3>
                                <p>046125</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnails thumbnail-style thumbnail-kenburn">
                            <div class="thumbnail-img">
                                <div class="overflow-hidden">
                                    <img class="img-responsive" src="/images/stamps/046140P3.jpg" alt="">
                                </div>
                                <a class="btn-more hover-effect" href="#">подробнее +</a>
                            </div>
                            <div class="caption">
                                <h3><a class="hover-effect" href="#">Печать для организация</a></h3>
                                <p>046140P3</p>
                            </div>
                        </div>
                    </div>--}}
                </div>
                <!-- End Recent Works -->

            </div><!--/container-->
            <!-- End Content Part -->
        </div>
    </div>

@stop