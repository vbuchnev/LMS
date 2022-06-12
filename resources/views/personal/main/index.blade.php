@extends('personal.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Личный кабинет</h1>
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
                                <h3>{{ $favor->count() }}</h3>

                                <p>Избранные уроки</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon far fa-heart"></i>
                            </div>
                            <a href={{ route('personal.favorites.index') }} class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $result->count() }}</h3>

                                <p>Результаты тестов</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-check"></i>
                            </div>
                            <a href={{ route('personal.result.index') }} class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
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
