<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('/css/admin-css/dashboard.css') }}" rel="stylesheet" />
    <meta charset="UTF-8" />
    <title>Dashboard | Admin Perpustakaan</title>
    <link rel="icon" href="{{ asset('assets/icon.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<div class="sidebar">
    <div class="logo-details">
        <i class="bx bx-category"></i>
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
            <a href="/index" class="{{ request()->Is('buku*') ? 'active' : '' }}">
                <i class="bx bx-box"></i>
                <span class="links_name">Data Buku</span>
            </a>
        </li>
        <li>
            <a href="/anggota" class="{{ request()->Is('anggota*') ? 'active' : '' }}">
                <i class="bx bx-list-ul"></i>
                <span class="links_name">Data Anggota</span>
            </a>
        </li>
        <li>
            <a href="/peminjaman" class="{{ request()->Is('peminjaman*') ? 'active' : '' }}">
                <i class="bx bx-list-ul"></i>
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
{{-- <!DOCTYPE html>
<html lang="en"> --}}

<body>
    @include('partials.sidebar')
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">Admin Perpustakaan</span>
            </div>
        </nav>
        <div class="home-content">
            @yield('content')
            @if (!View::hasSection('content'))
                <span id="greeting" class="greeting"></span>
                <span class="admin_name">{{ session('nama_admin') }}</span>
                <br>
                <span id="clock" class="clock"></span>
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3>{{ $totalBuku }}</h3>
                                <p class="fs-5">Data Buku</p>
                            </div>
                            <i class="bx bx-box fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3>{{ $totalAnggota }}</h3>
                                <p class="fs-5">Data Anggota</p>
                            </div>
                            <i
                                class="bx bx-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3>{{ $totalPeminjaman }}</h3>
                                <p class="fs-5">Data Peminjaman</p>
                            </div>
                            <i class="bx bx-book-content fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>

    <script>
        function updateClockAndGreeting() {
            var clockElement = document.getElementById('clock');
            var greetingElement = document.getElementById('greeting');
            var currentTime = new Date();
            var hours = currentTime.getHours();

            // Menentukan pesan selamat malam, pagi, sore, atau siang berdasarkan jam
            var greeting;
            if (hours >= 5 && hours < 10) {
                greeting = "Selamat Pagi";
            } else if (hours >= 11 && hours < 15) {
                greeting = "Selamat Siang";
            } else if (hours >= 16 && hours < 18) {
                greeting = "Selamat Sore";
            } else {
                greeting = "Selamat Malam";
            }

            // Menampilkan pesan selamat malam, pagi, sore, atau siang
            greetingElement.textContent = greeting;

            // Menampilkan jam
            var minutes = currentTime.getMinutes();
            var seconds = currentTime.getSeconds();
            hours = (hours < 10 ? "0" : "") + hours;
            minutes = (minutes < 10 ? "0" : "") + minutes;
            seconds = (seconds < 10 ? "0" : "") + seconds;
            var timeString = hours + ':' + minutes + ':' + seconds;
            clockElement.textContent = timeString;
        }

        // Memperbarui jam dan pesan selamat malam, pagi, sore, atau siang setiap detik
        setInterval(updateClockAndGreeting, 1000);

        // Memperbarui jam dan pesan selamat malam, pagi, sore, atau siang saat halaman dimuat
        updateClockAndGreeting();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
