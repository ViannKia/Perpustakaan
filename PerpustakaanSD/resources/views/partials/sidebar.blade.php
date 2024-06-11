<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxs-widget'></i>
        <span class="logo_name">Perpustakaan</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/dashboard">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/buku" class="{{ request()->Is('buku*') ? 'active' : '' }}">
                <i class="bx bx-box"></i>
                <span class="links_name">Data Buku</span>
            </a>
        </li>
        <li>
            <a href="/anggota" class="{{ request()->Is('anggota*') ? 'active' : '' }}">
                <i class="bx bx-user"></i>
                <span class="links_name">Data Anggota</span>
            </a>
        </li>
        <li>
            <a href="/peminjaman" class="{{ request()->Is('peminjaman*') ? 'active' : '' }}">
                <i class='bx bx-book-content'></i>
                <span class="links_name">Data Peminjaman</span>
            </a>
        </li>
        <li>
            <a href="/logout">
                <i class="bx bx-log-out"></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>
