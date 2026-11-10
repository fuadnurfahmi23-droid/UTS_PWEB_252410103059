@props(['username'])

<nav class="navbar navbar-expand-lg navbar-warung position-fixed w-100">
    <div class="container-fluid" style="padding: 0 7rem">
        <a class="navbar-brand fw-bold fs-4" href="/dashboard?username={{ $username }}">
            Warung <span style="color: #F5C542">Kuning</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuNavbar">
            <ul class="navbar-nav ms-auto align-items-center gap-5">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard?username={{ $username }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Menu?username={{ $username }}">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile?username={{ $username }}">Profil</a>
                </li>
                <li class="nav-item">
                    <span class="badge rounded-pill px-3 py-2" style="background-color: #F5C542; color: #493323;">
                        Halo, {{ $username }}
                    </span>
                </li>
            </ul>
        </div>
    </div>
</nav>
