@extends('layouts.app')

@section('page_title')Тестирование
@endsection

@section('content')
    <main>
        <div class="content-preview">
            <h1><i>Запрос выводящий название выбранного ранее теста</i></h1>
            <span>
                <br/><i>Возможная дополнительная информация о тесте возможно по запросу в бд.</i><br/><br/>
            </span>
            <button class="btn btn-1" onclick="document.location='/attestation'">Пройти тестирование</button>
        </div>
    </main>
@endsection
