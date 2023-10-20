@extends('layouts.app')

@section('page_title')Тестирование
@endsection

@section('content')
    <main>
        <div class="content-block">
            <fieldset>
                <legend><h3>&nbsp;Вопрос <i>например через i++</i>&nbsp;</h3></legend>
                <div>

                </div>
            </fieldset>
            <div class="quest-btn">
                <button class="btn btn-2" onclick="document.location='/attestation'">Предыдущий</button>
                <button class="btn btn-1" onclick="document.location='/attestation'">Подтвердить ответ</button>
                <button class="btn btn-2" onclick="document.location='/attestation'">Следующий</button>
            </div>
        </div>
    </main>
@endsection
