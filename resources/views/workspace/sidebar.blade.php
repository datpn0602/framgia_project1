<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border-bottom: 1px solid #536271;">
      <a href="{{ url('/') }}" class="site_title text-center" data-no-turbolink><i class="fa fa-paw"></i> <span>Yum Yum</span></a>
    </div>

    <div class="clearfix"></div>
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
          <ul class="nav side-menu">
            <li data=""><a href="#"><i class="fa fa-home"></i> Tổng quan </a></li>
            <li data="restaurants"><a><i class="fa fa-sitemap"></i> Chuỗi nhà hàng <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="#">Danh sách nhà hàng</a></li>
                <li><a href="#">Thêm mới</a></li>
              </ul>
            </li>
            <li data="employees"><a><i class="fa fa-users"></i> Danh mục<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route('category.show') }}">Danh sách danh mục</a></li>
                <li><a href="{{ route('category.getAdd') }}">Thêm mới</a></li>
              </ul>
            </li>
            <li data="foods"><a><i class="fa fa-cutlery"></i> Món ăn<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route('food.show') }}">Danh sách món ăn</a></li>
                <li><a href="{{ route('food.getAdd') }}">Thêm mới</a></li>
              </ul>
            </li>
            <li data="orders"><a><i class="fa fa-sticky-note-o"></i> Đơn hàng<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="#">Danh sách đơn hàng</a></li>
                <li><a href="#">Thêm mới</a></li>
              </ul>
            </li>
            <li data="admins"><a><i class="fa fa-tachometer"></i> Tài khoản<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="#">Danh sách tài khoản</a></li>
                <li><a href="#">Thêm mới</a></li>
              </ul>
            </li>
          </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->

  </div>
</div>