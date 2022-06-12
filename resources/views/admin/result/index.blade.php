@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Результаты пользователей</h1>
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
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Пользователь</th>
                                        <th>Дата создания</th>
                                        <th>Вопросы</th>
                                        <th>Ответы</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($results as $result)
                                        <tr>
                                            <td>{{ $result->id }}</td>
                                            <td>{{ $result->user->name }} {{ $result->user->s_name }}<br> {{ $result->user->email }}</td>
                                            <td>{{ $result->created_at }}</td>
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
                                            <td class="text-right">
                                                <a class="btn btn-primary" href="{{ route('admin.result.show', $result->id) }}">
                                                    Подробнее
                                                </a>
                                                <form action="{{ route('admin.result.delete', $result->id,) }}" method="POST" onsubmit="return confirm('Удалить этот результат?');" style="display: inline-block;">
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
