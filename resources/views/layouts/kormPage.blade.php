@extends('layouts.app')
@section('content')
@if(isset($korm))
    @php
        $string = strip_tags($korm->title);
        $string = mb_substr($string, 0, 40);
        $string = rtrim($string, "!,.-");
        $string = substr($string, 0, strrpos($string, ' '));
    @endphp
    <ol class="breadcrumb">
        <li><a href="/">Головна</a></li>
        <li><a href="/korma" >Корми</a></li>
        <li class="active">{{ $string ? $string."..." : $korm->title }}</li>
    </ol>
    <article class="kormPage">
        <div class="head">
        <div class="col-md-4">
            <a class="img_popup" href="/uploads/{{$korm->img_link}}">
                <img src="/uploads/{{$korm->img_link}}" alt="">
            </a>
        </div>
        <div class="col-md-8">
            <hr class="style">
             <h1>{{$korm->title}}</h1>
            <hr class="style">
        </div>
        </div>
        <hr>
        <section class="col-md-12 ">
            <ul class="nav nav-tabs" id="kormPage">
                <li class="active"><a href="#doc" data-toggle="tab">Детальніше</a></li>
                <li><a href="#nor" data-toggle="tab">Норми по годівлі</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane clearfix fade in  active" id="doc">
                    {!! $korm->description !!}
                </div>
                <div class="tab-pane clearfix fade in " id="nor">
                    <table style="width:502px;" border="1" cellspacing="1" cellpadding="0">
                        <tbody><tr><td colspan="2">
                                <p align="center">Нормы по кормлению:</p>
                            </td></tr>
                        <tr><td>
                                <p align="center">Вес животного, кг</p>
                            </td><td>
                                <p align="center">Кол-во корма, грамм/день</p>
                            </td></tr>
                        <tr><td>
                                <p align="center">5</p>
                            </td>
                            <td>
                                <p align="center">80 - 100</p>
                            </td></tr>
                        <tr><td>
                                <p align="center">10</p>
                            </td><td>
                                <p align="center">125 - 165</p>
                            </td></tr><tr><td><p align="center">20</p>
                            </td>
                            <td><p align="center">200 - 260</p></td></tr><tr><td><p align="center">30</p></td><td><p align="center">300 - 340</p></td></tr><tr><td><p align="center">40</p></td><td><p align="center">390 - 430</p></td></tr><tr><td><p align="center">60</p></td><td><p align="center">420 - 560</p></td></tr>
                        </tbody></table>
                </div>
            </div>
        </section>
    </article>
    <div class="clearfix"></div>
    <div class="row">
        <hr class="style2">
        <div class="footer-block-contain">
            <div class="block">
                <i style="color: rgb(47, 90, 81);" class="fa fa-truck  fa-2x" aria-hidden="true"></i><br>
                Швидка доставка
            </div>
            <div class="block ">
                <i style="color: green" class="fa  fa-money fa-2x" aria-hidden="true"></i><br>найкраща ціна
            </div>
            <div class="block ">
                <i style="color: rgb(47, 90, 81);" class="fa fa-phone-square fa-2x" aria-hidden="true"></i><br>
                +38-050-66-953-66
            </div>
        </div>
        <hr class="style2">
    </div>
@endif
@endsection