<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      
      <span class="brand-text font-weight-light">VRCollection</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public/dist')}}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          @if(Auth::check())
            {{request()->user()->nama}}
          @elseif(Auth::guard('pembeli')->check())
            {{Auth::guard('pembeli')->user()->nama}}
            <br>Pembeli
          @elseif(Auth::guard('penjual')->check())
            {{Auth::guard('penjual')->user()->nama}}
            <br>Penjual
          @else
            Silahkan Login
          @endif
        </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('beranda')}}" class="nav-link">
              <i class="fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
           <li class="nav-item">
             <a href="{{url('admin/produk')}}" class="nav-link">
              <i class="fab fa-product-hunt"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{url('admin/kategori')}}" class="nav-link">
              <i class="fas fa-layer-group"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{url('admin/promo')}}" class="nav-link">
              <i class="fas fa-percent"></i>
              <p>
                Promo
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{url('admin/user')}}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview menu-open">
             <a href="#" class="nav-link">
              <i class="fas fa-book-open"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/pelanggan')}}">
                  <i class="far fa-circle nav-icon"></i>
                   Pelanggan
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/pemasok')}}">
                  <i class="far fa-circle nav-icon"></i>
                   Pemasok
                </a>
              </li>
            </ul>
           </li>
            
         <!--  <li class="nav-item">
            <a href="{{url('kriteria/list')}}" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Kriteria
              </p>
            </a>
          </li> -->
           <!--  <li class="nav-item">
            <a href="{{url('siswai')}}" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
               Siswa I
              </p>
            </a>
          </li> --><!-- 
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="fas fa-book-open"></i>
              <p>
                OLIMPIADE MTK
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/kriteria_mtk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kriteria</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rating Kecocokan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perhitungan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="fas fa-book-open"></i>
              <p>
                OLIMPIADE IPA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/kriteria_ipa')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kriteria</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rating Kecocokan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perhitungan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>