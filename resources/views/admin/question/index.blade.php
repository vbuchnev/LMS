@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Вопросы</h1>
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
                    <div class="col-1 mb-3">
                        <a href="{{ route('admin.question.create') }}" class="btn btn-primary">Добавить</a>
                    </div>
                    <div class="col-2 mb-3">
                        <a href="{{ route('admin.question.trash') }}" class="btn btn-primary">Список удаленных</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Вопрос</th>
                                        <th>Тест</th>
                                        <th>Кол-во вариантов</th>
                                        <th>Дата создания</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($questions as $question)
                                    <tr>
                                        <td>{{ $question->id }}</td>
                                        <td>{{ $question->question_text }}</td>
                                        <td>{{ $question->test->title }}</td>
                                        <td>{{ $question->questionOptions()->count() }}</td>
                                        <td>{{ $question->created_at }}</td>
                                        <td class="text-right">
                                            <a class="btn btn-primary" href="{{ route('admin.question.show', $question->id) }}">
                                                Подробнее
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
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
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
