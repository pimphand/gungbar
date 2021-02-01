<div id="sidebar-scroll">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Sidebar Navigation -->
        <ul class="sidebar-nav">
            <li>
                <a href="{{ route ('dashboard') }}" class=" active"><i class="gi gi-compass sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
            </li>
            <li class="sidebar-separator">
                <i class="fa fa-ellipsis-h"></i>
            </li>
            <li>
                <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User</span></a>
                <ul>
                    <li>
                        <a href="{{ route('personal') }}">List User Personal</a>
                    </li>
                    <li>
                        <a href="{{ route('grup') }}">List User Grup</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-separator">
                <i class="fa fa-ellipsis-h"></i>
            </li>
            <li>
                <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-credit-card sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Data Rekening</span></a>
                <ul>
                    <li>
                        <a href="{{ route ('rekening') }}">List Rekening</a>
                    </li>
                    <li>
                        <a href="{{ route ('rekening.create') }}">Tambah Rekening</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-separator">
                <i class="fa fa-ellipsis-h"></i>
            </li>
            <li>
                <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-money sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Data Harga Member</span></a>
                <ul>
                    <li>
                        <a href="{{ route ('price') }}">Daftar Member</a>
                    </li>
                    <li>
                        <a href="{{ route ('price.create') }}">Tambah Member</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-separator">
                <i class="fa fa-ellipsis-h"></i>
            </li>
            <li>
                <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-money sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Payment</span></a>
                <ul>
                    <li>
                        <a href="{{ route ('payment') }}">Daftar Member</a>
                    </li>
                    <li>
                        <a href="{{ route ('payment.create') }}">Tambah Member</a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- END Sidebar Navigation -->

        <!-- Color Themes -->
        <!-- Preview a theme on a page functionality can be found in js/app.js - colorThemePreview() -->

        <!-- END Color Themes -->
    </div>
    <!-- END Sidebar Content -->
</div>
