@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование курса</h1>
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
                            <form action="{{ route('admin.course.update', $course->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInput">Название курса</label>
                                        <input type="text" name="title" class="form-control" placeholder="Название курса"
                                               value="{{ $course->title }}">
                                        @error('title')
                                        <div class="text-danger">Это поле необходимо заполнить</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInput">Описание курса</label>
                                        <input type="text" name="description" class="form-control" placeholder="Описание курса"
                                               value="{{ $course->description }}">
                                        @error('description')
                                        <div class="text-danger">Это поле необходимо заполнить</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Добавить превью</label>
                                        <div class="w-50 mb-3">
                                            <img src="{{ url('storage/' . $course->preview_image) }}" alt="preview_image" class="w-50">
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="preview_image">
                                                <label class="custom-file-label">Выбрать изображение</label>
                                            </div>
                                        </div>
                                        @error('preview_image')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Обновить">
                                </div>
                            </form>
                        </div>
                    </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
