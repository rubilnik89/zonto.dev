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
                <p>Внутренний перевод средств</p>
                <hr>
            </div>

            <div class="col-md-9">

                {{ Form::open() }}
                {{ Form::label('amount', 'Сумма:') }}
                {{ Form::text('amount', null, ['class' => 'form-control', 'placeholder' => 'Сумма €']) }}
                {{ Form::label('from', 'Откуда:') }}
                {{ Form::select('from', ['null' => '',
                '555555555' =>'555555555',
                '66666666666' => '666666666',
                '7777777777' => '777777777'],
                   0, ['class' => 'form-control']) }}
                {{ Form::label('finpass', 'Введите финансовый пароль.:') }}
                {{ Form::text('finpass', null, ['class' => 'form-control', 'placeholder' => 'password']) }}
                <br>
                Ваш лимит для внешнего перевода c баланса: 0.36€, с реф. баланса: 0.29€
                <br>
                {{ Form::submit('Продолжить') }}

                {{ Form::close() }}

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
                    <li class="active"><a href="{{ route('inPayment') }}">.....Внутренний перевод</a></li>
                    <li><a href="{{ route('history') }}">.....История операций</a></li>
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
