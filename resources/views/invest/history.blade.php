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


            <div class="col-md-9">
                <div class="col-md-12" style="margin: 20px 0;">
                    История операций
                </div>
                <div class="col-md-12">
                    <table>
                        <tr data-toggle="collapse" data-target="#level1" class="clickable"
                            style="border-top: 1px solid #f2dede;height: 100px;">
                            <td class="col-md-1">13 ноя</td>
                            <td class="col-md-1">icon</td>
                            <td class="col-md-9">пополнение баланса<br>
                                В обработке
                            </td>
                            <td class="col-md-1 pull-right">100 €</td>
                        </tr>

                        <tr id="level1" class="collapse">
                            <td colspan="4" style="border-top: 2px solid white">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">Дата заявки 13.11.2016 15:30:41<br>
                                    Сумма
                                    100.00 €
                                </div>
                                <div class="col-md-4">Платежная система Bank Order</div>
                            </td>
                        </tr>

                        <tr data-toggle="collapse" data-target="#level2" class="clickable"
                            style="border-top: 1px solid #f2dede;height: 100px;">
                            <td class="col-md-1">13 ноя</td>
                            <td class="col-md-1">icon</td>
                            <td class="col-md-9">пополнение баланса<br>
                                В обработке
                            </td>
                            <td class="col-md-1 pull-right">100 €</td>
                        </tr>
                        <tr id="level2" class="collapse">
                            <td colspan="4" style="border-top: 2px solid white">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">Дата заявки 13.11.2016 15:30:41<br>
                                    Сумма
                                    100.00 €
                                </div>
                                <div class="col-md-4">Платежная система Bank Order</div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


            <div class="col-md-3 pull-right" style="border: 1px solid black; margin-top: 42px;">
                <div>Menu</div>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{ route('invest') }}">Проекты</a></li>
                    <li><a href="{{ route('myShares') }}">Мои доли</a></li>
                    <li><a href="{{ route('partnersStructure') }}">Партнерская структура</a></li>
                    <li class="active"><a href="{{ route('balance') }}">Финансы</a></li>
                    <li><a href="{{ route('balance') }}">....Баланс</a></li>
                    <li><a href="{{ route('payment') }}">.....Пополнение баланса личного кабинета</a></li>
                    <li><a href="{{ route('outPayment') }}">.....Внешний перевод</a></li>
                    <li><a href="{{ route('inPayment') }}">.....Внутренний перевод</a></li>
                    <li class="active"><a href="{{ route('history') }}">.....История операций</a></li>
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
