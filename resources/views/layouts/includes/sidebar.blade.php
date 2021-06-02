    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(auth()->user()->picture != null)
                    <img src="{{url('storage/'.auth()->user()->picture)}}" class="img-circle elevation-2" alt="User Image">
                @else
                    <img src="{{url('images/user.png')}}" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>
            <div class="info">
                @if(auth()->user() != null)
                    <a href="{{url('users/'.auth()->user()->id.'/edit')}}" class="d-block">{{auth()->user()->name}}</a>
                @endif
            </div>
        </div>

        <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- products -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-success"></i>
                        <p>
                            محصولات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('products.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>لیست محصولات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('products.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ایجاد محصول جدید</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- categories -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>
                            دسته بندی ها
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('categories.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>لیست دسته بندی ها</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('categories.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ایجاد دسته بندی جدید</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- users -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>
                            کاربران
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>لیست کاربران</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('users.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ایجاد کاربر جدید</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Logout -->
                <li class="nav-item">
                    <form method="post" action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class="nav-link " style="background: none; border: none; color: #c2c7d0">
                            <i class="nav-icon fas fa-power-off text-danger"></i>
                                خروج
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
