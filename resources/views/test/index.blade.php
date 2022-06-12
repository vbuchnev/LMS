@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Тесты</h1>
        <form method="get" action="{{ route('test.search') }}">
            <div class="form-row">
                <div class="form-group col-md-10">
                    <input type="text" value="{{ request()->s }}" class="form-control" id="s" name="s" placeholder="Поиск...">
                </div>
                <div class="form-group col-md-2">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Поиск</button>
                </div>
            </div>
        </form>
        <div class="container">
            @if(count($tests))
                <section class="edica-about-faq py-5 mb-5">
                    <div class="accordion" id="edicaAboutFaqCollapse" role="tablist" aria-multiselectable="true">
                        @if(session('status'))
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        @foreach($tests as $test)
                            <div class="card" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-header" role="tab" id="edicaAboutFaq{{ $test->id }}">
                                    <h5 class="mb-0">
                                        <a href="{{ route('test.show', $test->id) }}">
                                            {{ $test->title }}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @else
                <p>Упс... кажется ничего нет!</p>
            @endif
        </div>
    </div>
</main>
@endsection
