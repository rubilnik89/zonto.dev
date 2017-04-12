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
                <p>Мой профиль</p>
                <hr>
            </div>

            <div class="col-md-9">

                {{ Form::open() }}
                {{ Form::label('last', 'Фамилия *:') }}
                {{ Form::text('last', null, ['class' => 'form-control']) }}
                {{ Form::label('name', 'Имя *:') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
                {{ Form::label('country', 'Страна *:') }}
                {{ Form::text('country', null, ['class' => 'form-control']) }}
                {{ Form::label('city', 'Город *:') }}
                {{ Form::text('city', null, ['class' => 'form-control']) }}
                {{ Form::label('address', 'Адрес *:') }}
                {{ Form::text('address', null, ['class' => 'form-control']) }}
                {{ Form::label('pasport', 'Паспорт (серия, номер, кем и когда выдан) *:') }}
                {{ Form::text('pasport', null, ['class' => 'form-control']) }}
                {{ Form::label('birthday', 'День рождения:') }}
                {{ Form::text('birthday', null, ['class' => 'form-control']) }}
                {{ Form::label('skype', 'Skype') }}
                {{ Form::text('skype', null, ['class' => 'form-control']) }}
                {{ Form::label('phone', 'Мобильный телефон:') }}
                {{ Form::text('phone', null, ['class' => 'form-control']) }}
                {{ Form::label('finpass', 'Для сохранения введите финансовый пароль:') }}
                {{ Form::text('finpass', null, ['class' => 'form-control']) }}
                <br>
                {{ Form::submit('Сохранить', ['class' => "btn btn-default"]) }}
                {{ Form::close() }}
                <hr>

                Изменить E-счет
                {{ Form::open() }}
                {{ Form::label('account', 'Введите номер E-счета:') }}
                {{ Form::text('account', null, ['class' => 'form-control']) }}
                {{ Form::label('advcash', 'ADV Cash:') }}
                {{ Form::text('advcash', null, ['class' => 'form-control', 'placeholder' => 'E 4144 7699 6788']) }}
                {{ Form::label('finpass1', 'Финансовый пароль:') }}
                {{ Form::text('finpass1', null, ['class' => 'form-control']) }}
                <br>
                {{ Form::submit('Сохранить', ['class' => "btn btn-default"]) }}
                {{ Form::close() }}
                <hr>
                Отправить финансовый пароль на E-mail
                <br>
                <button class="btn btn-default">Отправить</button>

            </div>


            <div class="col-md-3 pull-right" style="border: 1px solid black; margin-top: 42px;">
                <div>Menu</div>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{ route('invest') }}">Проекты</a></li>
                    <li><a href="{{ route('myShares') }}">Мои доли</a></li>
                    <li><a href="{{ route('partnersStructure') }}">Партнерская структура</a></li>
                    <li><a href="{{ route('balance') }}">Финансы</a></li>
                    <li class="active"><a href="{{ route('profile') }}">Мой профиль</a></li>
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
            <button class="col-md-3 pull-right btn btn-default">Пригласить в Zonto</button>
            <button class="col-md-3 pull-right btn btn-default">Пополнить баланс</button>

        </div>
    </div>
@endsection
