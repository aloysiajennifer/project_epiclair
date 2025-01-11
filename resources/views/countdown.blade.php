<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Countdown Timer</title>
    <style>
        body {
            padding: 30px;
            margin-left: 15%;
            margin-right: 15%;
            background-color: rgb(230, 239, 245);
        }

        h1 {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-align: center;
            color: rgb(34, 106, 153);
            margin-bottom: 20px;
            margin-top: 35px;
        }

        input {
            width: 60px;
            margin: 5px;
        }

        button {
            margin-top: 5px;
        }

        #timer {
            font-size: 8em;
            margin-top: 20px;
            text-align: center;
            color: rgb(34, 106, 153);
        }
        
        .nav-link {
            color: white;
        }

        /* Ubah tampilan sesuai dengan ukuran layar */
        @media (max-width: 768px) {
            body {
                margin-left: 10%;
                margin-right: 10%;
            }

            h1 {
                font-size: 24px;
            }

            .input-section {
                flex-direction: column;
                align-items: center;
            }

            input {
                width: 50px;
                margin: 5px;
            }

            button {
                width: 120px;
            }

            #timer {
                font-size: 6em;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 20px;
            }

            .input-section {
                flex-direction: column;
                align-items: center;
            }

            input {
                width: 45px;
                margin: 5px;
            }

            button {
                width: 130px;
            }

            #timer {
                font-size: 4em;
            }
        }
    </style>
</head>

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


    <!-- Countdown -->
    <h1>Countdown Timer</h1>

    <!-- Input section -->
    <div class="input-section">
        <div>
            <label for="hours">Hours:</label>
            <input type="number" id="hours" min="0" value="0">
        </div>
        <div>
            <label for="minutes">Minutes:</label>
            <input type="number" id="minutes" min="0" value="0">
        </div>
        <div>
            <label for="seconds">Seconds:</label>
            <input type="number" id="seconds" min="0" value="0">
        </div>
    </div>

    <!-- Button untuk start timer -->
    <button class="btn btn-primary" onclick="startTimer()">Start</button>
    <!-- Button untuk stop timer -->
    <button class="btn btn-danger" onclick="stopTimer()">Stop</button>
    <!-- Button untuk reset timer -->
    <button class="btn btn-warning" onclick="resetTimer()">Reset</button>
    <div id="timer">00:00:00</div>

    <script>
        let countdown;

        function startTimer() {
            // Stop countdown yang sedang berjalan
            stopTimer();

            // Ambil input user
            const hours = parseInt(document.getElementById('hours').value) || 0;
            const minutes = parseInt(document.getElementById('minutes').value) || 0;
            const seconds = parseInt(document.getElementById('seconds').value) || 0;

            // Hitung total waktu yang diinputkan user dalam satuan detik
            let totalSeconds = hours * 3600 + minutes * 60 + seconds;

            // Reset ulang kolom input
            resetTimer();

            // Jika total detiknya <= 0, minta user input ulang
            if (totalSeconds <= 0) {
                alert("Please enter a valid time!");
                resetTimer();
                return;
            }

            // Ubah total detik ke dalam satuan jam, menit, dan detik yang sesuai untuk ditampilkan di display timer
            const displayHours = Math.floor(totalSeconds / 3600);
            const displayMinutes = Math.floor((totalSeconds % 3600) / 60);
            const displaySeconds = totalSeconds % 60;

            // Set tampilan awal timer
            document.getElementById('timer').textContent =
                `${String(displayHours).padStart(2, '0')}:${String(displayMinutes).padStart(2, '0')}:${String(displaySeconds).padStart(2, '0')}`;



            // Set timer
            countdown = setInterval(() => {
                // Jika total detik sudah mencapai 0, maka timer akan berhenti
                if (totalSeconds <= 0) {
                    stopTimer();
                    alert("Time's up!");
                    return;
                }

                // Kurangi detik setiap iterasi
                totalSeconds--;

                // Ubah total detik ke dalam satuan jam, menit, dan detik yang sesuai untuk ditampilkan di display timer
                const displayHours = Math.floor(totalSeconds / 3600);
                const displayMinutes = Math.floor((totalSeconds % 3600) / 60);
                const displaySeconds = totalSeconds % 60;

                // Update display timer
                document.getElementById('timer').textContent =
                    `${String(displayHours).padStart(2, '0')}:${String(displayMinutes).padStart(2, '0')}:${String(displaySeconds).padStart(2, '0')}`;

            }, 1000); //1000 milidetik = 1 detik; display akan diperbarui setiap detik secara real time

        }

        function stopTimer() {
            clearInterval(countdown);
        }

        function resetTimer() {
            stopTimer();
            document.getElementById('hours').value = 0;
            document.getElementById('minutes').value = 0;
            document.getElementById('seconds').value = 0;
            document.getElementById('timer').textContent = '00:00:00';
        }
    </script>
</body>

</html>