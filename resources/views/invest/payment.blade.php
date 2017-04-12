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
                <p>Пополнение баланса личного кабинета</p>
                <hr>
            </div>

            <div class="col-md-9">
                <p>Пополнение баланса личного кабинета Invest возможно несколькими способами: по средством е-кошельков,
                    банковских карт, банковским переводом и с вашего е-счета Zonto Finance.
                    Сроки зачисления средств происходят в автоматическом режиме после подтверждения платежных систем.
                    При пополнении баланса личного кабинета банковским переводом, денежные средства будут зачислены в
                    течение 2-3 рабочих дней.</p>
                <p>Комиссии платежных систем и электронных кошельков оплачиваются участником проекта в соответствии с
                    условиями используемых платежных сервисов.</p>
                <p>Выберите способ пополнения:</p>

                {{ Form::open() }}
                <label class="radio-inline">
                    {{ Form::radio('pay', 'ADVcash') }}ADVcash
                </label>
                <label class="radio-inline">
                    {{ Form::radio('pay', 'Payeer') }}Payeer
                </label>
                <label class="radio-inline">
                    {{ Form::radio('pay', 'OkPay') }}OkPay
                </label>
                <label class="radio-inline">
                    {{ Form::radio('pay', 'PerfectMoney') }}PerfectMoney
                </label>
                <label class="radio-inline">
                    {{ Form::radio('pay', 'BTC-E') }}BTC-E
                </label>
                <br>
                <label class="radio-inline">
                    {{ Form::radio('pay', 'Bitcoin') }}Bitcoin
                </label>
                <label class="radio-inline">
                    {{ Form::radio('pay', 'Ecoin') }}Ecoin
                </label>
                <label class="radio-inline">
                    {{ Form::radio('pay', 'EXMO') }}EXMO
                </label>
                <label class="radio-inline">
                    {{ Form::radio('pay', 'bank') }}Банковский перевод
                </label>
                <label class="radio-inline">
                    {{ Form::radio('pay', 'PayPal') }}PayPal
                </label>
                <br>
                {{ Form::label('amount', 'Сумма') }}
                {{ Form::input('amount', 'amount') }}
                <br>
                {{ Form::submit('Пополнить') }}

                {{ Form::close() }}

                <p>Список операций:</p>
                <hr>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Дата-время транзакции</th>
                        <th>Сумма</th>
                        <th>Статус</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>13.11.2016 15:30</td>
                        <td>100.00€</td>
                        <td>В обработке</td>
                    </tr>
                    <tr>
                        <td>13.11.2016 12:35</td>
                        <td>0.07€</td>
                        <td>Исполнено</td>
                    </tr>
                    <tr>
                        <td>13.11.2016 15:30</td>
                        <td>0.07€</td>
                        <td>В обработке</td>
                    </tr>
                    </tbody>
                </table>
                пагинация
            </div>


            <div class="col-md-3 pull-right" style="border: 1px solid black; margin-top: 42px;">
                <div>Menu</div>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{ route('invest') }}">Проекты</a></li>
                    <li><a href="{{ route('myShares') }}">Мои доли</a></li>
                    <li><a href="{{ route('partnersStructure') }}">Партнерская структура</a></li>
                    <li class="active"><a href="{{ route('balance') }}">Финансы</a></li>
                    <li><a href="{{ route('balance') }}">....Баланс</a></li>
                    <li class="active"><a href="{{ route('payment') }}">.....Пополнение баланса личного кабинета</a>
                    </li>
                    <li><a href="{{ route('outPayment') }}">.....Внешний перевод</a></li>
                    <li><a href="{{ route('inPayment') }}">.....Внутренний перевод</a></li>
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
