@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Курсы</h1>

        <form method="get" action="{{ route('course.search') }}">
            <div class="form-row">
                <div class="form-group col-md-10">
                    <input type="text" value="{{ request()->s }}" class="form-control" id="s" name="s" placeholder="Поиск...">
                </div>
                <div class="form-group col-md-2">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Поиск</button>
                </div>
            </div>
        </form>
        @guest()
            <div class="container">
                <p class="alert alert-warning text-center">Пожалуйста, авторизуйтесь чтобы продолжить!</p>
            </div>
        @endguest
        @if(count($courses))
            <section class="featured-posts-section">
                <div class="row">
                @foreach($courses as $course)

                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('storage/' . $course->preview_image) }}" alt="blog post">
                        </div>
                        @auth()
                            <a href="{{ route('course.lesson.index', $course->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title text-center">{{ $course->title }}</h6>
                            </a>
                        @endauth
                        @guest()
                            <a href="{{ route('personal.main.index') }}" class="blog-post-permalink">
                                <h6 class="blog-post-title text-center">{{ $course->title }}</h6>
                            </a>
                        @endguest
                    </div>
                @endforeach
                </div>
            </section>
            <div class="d-flex justify-content-center">
                {{ $courses->appends(['s' => request()->s])->links() }}
            </div>
        @else
            <p>Упс... кажется ничего нет!</p>
        @endif
    </div>
</main>
@endsection
