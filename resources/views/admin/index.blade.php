@include('admin.layouts.header')
<style>
    /* Kartların konteyneri */
    .home-main-cards-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* 2 sütunlu düzen */
        gap: 20px;
        padding: 20px;
    }

    /* Genel kart stilleri */
    .home-main-card {
        background-color: #f9f9f9;
        border-radius: 10px;
        overflow: hidden;
        color: #fff;
        text-align: center;
        padding: 20px;
        font-family: Arial, sans-serif;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .home-main-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Her kart için farklı renk */
    .home-main-card-home {
        background-color: #3498db; /* Mavi */
    }

    .home-main-card-service {
        background-color: #e74c3c; /* Kırmızı */
    }

    .home-main-card-booking {
        background-color: #2ecc71; /* Yeşil */
    }

    .home-main-card-blog {
        background-color: #f1c40f; /* Sarı */
    }

    /* Kartın içindeki bağlantılar */
    .home-main-card-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .home-main-card-title {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .home-main-card-description {
        font-size: 1em;
        color: rgba(255, 255, 255, 0.9);
    }
</style>

<section class="home-main-cards-container">
    <div class="home-main-card home-main-card-home">
        <a href="/home" class="home-main-card-link">
            <h3 class="home-main-card-title">Home</h3>
            <p class="home-main-card-description">Ana sayfaya gidin.</p>
        </a>
    </div>
    <div class="home-main-card home-main-card-service">
        <a href="/service" class="home-main-card-link">
            <h3 class="home-main-card-title">Service</h3>
            <p class="home-main-card-description">Hizmetlerimizi keşfedin.</p>
        </a>
    </div>
    <div class="home-main-card home-main-card-booking">
        <a href="/booking" class="home-main-card-link">
            <h3 class="home-main-card-title">Booking</h3>
            <p class="home-main-card-description">Rezervasyon yapın.</p>
        </a>
    </div>
    <div class="home-main-card home-main-card-blog">
        <a href="/blog" class="home-main-card-link">
            <h3 class="home-main-card-title">Blog</h3>
            <p class="home-main-card-description">Blog yazılarımızı okuyun.</p>
        </a>
    </div>
</section>

@include('admin.layouts.footer')
