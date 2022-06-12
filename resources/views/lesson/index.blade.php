@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Лекции</h1>
        <form method="get" action="{{ route('lesson.search') }}">
            <div class="form-row">
                <div class="form-group col-md-10">
                    <input type="text" value="{{ request()->s }}" class="form-control" id="s" name="s" placeholder="Поиск...">
                </div>
                <div class="form-group col-md-2">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Поиск</button>
                </div>
            </div>
        </form>
        @auth()
            @if(count($lessons))
                <section class="featured-posts-section">
                    <div class="row">
                        @foreach($lessons as $lesson)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ asset('storage/' . $lesson->preview_image) }}" alt="blog post">
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="blog-post-category">{{ $lesson->course->title }}</p>
                                <form action="{{ route('lesson.favorite.store', $lesson->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="border-0 bg-transparent">
                                        @auth()
                                            @if(auth()->user()->FavoritesLesson->contains($lesson->id))
                                                <i class="fas fa-heart"></i>
                                            @else
                                                <i class="far fa-heart"></i>
                                            @endif
                                        @endauth
                                    </button>
                                </form>
                            </div>
                            <a href="{{ route('lesson.show', $lesson->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $lesson->title }}</h6>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
                <div class="d-flex justify-content-center">
                    {{ $lessons->appends(['s' => request()->s])->links() }}
                </div>
            @else
                <p>Упс... кажется ничего нет!</p>
            @endif
        @endauth
        @guest()
            <div class="container">
            <p class="alert alert-warning">Пожалуйста, авторизуйтесь чтобы продолжить!</p>
            </div>
        @endguest
    </div>

</main>
@endsection
