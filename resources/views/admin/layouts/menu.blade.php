<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                        <a href="{{route('menu.index')}}"><i class="fa fa-bar-chart-o fa-fw"></i>Menu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('menu.index')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('menu.create')}}">Thêm menu</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('category.index')}}"><i class="fa fa-bar-chart-o fa-fw"></i>Thư mục<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('category.index')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('category.create')}}">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                        <a href="{{route('distribution.index')}}"><i class="fa fa-bar-chart-o fa-fw"></i>Phân loại<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('distribution.index')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('distribution.create')}}">Thêm quyền</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                        <a href="{{route('user.index')}}"><i class="fa fa-bar-chart-o fa-fw"></i>Người dùng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('user.index')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('user.create')}}">Thêm sản Phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('product.index')}}"><i class="fa fa-users fa-fw"></i>Sản phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('product.index')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('product.create')}}">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('article.index')}}"><i class="fa fa-users fa-fw"></i>Bài viết<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('article.index')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('article.create')}}">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>