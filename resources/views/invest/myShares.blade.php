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
                <p>Мои доли</p>
                <hr>
            </div>

            <div class="col-md-3 pull-right" style="border: 1px solid black; margin-top: 42px;">
                <div>Menu</div>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{ route('invest') }}">Проекты</a></li>
                    <li class="active"><a href="{{ route('myShares') }}">Мои доли</a></li>
                    <li><a href="{{ route('partnersStructure') }}">Партнерская структура</a></li>
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

            <div class="col-md-3 pull-left" style="border: 1px solid black;">
                <div class="col-md-12">
                    <div style="padding: 30px 0px;">
                        {{ Html::image('images/header-logo.jpg') }}
                    </div>
                    <div>Zonto</div>
                    <div style="padding-bottom: 20px;">Бизнес система</div>
                    <div class="col-md-8">Цена доли:</div>
                    <div class="col-md-4 pull-right">1.2032€</div>
                    <div class="col-md-8">Куплено долей:</div>
                    <div class="col-md-4 pull-right">83</div>
                    <div class="col-md-8">Всего вложено:</div>
                    <div class="col-md-4 pull-right">91.96€</div>
                </div>
                <button class="col-md-12 btn btn-default">Купить доли</button>

            </div>

            <div class="col-md-12"></div>
            <button class="col-md-3 pull-right btn btn-default">Пригласить в Zonto</button>
            <div class="col-md-12"></div>
            <button class="col-md-3 pull-right btn btn-default">Пополнить баланс</button>

        </div>
    </div>
@endsection
