<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item brand-link">
                <a href="{{ route('admin.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Панель управления
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Пользователи
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.course.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Курсы
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.lesson.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>
                        Лекции
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Тесты
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{route('admin.test.index')}}" class="nav-link">
                            <i class="nav-icon far fa-list-alt"></i>
                            <p>
                                Тесты
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.question.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-question"></i>
                            <p>
                                Вопросы
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.option.index')}}" class="nav-link">
                            <i class="nav-icon far fa-check-square"></i>
                            <p>
                                Варианты ответов
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.result.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-check"></i>
                            <p>
                                Результаты
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.tag.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-tag"></i>
                    <p>
                        Тэги
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
            <li class="nav-item ">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-outdent"></i>
                    <p>
                        В личный кабинет
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
