<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i> <span>Quản lý danh mục </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i> Thêm danh mục</a></li>
          <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i> Danh sách danh mục  </a></li>
      
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i> <span>Quản lý sản phẩm </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">

          <li><a href="{{route('product.create')}}"><i class="fa fa-circle-o"></i> Thêm sản phẩm</a></li>
          <li><a href="{{route('productDetail.create')}}"><i class="fa fa-circle-o"></i> Thêm chi tiết sản phẩm</a></li>    
          <li><a href="{{route('size.index')}}"><i class="fa fa-circle-o"></i> Thêm kích cỡ  </a></li>    
          <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i> Danh sách sản phẩm </a></li>

         
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i> <span>Quản lý khách hàng </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href=""><i class="fa fa-circle-o"></i> Quản lý thông tin</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i> Quản lý bình luận</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i> Quản lý lịch sử đặt hàng</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i> Tìm kiếm thông tin</a></li>
        </ul>
      </li>


      <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i> <span>Quản lý đơn hàng </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('order_index')}}"><i class="fa fa-circle-o"></i> Quản lý đơn hàng </a></li>
          <li><a href="{{route('payment.index')}}"><i class="fa fa-circle-o"></i> Quản lý thanh toán</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i> Tìm kiếm</a></li>
    
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i> <span>Quản lý banner </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('banner.create')}}"><i class="fa fa-circle-o"></i> Thêm banner</a></li>
          
          <li><a href="{{route('banner.index')}}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i> <span>Quản lý Blog </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('blog.create')}}"><i class="fa fa-circle-o"></i> Danh mục blog</a></li>
          <li><a href="{{route('blog.create')}}"><i class="fa fa-circle-o"></i> Thêm blog</a></li>
          
        
        </ul>
      </li>


 

      <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i> <span>Quản lý tài khoản KH </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href=""><i class="fa fa-circle-o"></i> Xem thông tin</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i> Thêm thông tin </a></li>
       
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i> <span>Quản lý Màu</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('color.create')}}"><i class="fa fa-circle-o"></i> Thêm màu</a></li>
          
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i> <span>Quản lý Size </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('size.create')}}"><i class="fa fa-circle-o"></i> Thêm size</a></li>
      
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i> <span>Quản lý hệ thống </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href=""><i class="fa fa-circle-o"></i> Thêm tài khoản </a></li>
          <li><a href=""><i class="fa fa-circle-o"></i> Đổi mật khẩu</a></li>
   
      
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>