<footer class="footer-warung mt-5 pt-5 pb-3">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <h5 class="fw-bold">Warung Kuning</h5>
                <p class="mb-0">Murah, enak, dan mengenyangkan. Nikmati berbagai pilihan makanan rumahan dengan harga terjangkau.</p>
            </div>

            <div class="col-6 col-md-4">
                <h5 class="fw-bold">Navigasi</h5>
                <ul class="list-unstyled mb-0">
                    <li><a href="/dashboard?username={{ $username ?? '' }}">Beranda</a></li>
                    <li><a href="/Menu?username={{ $username ?? '' }}">Menu</a></li>
                    <li><a href="/profile?username={{ $username ?? '' }}">Profil</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-4">
                <h5 class="fw-bold">Jam Buka</h5>
                <ul class="list-unstyled mb-0">
                    <li>Senin - Jumat: 07.00 - 21.00</li>
                    <li>Sabtu - Minggu: 08.00 - 22.00</li>
                </ul>
            </div>
        </div>

        <hr class="garis mt-4">

        <p class="text-center mb-0 small">&copy; {{ date('Y') }} Warung Kuning. Dibuat untuk UTS Pemrograman Web.</p>
    </div>
</footer>
