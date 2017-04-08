    <div class="container-fluid">
        <div class="top_header">
                <div class="row topmenu">
                    <div class="col-md-4 col-xs-4 text-center">
                        <p id="nameOfSite"><a href="/">Назва сайту</a></p>
                    </div>
                    <div class="col-md-3  col-xs-4">

                            <img id="logo" class="col-md-offset-3" src="/img/logo.png" alt="">

                    </div>
                    <div class="col-md-4 col-xs-4 col-lg-4 no_padding cont">
                        <ul>
                            <li> <i class="glyphicon glyphicon-phone-alt"></i> 38-050-66-953-66</li>
                            <li><i class="glyphicon glyphicon-phone-alt"> </i> 38-050-66-953-66</li>
                            <li> <i class="glyphicon glyphicon-envelope"></i> phpner@gmail.com</li>
                        </ul>
                    </div>

                </div>
            </div>
        <div class="row topmenu_under">
        <div class="top_menu_left col-md-6">
            <a class="uslugi" href="{{route('uslugi')}}">
                @php include_once "/img/icons/uslug.svg"; @endphp
                <br>
                Ветеринарні послуги
            </a>
            <a class="korm" href="{{route('korma')}}">
                @php include_once "/img/icons/korm.svg"; @endphp
                <br>
                Корми
            </a>
        </div>
            <div class="top_menu_right col-md-6">
                <a class="likar" href="{{route('callDoctor')}}">
                   @php include_once "/img/icons/call.svg"; @endphp
                     <br> Виклик лікаря додому
                </a>
                <a class="step" href="{{route('find')}}">
                    @php include_once "/img/icons/step.svg"; @endphp
                    <br> як нас знайти
                </a>
            </div>
        </div>

        </div>






