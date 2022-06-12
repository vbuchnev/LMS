@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Панель управления</h1>
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
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['usersCount'] }}</h3>

                                <p>Пользователи</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-users"></i>
                            </div>
                            <a href="{{ route('admin.user.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['coursesCount'] }}</h3>

                                <p>Курсы</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-book"></i>
                            </div>
                            <a href="{{ route('admin.course.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['lessonsCount'] }}</h3>

                                <p>Лекции</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-book-open"></i>
                            </div>
                            <a href="{{ route('admin.lesson.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['testsCount'] }}</h3>
                                <p>Тесты</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon far fa-list-alt"></i>
                            </div>
                            <a href="{{ route('admin.test.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['questionsCount'] }}</h3>
                                <p>Вопросы</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-question"></i>
                            </div>
                            <a href="{{ route('admin.question.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['optionsCount'] }}</h3>
                                <p>Варианты ответов</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon far fa-check-square"></i>
                            </div>
                            <a href="{{ route('admin.option.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['resultsCount'] }}</h3>
                                <p>Результаты</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-check"></i>
                            </div>
                            <a href="{{ route('admin.result.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['tagsCount'] }}</h3>

                                <p>Тэги</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-tag"></i>
                            </div>
                            <a href="{{ route('admin.tag.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
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
