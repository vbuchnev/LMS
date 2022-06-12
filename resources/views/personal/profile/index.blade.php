@extends('personal.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Профиль - {{ $user->name }}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-body row">
{{--                    <div class="col-4 text-center d-flex align-items-center justify-content-center">--}}
{{--                        <div>--}}
{{--                            <h2>Здесь вскоре<br> появится аватар</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-8">
                        <form action="{{ route('personal.profile.update', $user->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input type="text" name="name" class="form-control" placeholder="Имя пользователя"
                                           value="{{ $user->name }}">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Отчество</label>
                                    <input type="text" name="f_name" class="form-control" placeholder="Отчество пользователя"
                                           value="{{ $user->f_name }}">
                                </div>

                                <div class="form-group">
                                    <label>Фамилия</label>
                                    <input type="text" name="s_name" class="form-control" placeholder="Фамилия пользователя"
                                           value="{{ $user->s_name }}">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email пользователя">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Пароль</label>
                                    <input type="text" name="password" class="form-control" placeholder="Пароль пользователя">
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group w-50">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Обновить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
