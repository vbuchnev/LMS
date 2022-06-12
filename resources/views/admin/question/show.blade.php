@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">Вопрос - {{ $question->id }}</h1>
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
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $question->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Вопрос</td>
                                        <td>{{ $question->question_text }}</td>
                                    </tr>
                                    <tr>
                                        <td>Тест</td>
                                        <td>{{ $question->test->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Кол-во вариантов</td>
                                        <td>{{ $question->questionOptions()->count() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Список вариантов</td>
                                        <td>
                                            @foreach($question->questionOptions as $option)
                                                {{ $option->option_text }};<br>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Дата создания</td>
                                        <td>{{ $question->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата обновления</td>
                                        <td>{{ $question->updated_at }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.question.index', $question->id) }}">
                                Вернуться к списку
                            </a>
                            <a class="btn btn-info" href="{{ route('admin.question.edit', $question->id) }}">
                                Редактировать
                            </a>

                            <form action="{{ route('admin.question.delete', $question->id) }}" method="POST" onsubmit="return confirm('Удалить этот вопрос?');" style="display: inline-block;">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </td>
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
