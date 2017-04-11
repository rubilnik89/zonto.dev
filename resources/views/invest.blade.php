@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Finance</a></li>
                        <li class="active"><a href="#">Invest</a></li>
                        <li><a href="#">Alliance</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Обратная связь</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 10px;">
                <a style="margin-right: 70px" href="#">Все проекты</a>
                <a style="margin-right: 70px" href="#">Голосовать за проект</a>
                <a style="margin-right: 70px" href="#">Архив проектов</a>
            </div>

            <div class="col-md-9" style="background-color: #b6a338; padding: 30px; margin-top: 10px;">Claider</div>

            <div class="col-md-3 pull-right" style="border: 1px solid black; margin-top: 10px;">
                <div>Menu</div>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">Проекты</a></li>
                    <li><a href="#">Мои доли</a></li>
                    <li><a href="#">Партнерская структура</a></li>
                    <li><a href="#">Финансы</a></li>
                    <li><a href="#">Мой профиль</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Правила и Соглашения</a></li>
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
                <div style="padding: 30px 0px;">
                {{ Html::image('images/header-logo.jpg') }}
                </div>
                <div>Zonto</div>
                <div style="padding-bottom: 20px;">Бизнес система</div>
                <div class="col-md-8">Цена доли:</div>
                <div class="col-md-4 pull-right">1.2032€</div>
                <div class="col-md-8">Осталось долей:</div>
                <div class="col-md-4 pull-right">30 873</div>
                <div class="col-md-8">Прибыль на долю в год:</div>
                <div class="col-md-4 pull-right">2€</div>
                <div class="col-md-8">Срок привлечения(месяцев):</div>
                <div class="col-md-4 pull-right">60</div>
                <div class="col-md-8">Этап:</div>
                <div class="col-md-4 pull-right">1/1</div>
            </div>

        </div>
    </div>
@endsection
