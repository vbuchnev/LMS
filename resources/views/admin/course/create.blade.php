@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление курса</h1>
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
                            <form action="{{ route('admin.course.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Название курса</label>
                                        <input type="text" name="title" class="form-control" placeholder="Название курса">
                                        @error('title')
                                        <div class="text-danger">Это поле необходимо заполнить</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Название курса</label>
                                        <input type="text" name="description" class="form-control" placeholder="Описание курса">
                                        @error('description')
                                        <div class="text-danger">Это поле необходимо заполнить</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Добавить превью</label>
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
                                    <input type="submit" class="btn btn-primary mt-2" value="Добавить">
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
