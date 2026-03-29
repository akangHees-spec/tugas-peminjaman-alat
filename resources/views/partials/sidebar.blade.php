<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>MAIN</span></li>
                <li class="active">
                    <a href="{{ route('dashboard') }}"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>

                {{-- sidebar admin --}}
                @if (auth()->user()->role === 'admin')
                    <li class="menu-title"><span>ADMINISTRATOR</span></li>
                    <li class="submenu">
                        <a href="#"><i data-feather="database"></i> <span> Data Master</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route ('kategori.index') }}">Kategori Alat</a></li>
                            <li><a href="#">Data Alat</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i data-feather="users"></i> <span>Kelola Pengguna</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i data-feather="clipboard"></i> <span> Transaksi</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="#">Data Peminjaman</a></li>
                            <li><a href="#">Data Pengembalian</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i data-feather="file-text"></i> <span>Laporan</span></a>
                    </li>

                    {{-- sidebar petugas --}}
                @elseif(auth()->user()->role === 'petugas')
                    <li class="menu-title"><span>OPERASIONAL</span></li>
                    <li>
                        <a href="#"><i data-feather="box"></i> <span>Katalog Alat</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i data-feather="check-circle"></i> <span> Kelola Transaksi</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="#">Persetujuan Pinjaman</a></li>
                            <li><a href="#">Proses Pengembalian</a></li>
                            <li><a href="#">Daftar Terlambat</a></li>
                        </ul>
                    </li>

                    {{-- sidebar peminjam --}}
                @elseif(auth()->user()->role === 'peminjam')
                    <li class="menu-title"><span>PEMINJAMAN</span></li>
                    <li>
                        <a href="#"><i data-feather="search"></i> <span>Katalog Alat</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i data-feather="shopping-bag"></i> <span> Peminjaman Saya</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="#">Buat Pinjaman Baru</a></li>
                            <li><a href="#">Riwayat Pinjaman</a></li>
                        </ul>
                    </li>
                @endif

                {{-- MENU UMUM --}}
                <li class="menu-title">
                    <span>PENGATURAN</span>
                </li>
                <li>
                    <a href="#"><i data-feather="user"></i> <span>Profil Saya</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
