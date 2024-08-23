<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday, Ex!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fce4ec;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            color: #ff69b4;
            overflow: hidden;
            position: relative;
        }

        .container {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            position: relative;
            z-index: 1;
        }

        .intro, .main-content, .video-page {
            display: block;
        }

        .main-content, .video-page {
            display: none;
        }

        .slide {
            display: none;
        }

        .slide.active {
            display: block;
            animation: fadeIn 1s ease-in-out;
        }

        .title {
            font-size: 3em;
            margin-bottom: 20px;
            color: #ff4081;
            font-weight: bold;
            animation: fadeInDown 2s ease;
        }

        .message {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #333;
            line-height: 1.6;
            animation: fadeInUp 2s ease;
        }

        .heart {
            font-size: 3em;
            color: #ff4081;
            animation: pulse 1s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .image {
            margin-top: 20px;
            animation: bounceIn 1s ease;
        }

        .image img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .signature {
            font-size: 1.2em;
            margin-top: 20px;
            color: #555;
            animation: fadeInUp 2s ease;
        }

        .next-btn, .start-btn, .send-btn, .video-btn {
            background-color: #ff4081;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1.2em;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            animation: fadeInUp 2s ease;
        }

        .next-btn:hover, .start-btn:hover, .send-btn:hover, .video-btn:hover {
            background-color: #e91e63;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes bounceIn {
            0%, 20%, 40%, 60%, 80%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        .flower {
            position: absolute;
            width: 50px;
            height: 50px;
            background: url('FOTO1.PNG') no-repeat center;
            background-size: contain;
            animation: fall 10s linear infinite;
            z-index: 0;
        }

        @keyframes fall {
            0% { transform: translateY(-100px); opacity: 1; }
            100% { transform: translateY(110vh); opacity: 0; }
        }

        .flower:nth-child(2) { left: 20%; animation-duration: 8s; }
        .flower:nth-child(3) { left: 40%; animation-duration: 6s; }
        .flower:nth-child(4) { left: 60%; animation-duration: 12s; }
        .flower:nth-child(5) { left: 80%; animation-duration: 9s; }

        .video-page {
            display: none;
            text-align: center;
        }

        .video-container {
            position: relative;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .title {
                font-size: 2em;
            }

            .message {
                font-size: 1.2em;
            }

            .next-btn, .start-btn, .send-btn, .video-btn {
                font-size: 1em;
                padding: 8px 16px;
            }

            .image img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>
    <!-- Flower Animation -->
    <div class="flower"></div>
    <div class="flower"></div>
    <div class="flower"></div>
    <div class="flower"></div>
    <div class="flower"></div>
    <div class="flower"></div>
    <div class="flower"></div>
    <div class="flower"></div>

    <!-- Background Music -->
    <audio id="background-music" loop>
        <source src="SelamatUlangTahun.mp3" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    <div class="container intro">
        <div class="title">Halo Ex Hehehe!</div>
        <div class="message">Kasih masukki namata biar bisaki lanjut:</div>
        <input type="text" id="userName" placeholder="Your Full Name" style="padding: 10px; font-size: 1.2em; border-radius: 5px; border: 1px solid #ddd;">
        <button class="start-btn" onclick="startExperience()">Start</button>
    </div>

    <div class="container main-content">
        <div class="slide active">
            <div class="title">Untukmu yang Berbahagia, <span id="displayName"></span>!</div>
            <div class="message">
                Hari ini adalah hari yang sangat spesial, karena ini adalah hari lahirmu. Aku bersyukur atas setiap detik yang pernah kita lewati bersama. Kamu adalah anugrah yang pernah hadir dalam hidupku.
            </div>
            <div class="heart">❤️</div>
            <div class="image">
                <img src="FOTO1.PNG" alt="Your Love's Picture 1">
            </div>
            <div class="signature">With all my hopes, Andi Irfan Maulana</div>
            <button class="next-btn" onclick="nextSlide(1)">Next</button>
        </div>

        <div class="slide">
            <div class="title">Kenangan Manis</div>
            <div class="message">
                Di hari ini, mari kita kembali mengingat semua kenangan manis yang pernah kita lalui. Terima kasih telah menjadi bagian dari hidupku, walaupun sekarang kita mungkin sudah berbeda tujuan.
            </div>
            <div class="heart">💖</div>
            <div class="image">
                <img src="FOTO2.PNG" alt="Your Love's Picture 2">
            </div>
            <div class="signature">Forever yours, Fatri Utami Zeizar</div>
            <button class="next-btn" onclick="nextSlide(2)">Next</button>
        </div>

        <div class="slide">
            <div class="title">Selalu Dihati</div>
            <div class="message">
                Meskipun kita mungkin tidak lagi bersama, kamu akan selalu memiliki tempat dihatiku. Terima kasih telah memberi warna dalam hidupku.
                Dinonton nah video yang dibawah sampai selesai.
            </div>
            <div class="heart">💞</div>
            <div class="image">
                <img src="FOTO3.PNG" alt="Your Love's Picture 3">
            </div>
            <button class="next-btn video-btn" onclick="showVideo()"> >>DINONTON SAMPAI SELESAI<< </button>
        </div>
    </div>

    <div class="container video-page">
        <div class="video-container">
            <video controls>
                <source src="awal ketemu sampai akhir ketemu.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <button class="next-btn" onclick="backToSlides()">Kembali</button>
        <button class="send-btn" onclick="sendGiftRequest()">Spesial Request</button>
    </div>

    <script>
        function startExperience() {
            var userName = document.getElementById("userName").value;
            if (userName.trim() !== "") {
                document.getElementById("displayName").textContent = userName;
                document.querySelector(".intro").style.display = "none";
                document.querySelector(".main-content").style.display = "block";
                document.getElementById("background-music").play();
            } else {
                alert("Please enter your name to continue.");
            }
        }

        function nextSlide(index) {
            var slides = document.querySelectorAll(".slide");
            slides.forEach(function(slide, i) {
                slide.classList.remove("active");
                if (i === index) {
                    slide.classList.add("active");
                }
            });
        }

        function showVideo() {
            document.querySelector(".main-content").style.display = "none";
            document.querySelector(".video-page").style.display = "block";
            document.getElementById("background-music").pause();
        }

        function backToSlides() {
            document.querySelector(".video-page").style.display = "none";
            document.querySelector(".main-content").style.display = "block";
            document.getElementById("background-music").play();
        }

        function sendGiftRequest() {
            var userName = document.getElementById("userName").value;
            var url = "https://api.whatsapp.com/send?phone=085345674445&text=" + encodeURIComponent("Happy Birthday! dihari spesialta mauki kado apa? " + userName);
            window.open(url, "_blank");
        }
    </script>
</body>
</html>
