@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">{{ $course->title }}</h1>
        <div class="col-lg-12 mx-auto" data-aos="fade-up">
            <p><i>{!! $course->description !!}</i></p>
        </div>
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
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('storage/' . $course->preview_image) }}" alt="blog post">
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="blog-post-category">{{ $course->title }}</p>
                        </div>
                        <a href="{{ route('course.test.index', $course->id) }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">Итоговый тест</h6>
                        </a>
                    </div>
            </div>
        </section>
        <div class="d-flex justify-content-center">
            {{ $lessons->links() }}
        </div>
        <div class="row">
            <div class="col-md-8">

            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">

                <div class="widget widget-post-list">

                </div>
                <div class="widget">
                    <h5 class="widget-title text-white">бла бла бла</h5>

                </div>
            </div>
        </div>
    </div>

</main>
@endsection
