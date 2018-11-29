<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
        </a>
    </li>
    <li><a href="{{route('companies.index')}}"><i class="fa fa-sticky-note-o"></i> <span>Посты - работодателей</span></a></li>
    <li><a href="{{route('professions.index')}}"><i class="fa fa-list-ul"></i> <span>Категории Профессии</span></a></li>
    <li><a href="{{route('rubrics.index')}}"><i class="fa fa-list-ul"></i> <span>Категории Рубрики</span></a></li>
    <li><a href="{{route('cities.index')}}"><i class="fa fa-tags"></i> <span>Теги Города</span></a></li>
    <li>
        <a href="#{{--/admin/comments--}}">
            <i class="fa fa-commenting"></i> <span>..</span>
            <span class="pull-right-container">
          <small class="label pull-right bg-green">{{--{{$newCommentsCount}}--}}</small>
        </span>
        </a>
    </li>
    <li><a href="#{{--{{route('users.index')}}--}}"><i class="fa fa-users"></i> <span>Пользователи Работодатели</span></a></li>
    <li><a href="#{{--{{route('users.index')}}--}}"><i class="fa fa-users"></i> <span>Пользователи Работники</span></a></li>
    <li><a href="#{{--{{route('subscribers.index')}}--}}"><i class="fa fa-user-plus"></i> <span>Подписчики</span></a></li>

</ul>