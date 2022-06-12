@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление лекции</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <form action="{{ route('admin.lesson.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Выберите курс</label>
                                        <select name="course_id" class="form-control">
                                            @foreach($courses as $course)
                                                <option value="{{ $course->id }}"
                                                    {{ $course->id == old('course_id') ? 'selected' : '' }}
                                                >{{ $course->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Название лекции</label>
                                        <input type="text" name="title" class="form-control" placeholder="Название лекции"
                                        value="{{ old('title') }}">
                                        @error('title')
                                            <div class="text-danger">Это поле необходимо заполнить</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Текст лекции</label>
                                        <textarea name="content" id="summernote">
                                            {{ old('content') }}
                                        </textarea>
                                        @error('content')
                                        <div class="text-danger">Это поле необходимо заполнить</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Добавить изображение для превью</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="preview_image">
                                                <label class="custom-file-label">Выбрать изображение</label>
                                            </div>
                                        </div>
                                        @error('preview_image')
                                        <div class="text-danger">Необходимо выбрать изображение для превью</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Тэги</label>
                                        <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите тэги" style="width: 100%;">
                                            @foreach($tags as $tag)
                                            <option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Добавить">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
