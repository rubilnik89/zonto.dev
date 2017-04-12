@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <a href="#" class="btn">Главная</a>
                <a href="#" class="btn">Finance</a>
                <a href="{{ route('invest') }}" class="btn active">Invest</a>
                <a href="#" class="btn">Alliance</a>
                <a href="#" class="btn">Новости</a>
                <a href="#" class="btn">Обратная связь</a>
            </div>

            <div class="col-md-9" style="margin-top: 10px;">
                <p>Партнерская структура Zonto Invest</p>
                <hr>
            </div>

            <div class="col-md-9">
                <div class="col-md-6" style="border: 1px solid #f2dede; padding: 10px;text-align: center;">
                    Кол-во прямых партнеров
                    <br>
                    39
                </div>
                <div class="col-md-6" style="border: 1px solid #f2dede; padding: 10px;text-align: center;">
                    Кол-во прямых партнеров 2-го и 3-го уровня
                    <br>
                    2
                </div>
                <div class="col-md-6" style="border: 1px solid #f2dede; padding: 10px;text-align: center;">
                    Общая прибыль
                    <br>
                    0,29 €
                </div>

                <div class="col-md-12" style="margin: 20px 0;">
                    Реферальная ссылка: http://zonto.me/ru/referral/1
                </div>

                <div class="col-md-12" style="border: 1px solid #f2dede;">
                    <table>
                        <tr data-toggle="collapse" data-target="#level1" class="clickable">
                            <td style="width: 1000px;height: 100px;border-bottom: 1px solid #f2dede;">Партнеры 1 уровня</td>
                        </tr>
                        <tr id="level1" class="collapse">
                            <td style="border-top: 2px solid white">
                                37 Сергей ooo.ermolov@yandex.ru<hr>
                                37 Сергей ooo.ermolov@yandex.ru<hr>
                                37 Сергей ooo.ermolov@yandex.ru<hr>
                            </td>
                        </tr>
                        <tr data-toggle="collapse" data-target="#level2" class="clickable">
                            <td style="width: 1000px;height: 100px;">Партнеры 2 уровня</td>
                        </tr>
                        <tr id="level2" class="collapse">
                            <td style="border-top: 2px solid white">
                                37 Сергей ooo.ermolov@yandex.ru<hr>
                                37 Сергей ooo.ermolov@yandex.ru<hr>
                                37 Сергей ooo.ermolov@yandex.ru<hr>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


            <div class="col-md-3 pull-right" style="border: 1px solid black;">
                <div>Menu</div>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{ route('invest') }}">Проекты</a></li>
                    <li><a href="{{ route('myShares') }}">Мои доли</a></li>
                    <li class="active"><a href="{{ route('partnersStructure') }}">Партнерская структура</a></li>
                    <li><a href="{{ route('balance') }}">Финансы</a></li>
                    <li><a href="{{ route('profile') }}">Мой профиль</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('rules') }}">Правила и Соглашения</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
                <hr>
                <div>Баланс</div>
                <div class="col-md-6">0.36 €</div>
                <div class="col-md-6">общий баланс</div>
                <div class="col-md-6">0.29 €</div>
                <div class="col-md-6">реф. баланс</div>
            </div>

            <div class="col-md-12"></div>
            <button class="col-md-3 pull-right btn btn-default">Пригласить в Zonto</button>
            <div class="col-md-12"></div>
            <button class="col-md-3 pull-right btn btn-default">Пополнить баланс</button>

        </div>
    </div>
@endsection
