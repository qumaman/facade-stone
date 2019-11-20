@extends('layouts.default')
<!--=== End Slider ===-->

@section('content')
<div class="row">
    <div class="col-md-3">
        <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
            <li class="list-group-item list-toggle">
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-designs" aria-expanded="true">Деловая полиграфия</a>
                <ul id="collapse-designs" class="collapsed collapse in">
                        <li><a href="/designs/1">  Визитки</a></li>
                        <li><a href="/designs/2">  Листовки</a></li>
                        <li><a href="/designs/3">  Буклеты</a></li>
                        <li><a href="/designs/4">  Брошюры</a></li>
                        <li><a href="/designs/5">  Грамоты/дипломы</a></li>
                        <li><a href="/designs/6">  Календари</a></li>
                        <li><a href="/designs/7">  Каталоги</a></li>
                        <li><a href="/designs/8">  Самокопирующиеся бланки</a></li>
                        <li><a href="/designs/9">  Меню</a></li>
                        <li><a href="/designs/10"> Портфолио</a></li>
                        <li><a href="/designs/11"> Разработка логотипа</a></li>
                        <li><a href="/designs/12"> Редизайн</a></li>
                </ul>
            </li>
            <li class="list-group-item list-toggle">
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-designs1" aria-expanded="true">Праздничная полиграфия</a>
                <ul id="collapse-designs1" class="collapsed collapse in">
                        <li><a href="/designs/13">  Пригласительные</a></li>
                        <li><a href="/designs/14">  Бонбоньерки</a></li>
                        <li><a href="/designs/15">  Оформление шоколада</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="col-md-9">

        <!--=== Content Part ===-->
        <div class="">
            <!-- Service Blocks -->
            <div class="row">

                <!-- Flat Testimonials -->
                <div class="flat-testimonials bg-image-v1 parallaxBg margin-bottom-60">
                    <div class="container-fluid">
                        <div class="headline-center headline-light margin-bottom-60">
                            <h2>Полиграфия и Дизайн</h2>
                        </div><!--/end Headline Center-->

                        <div class="row mb-5">
                            <div class="col-sm-4">
                                <div class="flat-testimonials-in md-margin-bottom-50">
                                    <img alt="" src="images/polygraphy/listovka.png" class="rounded-x img-responsive">
                                    <h3>Листовки</h3>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="flat-testimonials-in md-margin-bottom-50">
                                    <img alt="" src="images/polygraphy/price.png" class="rounded-x img-responsive">
                                    <h3>Буклеты</h3>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="flat-testimonials-in">
                                    <img alt="" src="images/polygraphy/pohvala.png" class="rounded-x img-responsive">
                                    <h3>Грамоты/Дипломы</h3>
                                </div>
                            </div>
                        </div><!--/end row-->
                        <div class="row mb-5">
                            <div class="col-sm-4">
                                <div class="flat-testimonials-in md-margin-bottom-50">
                                    <img alt="" src="images/polygraphy/listovka.png" class="rounded-x img-responsive">
                                    <h3>Листовки</h3>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="flat-testimonials-in md-margin-bottom-50">
                                    <img alt="" src="images/polygraphy/price.png" class="rounded-x img-responsive">
                                    <h3>Буклеты</h3>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="flat-testimonials-in">
                                    <img alt="" src="images/polygraphy/pohvala.png" class="rounded-x img-responsive">
                                    <h3>Грамоты/Дипломы</h3>
                                </div>
                            </div>
                        </div><!--/end row-->
                    </div><!--/end container-->
                </div>
                <!-- End Flat Testimonials -->
            </div>
            <!--<div class="row margin-bottom-30">
                <div class="row">
                    <div class="col-md-12">
                        <div class="headline-center">
                            <h2>Необходимые документы для заказа:</h2>
                        </div>
                            <p>Для индивидуальных предпринимателей</p>
                            <p>1. Справка или свидетельство о регистрации налогоплательщика ИП (зарегистрированные с 2017 года уведомление или талон)</p>
                            <p>2. Удостоверение личности.</p>
                            <p>Для созданных предприятий (ТОО)</p>
                            <p>1. Справка или свидетельство о регистрации ТОО, (или справку с е-гов) образец стр.1 стр.2</p>
                            <p>2. Удостоверение личности директора.</p>
                            <p>Готовая печать для ИП и ТОО выдается лично руководителю или по нотариально заверенной доверенности (или доверенность с 1С), при предъявлении удостоверения личности.</p>
                            <p>При изготовление штампа с указанием наименования предприятия и БИН/ИИН полный пакет документов, как и при заказе печати.</p>
                            <p>Для врачебных печатей</p>
                            <p>1. Диплом</p>
                            <p>2. Удостоверение личности директора</p>
                            <p>3. Справка с места работы</p>
                            <p>Для факсимиле</p>
                            <p>Удостоверение личности и личный образец подписи на листе формата А4 реального размера</p>

                        <div class="headline-center">
                            <h2>При ликвидации предприятия:</h2>
                        </div>
                            <p>1. Письмо из налогового комитета об отсутствии задолженности перед бюджетом (обычно в табличной форме)</p>
                            <p>2. Решение директора или учредителя о ликвидации</p>
                            <p>3. Свидетельство о регистрации или справка с е-гов (для ТОО), свидетельство о регистрации или талон (для ИП)</p>
                            <p>4. Документ подтверждающий статус учредителя или руководителя (что то из: устав, приказ, учредительный договор)</p>
                            <p>5. Удостоверение личности директора</p>
                            <p>6. В случае если директор не может присутствовать доверенность на доверенное лицо и удостоверение личности.</p>
                            <p>Акт уничтожения будет составлен в 2-х экземплярах.</p>
                            <p>При перерегистрации, реорганизации, изменения дизайна, износе, порче</p>
                            <p>1. Свидетельство о гос.регистрации или справка с е-гов (для ТОО), талон (для ИП)</p>
                            <p>2. Документ подтверждающий статус учредителя или руководителя (что то из: устав, приказ, учредительный договор)</p>
                            <p>3. Удостоверение личности директора</p>
                            <p>4. В случае если директор не может присутствовать доверенность на доверенное лицо и удостоверение личности.</p>
                            <p>Акт уничтожения будет составлен в 2-х экземплярах.</p>
                            <p>При утере главной печати предприятия:</p>
                            <p>1. Свидетельство о регистрации или справка с е-гов (для ТОО), свидетельство о регистрации или талон (для ИП)</p>
                            <p>2. Удостоверение личности директора</p>
                            <p>3. В случае если директор не может присутствовать доверенность на доверенное лицо и удостоверение личности.</p>
                            <p>4. Справка об утере печати со стола находок, и квитанция с газеты с объявлением</p>

                        <div class="headline-center">
                            <h2>Основные требования к печатям и штампам</h2>
                            <p>В центральном поле клише печати располагается:</p>
                        </div>
                        <p>&bull; название организации, логотип, эмблема ,</p>
                        <p>&bull; фамилия, имя и отчество - для индивидуальных предпринимателей.</p>
                        <div class="headline-center">
                            <p>В нижней части центрального поля печати размещается следующая вспомогательная информация:</p>
                        </div>
                        <p>&bull; номер печати (если печать для данного юридического лица изготовлена не в единственном экземпляре), обозначаемый арабскими цифрами, начиная с цифры 2 для второй печати, 3 для третьей и т.д.;</p>
                        <p>&bull; для печати дубликата, взамен утерянной, ставится буква Д с записанным через дефис порядковым номером дубликата, начиная с римской цифры I для первого дубликата печати;</p>
                        <p>&bull; допускается другая вспомогательная информацию о печати, например, &quot;для счетов&quot;, &quot;для накладных&quot; и т.д..</p>
                        <p>Наименование юридического лица должно соответствовать наименованию, закрепленному в учредительных документах. Сокращенное наименование приводится в тех случаях, когда оно закреплено в учредительных документах, и помещается в круглых скобках после полного наименования. Для индивидуальных предпринимателей указывается фамилия, имя, отчество, а также ИИН индивидуального предпринимателя.</p>
                        <p>Местоположение предприятия - город, область, район - является обязательной информацией.</p>
                        <p>&nbsp;</p>
                        <div class="headline-center text-danger">
                            <h2 class="h2 text-danger">Мы не делаем копии печатей!</h2>
                        </div>
                        <p>Подделка печатей ведёт за собой уголовную ответственность.</p>
                        <p>Статья 385. Подделка, изготовление или сбыт поддельных документов, <span class="text-danger">штампов, печатей, бланков</span>, государственных знаков почтовой оплаты, государственных наград</p>
                        <p>1. Подделка удостоверения или иного официального документа, предоставляющего права или освобождающего от обязанностей, либо сбыт такого документа, а равно изготовление или сбыт поддельных <span class="text-danger">штампов, печатей, бланков</span>, государственных знаков почтовой оплаты, государственных наград Республики Казахстан или СССР - наказываются штрафом в размере до двух тысяч месячных расчетных показателей либо исправительными работами в том же размере, либо ограничением свободы на срок до двух лет, либо лишением свободы на тот же срок.</p>
                        <p>2. Те же деяния, совершенные неоднократно или группой лиц по предварительному сговору, -наказываются штрафом в размере до четырех тысяч месячных расчетных показателей либо исправительными работами в том же размере, либо ограничением свободы на срок до четырех лет, либо лишением свободы на тот же срок.</p>
                        <p>3. Использование заведомо подложного документа -наказывается штрафом в размере до трехсот месячных расчетных показателей либо исправительными работами в том же размере, либо привлечением к общественным работам на срок до двухсот сорока часов, либо арестом на срок до семидесяти пяти суток.</p>
                        <p>&nbsp;</p>
                        <div class="headline-center">
                        <h2>Регламент проверки макета заказчиком перед утверждением.</h2>
                        <h3 class="text-success">Перед изготовлением печати или штампа, высылается макет Заказчику на проверку.</h3>
                        <h3 class="text-success">Изготовление производим после утверждения!</h3>
                        </div>
                        <p>1.1 Убедительная просьба, внимательно проверяйте макет.</p>
                        <p>1.2 За допущенные орфографические ошибки в макете, <span class="text-danger">ответственность несет Заказчик</span>, т.к. печать или штамп изготовили после утверждения. Исправления ошибок в макет будут внесены со слов заказчика бесплатно.</p>
                        <p>1.3 Ошибки, найденные в готовом изделии, после утверждения макета, не являются основанием для претензий, но клише подлежит новому изготовлению.</p>
                        <p>1.4 В случае внесения корректировки в ранее утвержденный макет (изменения дизайна, косички), необходимо, уведомить менеджера по электронной почте или по контактному телефону.</p>
                        <p>1.5 Если макет уже запущен в производство, изменения возможны только за дополнительную плату.</p>
                        <p>1.6 В случае утверждения по электронной почте, не забудьте <span class="text-success">прикрепить файл, который утверждаете</span>.</p>
                        <p>1.7 После <span class="text-success">УТВЕРЖДЕНИЯ</span> макета, он принимается в работу и отправляется на изготовление.</p>
                        <p class="text-success">При утверждении макетов заказчик сам выступает в роли корректора и несет ответственность за допущенные в макете грамматические и иные ошибки.</p>

                    </div>
                </div>
            </div>-->
            <div class="row margin-bottom-30">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service">
                            {{--<i class="fa fa-rocket service-icon"></i>--}}
                            <div class="desc">
                                <h4>Фото-копировальные услуги</h4>
                            </div>
                            <div class="col-md-12">
                                <p>-Цветное и черно-белое копирование и распечатка до А3+ формата</p>
                                <p>(в наличии различные виды бумаг - глянцевая, матовая, дизайнерская)</p>
                                <p>-Печать фотографий</p>
                                <p>-Фото на документы</p>
                                <p>-Переплет документов</p>
                                <p>-Сканирование цветных документов</p>
                                <p>-Ламинирование </p>
                                <p>-Запись/перезапись CD|DVD дисков</p>
                                <p>-Интернет услуги</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service">
                            {{--<i class="fa fa-rocket service-icon"></i>--}}
                            <div class="desc">
                                <h4>Деловая полиграфия</h4>
                            </div>
                            <div class="col-md-12">
                                <p>- Визитки</p>
                                <p>- Листовки</p>
                                <p>- Буклеты</p>
                                <p>- Брошюры</p>
                                <p>- Грамоты/дипломы</p>
                                <p>- Календари</p>
                                <p>- Каталоги</p>
                                <p>- Самокопирующиеся бланки</p>
                                <p>- Меню</p>
                                <p>- Портфолио</p>
                                <p>- Разработка логотипа </p>
                                <p>- Редизайн</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service">
                            {{--<i class="fa fa-cogs service-icon"></i>--}}
                            <div class="desc">
                                <h4>Печати и штампы</h4>
                            </div>
                            <div class="col-md-12">
                                <p>- Печати ИП, ТОО, АО</p>
                                <p>- Врачебные печати</p>
                                <p>- Гербовые печати</p>
                                <p>- Печати нотариуса</p>
                                <p>- Штампы</p>
                                <p>- Датеры</p>
                                <p>- Нумераторы</p>
                                <p>- Факсимиле</p>
                                <p>- Экслибрис (личная печать)</p>
                                <p>- Печати по оттиску и эскизу</p>
                                <p>- Клише для печатей и штампов</p>
                                <p>- Ликвидация печати</p>
                                <p>- Аксессуары</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service">
                            {{--<i class="fa fa-compress service-icon"></i>--}}
                            <div class="desc">
                                <h4>Лазерная резка и гравировка</h4>
                            </div>
                            <div class="col-md-12">
                                <p>- Таблички на двери</p>
                                <p>- Бейджи</p>
                                <p>- Номерки</p>
                                <p>- Декоративные рамки</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service">
                            {{--<i class="fa fa-rocket service-icon"></i>--}}
                            <div class="desc">
                                <h4>Праздничная полиграфия</h4>
                            </div>
                            <div class="col-md-12">
                                <p>- Пригласительные </p>
                                <p>- Бонбоньерки</p>
                                <p>- Оформление шоколада</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Service Blokcs -->


            <!-- Owl Clients v1 -->
            <div class="headline"><h2>Наши клиенты</h2></div>
            <div class="owl-clients-v1">
                <div class="item py-1">
                    <img src="assets/img/clients5/nationalbank.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients5/KazEnergoGroup.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients5/kazng.png" alt="">
                </div>
                <div class="item py-2 px-2">
                    <img src="assets/img/clients5/htl.png" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/clients5/Nanotech Paints.png" alt="">
                </div>
                <div class="item px-2">
                    <img src="assets/img/clients5/damulogistics.png" alt="">
                </div>
                <div class="item py-1">
                    <img src="assets/img/clients5/tam.png" alt="">
                </div>
            </div>
            <!-- End Owl Clients v1 -->
        </div><!--/container-->
        <!-- End Content Part -->
    </div>
</div>

@stop