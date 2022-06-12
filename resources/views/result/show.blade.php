@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    <p>{{ session('status') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($result->questions->count() == $result->total_points)
                        <h3>Поздравляем с окончанием курса!!!</h3>
                        <p>Всего вопросов \ правильных ответов:</p>
                        <p>{{ $result->questions->count() }} \ {{ $result->total_points }}</p>
                        <a href="{{ route('results.send', $result->id) }}" class="btn btn-primary">Отправить сертификат об окончании курса на почту</a>
                    @else
                        <h3>К сожалению, вы допустили ошибки в тесте</h3>
                        <p>Всего вопросов \ правильных ответов:</p>
                        <p>{{ $result->questions->count() }} \ {{ $result->total_points }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
