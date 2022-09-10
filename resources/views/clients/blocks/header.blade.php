<header class="py-3 border shadow" >
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a class="nav-link" href="{{route('home')}}"> <h2>Quản Lý Thiết Bị</h2></a>
            </div>
            <div class="col-9 d-flex justify-content-end align-items-center">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class="navbar-nav">
                            <li class="nav-item active">
                            <a class="nav-link" href="{{route('listThietbi')}}">Bàn Giao Thiết Bị<span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{route('listNguoidung')}}">Danh Sách Thiết Bị</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{route('listThaythesuachua')}}">Thay Thế & Sửa Chữa</a>
                            </li>
                        </ul>
                        <form action="" method="GET" class="">
                            <div class="row">
                                <div class="col-6 ">
                                    <input class="form-control mr-sm-2" name="ten_may" type="search" placeholder="Search..." aria-label="Search" value="{{request()->ten_may}}">
                                </div>
                                <div class="col-1">
                                    <button class="btn btn-outline-success btn-block my-2 my-sm-0" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
