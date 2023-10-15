@extends('layouts.app')

@section('page_title', 'Мои курсы')

@section('content')
    <main class="flex-grow-1 py-3">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Название теста</h5>
                <p class="card-text">Краткое или не краткое описание курса, которому посвящен данный тест.</p>
                <a href="#" class="btn btn-primary">Пройти тестирование</a>
            </div>
        </div>
    </main>
@endsection
