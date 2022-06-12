@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">Тест - "{{ $test->title }}"</h1>
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
                                        <td>{{ $test->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Лекция</td>
                                        <td>{{ $test->lesson->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Тест</td>
                                        <td>{{ $test->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Кол-во вопросов</td>
                                        <td>{{ $test->testQuestions->count() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата создания</td>
                                        <td>{{ $test->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата редактирования</td>
                                        <td>{{ $test->updated_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Список вопросов</td>
                                        <td>
                                            @foreach($test->testQuestions as $question)
                                                {{ $question->question_text }}; <br>
                                            @endforeach
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.test.index') }}">
                                Вернуться к списку
                            </a>
                            <a class="btn btn-info" href="{{ route('admin.test.edit', $test->id) }}">
                                Редактировать
                            </a>
                            <form action="{{ route('admin.test.delete', $test->id) }}" method="POST" onsubmit="return confirm('Удалить этот вопрос?');" style="display: inline-block;">
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
