@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование ответа</h1>
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
                            <form action="{{ route('admin.option.update', $option->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Выберите вопрос</label>
                                        <select name="question_id" class="form-control">
                                            @foreach($questions as $question)
                                                <option value="{{ $question->id }}"
                                                    {{ $question->id == $option->question_id ? 'selected' : '' }}
                                                >{{ $question->question_text }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Ответ на вопрос</label>
                                        <input type="text" name="option_text" class="form-control" placeholder="Название урока"
                                               value="{{ $option->option_text }}">
                                        @error('option_text')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Статус ответа</label>
                                        <select name="points" class="form-control">
                                            @foreach($points as $id => $point)
                                                <option value="{{ $id }}"
                                                    {{ $id == $option->point ? 'selected' : '' }}
                                                >{{ $point }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Обновить">
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
