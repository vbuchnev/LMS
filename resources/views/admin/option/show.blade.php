@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">Ответ - {{ $option->id }}</h1>
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
                                        <td>{{ $option->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ответ</td>
                                        <td>{{ $option->option_text }}</td>
                                    </tr>
                                    <tr>
                                        <td>Вопрос</td>
                                        <td>{{ $option->question->question_text }}</td>
                                    </tr>
                                    <tr>
                                        <td>Статус ответа</td>
                                        <td>
                                            @if($option->correct = 1)
                                                Верный
                                            @else
                                                Неверный
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Дата создания</td>
                                        <td>{{ $option->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата редактирования</td>
                                        <td>{{ $option->updated_at }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.option.index', $option->id) }}">
                                Вернуться к списку
                            </a>
                            <a class="btn btn-info" href="{{ route('admin.option.edit', $option->id) }}">
                                Редактировать
                            </a>
                            <form action="{{ route('admin.option.delete', $option->id) }}" method="POST" onsubmit="return confirm('Удалить этот курс?');" style="display: inline-block;">
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
