<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item brand-link">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Личный кабинет
                    </p>
                </a>
            </li>
            @if(Auth::check())
                @if (Auth::user()->isAdmin())
                    <li class="nav-item ">
                        <a href="{{ route('admin.main.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user-lock"></i>
                            <p>
                                Администрирование
                            </p>
                        </a>
                    </li>
                @endif
            @endif
            <li class="nav-item ">
                <a href="{{ route('personal.favorites.index') }}" class="nav-link">
                    <i class="nav-icon far fa-heart"></i>
                    <p>
                        Избранные лекции
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('personal.result.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-check"></i>
                    <p>
                        Результаты
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('course.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-outdent"></i>
                    <p>
                        Вернуться на главную
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
