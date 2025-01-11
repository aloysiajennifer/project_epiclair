<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <title>Matches</title>
</head>

<!-- Style css  -->
<style>
    body {
        background-color: rgb(230, 239, 245);
        text-align: center;
        padding: 20px;
    }

    .round {
        margin: 70px 0;
    }

    h1 {
        font-size: 3em;
        margin-top: 60px;
        font-weight: bolder;
        color: rgb(34, 106, 153);
    }

    h2 {
        font-weight: bold;
        color: rgb(146, 19, 72);
    }

    .images-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: nowrap;
        gap: 20px;
    }

    .vs-label {
        font-size: 2rem;
        margin: 0 20px;
        font-weight: bold;
        color: rgb(146, 19, 72);
    }

    .team img {
        margin: 20px;
        width: 200px;
        height: auto;
        object-fit: cover;
        transition: transform 0.3s;
    }

    /* Animasi saat di-hover */
    .team img:hover {
        transform: scale(1.1);
    }

    .team-name {
        font-size: 1.5rem;
        margin-top: 10px;
        font-weight: bold;
        color: rgb(146, 19, 72);
    }

    .nav-link {
        color: white;
    }

    /* Adjust ukuran untuk HP dan tab */
    @media (max-width: 768px) {
        h1 {
            font-size: 2.5em;
        }

        h2 {
            font-size: 1.2em;
        }

        .round {
            margin: 40px 0;
        }

        .team img {
            width: 125px;
        }

        .team-name {
            font-size: 1.2rem;
        }

        .vs-label {
            font-size: 1.5rem;
        }
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top" style="background-color:rgb(34, 106, 153)">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:white; font-weight:bold">EPICLAIR 2025: The Chosen Warrior</a>
            <button class="navbar-toFggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="match">Match</a>
                    <a class="nav-link" href="countdown">Countdown</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Matches  -->
    <h1>SEMIFINAL</h1>
    <!-- Round 1 -->
    <div class="round">
        <h2>»»-———— Round 1 ————-««</h2>
        <!-- Menggunakan container agar tampilan lebih rapi -->
        <div class="images-container">
            <div class="team" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/luigi.png') }}" alt="Luigi">
                <div class="team-name">Luigi</div>
            </div>

            <div class="vs-label">VS</div>

            <div class="team" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/mario.png') }}" alt="Mario">
                <div class="team-name">Mario</div>
            </div>
        </div>
    </div>

    <!-- Round 2 -->
    <div class="round">
        <h2>»»-———— Round 2 ————-««</h2>
        <div class="images-container">
            <div class="team" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/mushroom.png') }}" style="width:125px; height:auto;" alt="Mushroom">
                <div class="team-name">Mushroom</div>
            </div>

            <div class="vs-label">VS</div>

            <div class="team" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/bowser_jr.png') }}" alt="Bowser Jr.">
                <div class="team-name">Bowser Jr.</div>
            </div>
        </div>
    </div>

    <!-- Round 3 -->
    <div class="round">
        <h2>»»-———— Round 3 ————-««</h2>
        <div class="images-container">
            <div class="team" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/yoshi.png') }}" alt="Yoshi">
                <div class="team-name">Yoshi</div>
            </div>

            <div class="vs-label">VS</div>

            <div class="team" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/dk.png') }}" alt="DK">
                <div class="team-name">DK</div>
            </div>
        </div>
    </div>
</body>

<!-- Untuk animasi  -->
<script>
    // Inisialisasi AOS
    AOS.init();
</script>


</html>