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

            <div class="col-md-12" style="margin-top: 10px;">
                <a style="margin-right: 70px" href="#">Все проекты</a>
                <a style="margin-right: 70px" href="#">Голосовать за проект</a>
                <a style="margin-right: 70px" href="#">Архив проектов</a>
            </div>

            <div class="col-md-9" style="background-color: #b6a338; padding: 30px; margin-top: 10px;">
                <a href="#">Все категории</a>
                <a href="#">IT</a>
                <a href="#">Здоровье</a>
                <a href="#">Образование</a>
                <a href="#">Hi-Tech</a>
                <a href="#">Экология</a>
                <a href="#">Музыка</a>
                <a href="#">Питание</a>
                <a href="#">Спорт</a>
                <a href="#">Медицина</a>
                <a href="#">Мультимедиа</a>
                <a href="#">Маркетинг</a>
                <a href="#">Поиск работы</a>
                <a href="#">Бизнес & Финансы</a>
            </div>

            <div class="col-md-3 pull-right" style="border: 1px solid black; margin-top: 10px;">
                <div>Menu</div>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="{{ route('invest') }}">Проекты</a></li>
                    <li><a href="{{ route('myShares') }}">Мои доли</a></li>
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
                    <div class="col-md-8">Осталось долей:</div>
                    <div class="col-md-4 pull-right">30 873</div>
                    <div class="col-md-8">Прибыль на долю в год:</div>
                    <div class="col-md-4 pull-right">2€</div>
                    <div class="col-md-8">Срок привлечения(месяцев):</div>
                    <div class="col-md-4 pull-right">60</div>
                    <div class="col-md-8">Этап:</div>
                    <div class="col-md-4 pull-right">1/1</div>
                </div>
                0.02%
                <button class="col-md-12 btn btn-default">Подробнее</button>

            </div>

            <div class="col-md-12"></div>
            <button class="col-md-3 pull-right btn btn-default">Пригласить в Zonto</button>
            <div class="col-md-12"></div>
            <button class="col-md-3 pull-right btn btn-default">Пополнить баланс</button>

        </div>
    </div>
@endsection
