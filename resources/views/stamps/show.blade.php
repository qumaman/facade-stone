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
                                        @php
                                            $stamp_images1 = \App\Models\Image::where('stamp_id',$stamp['id'])->where('file_type_id',1)->orderBy('id', 'DESC')->first();
                                            $stamp_images2 = \App\Models\Image::where('stamp_id',$stamp['id'])->where('file_type_id',2)->orderBy('id', 'DESC')->first();
                                        @endphp
                                        @if ($stamp_images1)
                                            <a href="/images/stamps/{{ $stamp_images1['url'] }}">
                                        @else
                                            <a href="/images/stamps/46045-pechat.jpg" >
                                        @endif
                                            @if ($stamp_images2)
                                                <img class="img-responsive stamp-image" src="/images/stamps/thumbs/{{ $stamp_images2['url'] }}" alt="">
                                            @endif
                                            </a>
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
                </div>
                <!-- End Recent Works -->

            </div><!--/container-->
            <!-- End Content Part -->
        </div>
    </div>

@stop