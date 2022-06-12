@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <section class="edica-about-faq py-5 mb-5">
            <h2 class="faq-title" data-aos="fade-up">{{ $lesson->title }}</h2>
            <p class="faq-section-text" data-aos="fade-up" data-aos-delay="100">Пожалуйста, пройдите тест(ы) для закрепления полученных знаний.</p>
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
                @foreach($lesson->tests as $test)
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
    </div>

</main>
@endsection
