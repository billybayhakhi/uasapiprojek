<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoJatim Travel - Discover Engaging Places</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
<body>

    <!-- NAVBAR -->
    <nav>
        <a href="{{ url('/') }}" class="nav-logo">Go<span>Jatim</span> Travel</a>

        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="{{ url('/tours') }}">Touring <span class="arrow">▾</span></a></li>
            <li><a href="{{ url('/destinations') }}">Destinasi <span class="arrow">▾</span></a></li>
            <li><a href="{{ url('/contact') }}">kontak</a></li>
        </ul>

        <div class="nav-right">
            <span class="nav-phone">
                <i class="fas fa-phone"></i> 0800-123-456
            </span>
            <div class="nav-icons">
                <a href="{{ url('/login') }}"><i class="far fa-user"></i></a>
                <a href="#"><i class="fas fa-bars"></i></a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-image"></div>
        <img class="hero-bg" src="{{ asset('images/kawah_ijen_java.jpg') }}" alt="Beautiful landscape">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <p class="hero-tagline">Jelajahi Jawa Timur</p>
            <h1 class="hero-title">
                Temukan tempat<br>
                <strong>paling menakjubkan</strong><br>
                di Jawa Timur
            </h1>
            <a href="{{ url('/tours') }}" class="btn-explore">
                Jelajahi Sekarang <span class="arrow-icon">→</span>
            </a>
        </div>
    </section>

    <!-- SEARCH STRIP -->
    <div class="search-strip">
        <div class="search-field">
            <label>Destination</label>
            <input type="text" placeholder="Where to go?">
        </div>
        <div class="search-field">
            <label>Check In</label>
            <input type="date">
        </div>
        <div class="search-field">
            <label>Duration</label>
            <select>
                <option value="">Any duration</option>
                <option>1-3 days</option>
                <option>4-7 days</option>
                <option>1-2 weeks</option>
                <option>2+ weeks</option>
            </select>
        </div>
        <div class="search-field">
            <label>Travelers</label>
            <input type="number" min="1" placeholder="2 people">
        </div>
        <button class="btn-search">
            <i class="fas fa-search"></i> Search
        </button>
    </div>

<!-- DESTINATIONS -->
    <section class="section">
        <div class="section-header reveal">
            <div>
                <p class="section-label">Top pilihan</p>
                <h2 class="section-title">Populer <em>destinasi</em></h2>
            </div>
            <a href="{{ url('/destinations') }}" class="view-all">View all →</a>
        </div>
 
        <div class="destinations-grid">
            <!-- Large card: Pacitan -->
            <div class="dest-card large reveal">
                <img class="dest-card-img" src="{{ asset('images/goa gong.jpg') }}" alt="Pacitan">
                <div class="dest-card-overlay">
                    <p class="dest-card-country">Kab. Pacitan · Jawa Timur</p>
                    <h3 class="dest-card-name">Pacitan</h3>
                    <p class="dest-card-tours">Goa Gong</p>
                </div>
            </div>
 
            <div class="dest-card reveal">
                <img class="dest-card-img" src="{{ asset('images/Kawah-Ijen-Indonesia-Lake.jpg') }}" alt="Banyuwangi">
                <div class="dest-card-overlay">
                    <p class="dest-card-country">Kab. Banyuwangi · Jawa Timur</p>
                    <h3 class="dest-card-name">Banyuwangi</h3>
                    <p class="dest-card-tours">Kawah Ijen</p>
                </div>
            </div>
 
            <div class="dest-card reveal">
                <img class="dest-card-img" src="{{ asset('images/tumpak sewu.jpg') }}" alt="Lumajang">
                <div class="dest-card-overlay">
                    <p class="dest-card-country">Kab. Lumajang · Jawa Timur</p>
                    <h3 class="dest-card-name">Lumajang</h3>
                    <p class="dest-card-tours">Tumpak Sewu</p>
                </div>
            </div>
 
            <div class="dest-card reveal">
                <img class="dest-card-img" src="{{ asset('images/pantai-klayar-profile1653617226.jpeg') }}" alt="Pantai Klayar">
                <div class="dest-card-overlay">
                    <p class="dest-card-country">Kab. Pacitan · Jawa Timur</p>
                    <h3 class="dest-card-name">Pacitan</h3>
                    <p class="dest-card-tours">Pantai klayar</p>
                </div>
            </div>
 
            <div class="dest-card reveal">
                <img class="dest-card-img" src="{{ asset('images/puncak b29.jpg') }}" alt="Kawah Ijen">
                <div class="dest-card-overlay">
                    <p class="dest-card-country">Kab. Lumajang · Jawa Timur</p>
                    <h3 class="dest-card-name">Lumajang</h3>
                    <p class="dest-card-tours">puncak b29</p>
                </div>
            </div>
        </div>
    </section>
    <!-- POPULAR TOURS -->
    <section class="section" style="background: var(--cream); padding-top: 0;">
        <div class="section-header reveal">
            <div>
                <p class="section-label">What we offer</p>
                <h2 class="section-title">Popular <em>tours</em></h2>
            </div>
            <a href="{{ url('/tours') }}" class="view-all">View all →</a>
        </div>

        <div class="tours-grid">
            @php
                $tours = [
                    [
                        'title'    => 'Pacitan Explorer: Klayar, Goa Gong & Banyu Tibo',
                        'duration' => '3 hari',
                        'people'   => '15 maks',
                        'price'    => '1.250.000',
                        'type'     => 'Adventure',
                        'rating'   => '4.9',
                    ],
                    [
                        'title'    => 'Banyuwangi Magic: Ijen Blue Fire & Teluk Hijau',
                        'duration' => '4 hari',
                        'people'   => '12 maks',
                        'price'    => '1.750.000',
                        'type'     => 'Nature',
                        'rating'   => '4.8',
                    ],
                    [
                        'title'    => 'Lumajang Highland: Tumpak Sewu & Puncak B29',
                        'duration' => '2 hari',
                        'people'   => '10 maks',
                        'price'    => '950.000',
                        'type'     => 'Trekking',
                        'rating'   => '4.9',
                    ],
                ];
            @endphp

            @foreach($tours as $i => $tour)
            <div class="tour-card reveal">
                <div class="tour-img placeholder"></div>
                <span class="tour-badge">{{ $tour['type'] }}</span>
                <div class="tour-body">
                    <h3 class="tour-title">{{ $tour['title'] }}</h3>
                    <div class="tour-meta">
                        <span><i class="far fa-clock"></i> {{ $tour['duration'] }}</span>
                        <span><i class="fas fa-users"></i> {{ $tour['people'] }}</span>
                        <span><i class="fas fa-star" style="color: var(--accent-gold)"></i> {{ $tour['rating'] }}</span>
                    </div>
                    <div class="tour-footer">
                        <div class="tour-price">
                            Rp {{ $tour['price'] }}
                            <small>/ orang</small>
                        </div>
                        <a href="{{ url('/tours/' . ($i + 1)) }}" class="btn-tour">Pesan →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- STATS -->
    <div class="stats-strip">
        <div class="stat-item reveal">
            <div class="stat-number"><sup>+</sup>8</div>
            <div class="stat-label">Kabupaten</div>
        </div>
        <div class="stat-item reveal">
            <div class="stat-number"><sup>+</sup>50</div>
            <div class="stat-label">Spot Wisata</div>
        </div>
        <div class="stat-item reveal">
            <div class="stat-number"><sup>+</sup>500</div>
            <div class="stat-label">Traveler Puas</div>
        </div>
        <div class="stat-item reveal">
            <div class="stat-number"><sup>+</sup>3</div>
            <div class="stat-label">Tahun Pengalaman</div>
        </div>
    </div>

    <!-- BLOG -->
    <section class="section">
        <div class="section-header reveal">
            <div>
                <p class="section-label">Stories & tips</p>
                <h2 class="section-title">Latest from <em>our blog</em></h2>
            </div>
            <a href="{{ url('/blog') }}" class="view-all">View all →</a>
        </div>

        <div class="blog-grid">
            <div class="reveal">
                <div class="blog-main-img placeholder"></div>
                <div class="blog-main-body">
                    <p class="blog-tag">Travel Tips</p>
                    <h3 class="blog-title">Pantai Klayar Pacitan: Surga Tersembunyi dengan Seruling Laut yang Memukau</h3>
                    <p class="blog-excerpt">Tersembunyi di ujung barat Jawa Timur, Pantai Klayar menawarkan keindahan karang eksotis dan fenomena alam unik — seruling laut yang berbunyi saat ombak menghantam celah batu. Panduan lengkap cara ke sana dan terbaik dikunjungi kapan.</p>
                    <a href="{{ url('/blog/1') }}" class="btn-tour">Baca selengkapnya →</a>
                </div>
            </div>

            <div class="blog-sidebar">
                @php
                    $blogs = [
                        ['title' => 'Blue Fire Kawah Ijen: Fenomena Langka yang Wajib Kamu Saksikan', 'date' => '10 Mei 2025'],
                        ['title' => 'Tumpak Sewu vs Niagara: Air Terjun Terlebar di Jawa Timur', 'date' => '28 April 2025'],
                        ['title' => 'De Djawatan Banyuwangi: Hutan Trembesi yang Terasa Seperti Film Fantasy', 'date' => '15 April 2025'],
                    ];
                @endphp

                @foreach($blogs as $blog)
                <div class="blog-mini reveal">
                    <div class="blog-mini-img placeholder"></div>
                    <div>
                        <h4 class="blog-mini-title">{{ $blog['title'] }}</h4>
                        <p class="blog-mini-date"><i class="far fa-calendar"></i> {{ $blog['date'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="{{ url('/') }}" class="nav-logo">Go<span>Jatim</span> Travel</a>
                <p class="footer-desc">GoJatim Travel hadir untuk membantu kamu menjelajahi keindahan alam dan budaya Jawa Timur — dari pesisir selatan Pacitan hingga puncak Lumajang.</p>
                <div class="footer-socials">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div>
                <p class="footer-heading">Company</p>
                <ul class="footer-links">
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/tours') }}">Our Tours</a></li>
                    <li><a href="{{ url('/destinations') }}">Destinations</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>

            <div>
                <p class="footer-heading">Support</p>
                <ul class="footer-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Booking Guide</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>

            <div>
                <p class="footer-heading">Contact</p>
                <ul class="footer-links">
                    <li><a href="tel:0800123456"><i class="fas fa-phone" style="width:16px"></i> 0800-123-456</a></li>
                    <li><a href="mailto:hello@gojatim.id"><i class="fas fa-envelope" style="width:16px"></i> hello@gojatim.id</a></li>
                    <li><a href="#"><i class="fas fa-map-marker-alt" style="width:16px"></i> Surabaya, Jawa Timur</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span>© {{ date('Y') }} GoJatim Travel. All rights reserved.</span>
            <span>Made with ♥ in Indonesia</span>
        </div>
    </footer>

    <script>
        // Scroll reveal
        const reveals = document.querySelectorAll('.reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    setTimeout(() => entry.target.classList.add('visible'), i * 80);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        reveals.forEach(el => observer.observe(el));

        // Navbar shadow on scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            nav.style.boxShadow = window.scrollY > 20
                ? '0 4px 24px rgba(0,0,0,0.08)'
                : 'none';
        });
    </script>
</body>
</html>