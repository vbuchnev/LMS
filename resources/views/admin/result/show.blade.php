@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">Ответ - {{ $result->id }}</h1>
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
                                            <td>{{ $result->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Пользователь <br>
                                                E-mail
                                            </td>
                                            <td>
                                                {{ $result->user->s_name }} {{ $result->user->name }} {{ $result->user->f_name }}<br>
                                                {{ $result->user->email }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Дата создания</td>
                                            <td>{{ $result->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <td>Верных ответов</td>
                                            <td>{{ $result->total_points }}</td>
                                        </tr>
                                        <tr>
                                            <td>Дата редактирования</td>
                                            <td>{{ $result->updated_at }}</td>
                                        </tr>
                                        <tr bgcolor="aqua" class="font-weight-bold">
                                            <td>Список вопросов</td>
                                            <td>Ответ</td>
                                        </tr>
                                        <tr bgcolor="#faebd7">
                                            <td>
                                                @foreach($result->questions as $question)
                                                    {{ $question->question_text }};<br>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($result->questions as $question)
                                                    @if($question->pivot->points == 1)
                                                        Верно<br>
                                                    @else
                                                        Неверно<br>
                                                    @endif
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
                            <a class="btn btn-primary" href="{{ route('admin.result.index', $result->id) }}">
                                Вернуться к списку
                            </a>
                            <form action="{{ route('admin.result.delete', $result->id) }}" method="POST" onsubmit="return confirm('Удалить этот результат?');" style="display: inline-block;">
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
