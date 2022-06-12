@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование пользователя</h1>
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
                            <form action="{{ route('admin.user.update', $user->id) }}" method="post">
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
                                        <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email пользователя">
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label>Выберите роль</label>
                                        <select name="role" class="form-control">
                                            @foreach($roles as $id => $role)
                                                <option value="{{ $id }}"
                                                    {{ $id == $user->role ? 'selected' : '' }}
                                                >{{ $role }}</option>
                                            @endforeach
                                        </select>
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
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
