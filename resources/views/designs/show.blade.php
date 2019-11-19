@extends('layouts.default')
<!--=== End Slider ===-->

@section('content')
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
                <li class="list-group-item list-toggle">
                    <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-designs" aria-expanded="true">Деловая полиграфия</a>
                    <ul id="collapse-designs" class="collapsed collapse in">
                        <li class="{{ ($id == 1)?'active':'' }}"><a href="/designs/1">   Визитки</a></li>
                        <li class="{{ ($id == 2)?'active':'' }}"><a href="/designs/2">   Листовки</a></li>
                        <li class="{{ ($id == 3)?'active':'' }}"><a href="/designs/3">   Буклеты</a></li>
                        <li class="{{ ($id == 4)?'active':'' }}"><a href="/designs/4">   Брошюры</a></li>
                        <li class="{{ ($id == 5)?'active':'' }}"><a href="/designs/5">   Грамоты/дипломы</a></li>
                        <li class="{{ ($id == 6)?'active':'' }}"><a href="/designs/6">   Календари</a></li>
                        <li class="{{ ($id == 7)?'active':'' }}"><a href="/designs/7">   Каталоги</a></li>
                        <li class="{{ ($id == 8)?'active':'' }}"><a href="/designs/8">   Самокопирующиеся бланки</a></li>
                        <li class="{{ ($id == 9)?'active':'' }}"><a href="/designs/9">   Меню</a></li>
                        <li class="{{ ($id == 10)?'active':'' }}"><a href="/designs/10"> Портфолио</a></li>
                        <li class="{{ ($id == 11)?'active':'' }}"><a href="/designs/11"> Разработка логотипа</a></li>
                        <li class="{{ ($id == 12)?'active':'' }}"><a href="/designs/12"> Редизайн</a></li>
                    </ul>
                </li>
                <li class="list-group-item list-toggle">
                    <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-designs" aria-expanded="true">Праздничная полиграфия</a>
                    <ul id="collapse-designs" class="collapsed collapse in">
                        <li class="{{ ($id == 21)?'active':'' }}"><a href="/designs/21">   Пригласительные</a></li>
                        <li class="{{ ($id == 22)?'active':'' }}"><a href="/designs/22">   Бонбоньерки</a></li>
                        <li class="{{ ($id == 23)?'active':'' }}"><a href="/designs/23">   Оформление шоколада</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <!--=== Content Part ===-->
            <div class="">
                <!-- Recent Works -->
                <div class="headline"><h2>Образцы</h2></div>
                <div class="row margin-bottom-20 design-images">
                    <div class="col-md-12 col-sm-6">
                        <div class="thumbnails thumbnail-style thumbnail-kenburn row">
                            <div class="thumbnail-img col-md-3">
                                <div class="overflow-hidden">
                                    <a href="/images/polygraphy/price.png" >
                                        <img class="img-responsive stamp-image" src="/images/polygraphy/price.png" alt="">
                                    </a>
                                </div>
                                <a class="btn-more hover-effect" href="#">подробнее +</a>
                            </div>
                            <div class="caption col-md-9">
                                <h3><a class="hover-effect" href="#"></a></h3>
                                <h2>ДИЗАЙН И РАЗРАБОТКА БУКЛЕТОВ</h2>
                                <ul>
                                    <li>Профессиональное изготовление оригинал-макета</li>

                                    <li>профессиональная предметная фотосъемка</li>

                                    <li>Индивидуальное исполнение в соответствии с требованиями заказчика</li>

                                    <li>Изготовление макета от 1 дня</li>
                                </ul>
                                <h2>Требования к макетам заказчика</h2>
                                <ol>
                                    <li>Макеты принимаются к печати в векторных форматах (CorelDraw, Illustrator, QwarkXpress любая версия)</li>

                                    <li>В растровых форматах JPG, TIF, PSD (разрешение не меньше 300 dpi).</li>

                                    <li>Файлы в других форматах, сделанные в Word, Publisher, Excel, PowerPoint, AutoCad, макетами не считаются.</li>

                                    <li>Все цвета, за исключением дополнительных (Pantone), должны быть в цветовой модели CMYK или Grayscale.</li>

                                    <li>В случаях цифровой печати можно использовать цветовую модель RGB, обязательно выделив этот момент в техническом задании!!!</li>

                                    <li>Используемые шрифты должны быть переведены в кривые.</li>

                                    <li>Если в макете есть элементы, идущие "на вылет" или касающиеся обрезного края, они должны выходить за обрез на 5 мм.</li>

                                    <li>Информационную часть публикации (текст, телефоны, адреса) не размещайте ближе 4 мм от края.</li>
                                </ol>
                                <h2>Эффективная и информативная реклама</h2>
                                <p>Буклет – это популярное непериодическое издание, которое выпускается на одном листе, и имеет один или несколько сгибов (фальцев).</p>
                                <h2>Технология печати</h2>
                                <p>Чтобы получить буклет, необходимо провести ряд мероприятий. На каждом этапе требуется четкое соблюдение технологий и использование подходящих материалов.</p>
                                <ol>
                                    <li>Разработка дизайна. Мы печатаем буклеты по вашим макетам, если дизайна у вас нет, специалисты компании ExpressCopy помогут с разработкой дизайна.</li>

                                    <li>Подготовка к печати. На этом этапе проводится проверка макетов, если обнаруживаются ошибки – их устраняют. </li>

                                    <li>Непосредственно печать продукции. На бумагу изображение наносится методом офсетной или цифровой печати, выбор того или иного способа зависит от тиража и особенностей буклета.</li>

                                    <li>Послепечатная обработка (фальцовка буклета, упаковка и пр.).</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    @foreach($designs as $design)
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnails thumbnail-style thumbnail-kenburn">
                                <div class="thumbnail-img">
                                    <div class="overflow-hidden">
                                        @php
                                            $design_images1 = \App\Models\Image::where('design_id',$design['id'])->where('file_type_id',1)->orderBy('id', 'DESC')->first();
                                            $design_images2 = \App\Models\Image::where('design_id',$design['id'])->where('file_type_id',2)->orderBy('id', 'DESC')->first();
                                        @endphp
                                        @if ($design_images1)
                                            <a href="/images/designs/{{ $design_images1['url'] }}">
                                        @else
                                            <a href="/images/designs/46045-pechat.jpg" >
                                        @endif
                                            @if ($design_images2)
                                                <img class="img-responsive design-image" src="/images/designs/thumbs/{{ $design_images2['url'] }}" alt="">
                                            @endif
                                            </a>
                                    </div>
                                    <a class="btn-more hover-effect" href="#">подробнее +</a>
                                </div>
                                <div class="caption">
                                    <h3><a class="hover-effect" href="#">{{ $design['title'] }}</a></h3>
                                    <p>{{ $design['article'] }}</p>
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