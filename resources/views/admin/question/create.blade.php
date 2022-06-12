@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление вопроса</h1>
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
                            <form action="{{ route('admin.question.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Текст вопроса</label>
                                        <input type="text" name="question_text" class="form-control" placeholder="Текст вопроса">
                                        @error('question_text')
                                            <div class="text-danger">Это поле необходимо заполнить</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Выберите тест</label>
                                        <select name="test_id" class="form-control">
                                            @foreach($tests as $test)
                                                <option value="{{ $test->id }}"
                                                    {{ $test->id == old('test_id') ? 'selected' : '' }}
                                                >{{ $test->title }}</option>
                                                @error('test_id')
                                                <div class="text-danger">хз что происходит</div>
                                                @enderror
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Добавить">
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
