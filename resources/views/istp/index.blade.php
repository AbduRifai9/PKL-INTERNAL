<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #61a5ff;
            overflow-x: clip;
        }

        ul {
            list-style: none;
            color: #fff;
            font-size: 20px;
        }

        .tabs {
            width: 80%;
            height: 100px;
            margin: auto;
            margin-top: 50px;
            display: flex;
            align-items: center;
            box-shadow: 10px 10px 19px #1c1e22, -10px -10px 19px #262a2e;
            overflow: hidden;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
        }

        .tabs li {
            background-color: #ffffff;
            width: 25%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #c4cfde;
            font-family: 'Poppins', sans-serif;
            transition: .5s;
            -webkit-transition: .5s;
            -moz-transition: .5s;
            -ms-transition: .5s;
            -o-transition: .5s;
            cursor: pointer;
        }

        .tabs li:hover {
            background: linear-gradient(145deg, #1e2024, #23272b);
            box-shadow: 10px 10px 19px #1c1e22, -10px -10px 19px #262a2e;
            color: #5e83ff;
            position: relative;
            z-index: 1;
            border-radius: 10px;
        }

        .active {
            background: linear-gradient(145deg, #1e2024, #23272b);
            box-shadow: 10px 10px 19px #1c1e22, -10px -10px 19px #262a2e;
            color: #5e83ff !important;
            position: relative;
            z-index: 1;
            border-radius: 10px;
        }

        .contents {
            width: 80%;
            margin: auto;
            margin-top: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
        }

        .box {
            gap: 20px;
            background: linear-gradient(145deg, #1e2024, #23272b);
            box-shadow: 10px 10px 19px #1c1e22, -10px -10px 19px #262a2e;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
            padding: 20px;
            width: 100%;
            animation: moving 1s ease;
            -webkit-animation: moving 1s ease;
        }

        .box img {
            width: 50%;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
        }

        .box h3 {
            color: #c4cfde;
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .box p {
            color: #c4cfde;
            opacity: .5;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
        }

        .custom-btn {
            width: 130px;
            height: 40px;
            color: #fff;
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            outline: none;
        }

        .btn-5 {
            width: 130px;
            height: 40px;
            line-height: 42px;
            padding: 0;
            border: none;
            background: rgb(219, 205, 133);
            background: linear-gradient(0deg, rgb(145, 135, 214) 0%, rgb(134, 108, 97) 100%);
        }

        .btn-5:hover {
            color: #d2b6b6;
            background: transparent;
            box-shadow: none;
        }

        .btn-5:before,
        .btn-5:after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            height: 2px;
            width: 0;
            background: #edd1d9;
            box-shadow: -1px -1px 5px 0px #fff,
                7px 7px 20px 0px #0003,
                4px 4px 5px 0px #0002;
            transition: 400ms ease all;
        }

        .btn-5:after {
            right: inherit;
            top: inherit;
            left: 0;
            bottom: 0;
        }

        .btn-5:hover:before,
        .btn-5:hover:after {
            width: 100%;
            transition: 800ms ease all;
        }

        .corner-image {
            width: 150px;
            height: auto;
            position: absolute;
            margin: 150px;
            /* Increase margin to create more space between images */
        }

        .show {
            display: flex;
        }

        .hide {
            display: none;
        }

        @keyframes moving {
            from {
                transform: translateX(-50px);
                -webkit-transform: translateX(-50px);
                -moz-transform: translateX(-50px);
                -ms-transform: translateX(-50px);
                -o-transform: translateX(-50px);
                opacity: 0;
            }

            to {
                transform: translateX(0px);
                -webkit-transform: translateX(0px);
                -moz-transform: translateX(0px);
                -ms-transform: translateX(0px);
                -o-transform: translateX(0px);
                opacity: 1;
            }
        }
    </style>
    <ul class="tabs">
        <li class="active" data-id="0">Pengertian</li>
        <li data-id="1">Kelebihan</li>
        <li data-id="2">Kekurangan</li>
        <li data-id="3">Karir yang cocok</li>
    </ul>

    <div class="contents">
        {{-- @foreach ($biodata as $data) --}}
        <div class="box show" data-content="0">
            <img src="{{ asset('backend/image/matching pfp (1_3).jpeg') }}" alt="">
            <div>
                <h3>Hiii tipe kepribadian kamu adalahh ISTP(Si Pemecah Masalah Yang Hebat)</h3>
                <ul style="font-family: Arial, Helvetica, sans-serif;">
                    ISTP merupakan singkatan dari Introvert, Sensing, Thinking, dan Perceiving. Pribadi ISTP kerap
                    dijuluki sebagai ‘Si Mekanik’ atau ‘Si Pengrajin’ karena ia memiliki kemampuan memecahkan masalah
                    yang sangat baik. Diperkirakan, sekitar 9% populasi dunia memiliki kepribadian ISTP. </ul>
                <button onclick="location.href='{{ route('tes.index') }}'" type="button" class="custom-btn btn-5">Test
                    MBTI</button>
                <button onclick="location.href='/'" type="button" class="custom-btn btn-5">Homepage</button>
            </div>
        </div>

        <div class="box hide" data-content="1">
            <img src="{{ asset('backend/image/The end.jpeg') }}" alt="">
            <div>
                <h3>Kelebihan ISTP</h3>
                <ul style="font-family: Arial, Helvetica, sans-serif;">
                    <li>- Logis</li>
                    <li>- Objektif</li>
                    <li>- Fleksibel</li>
                    <li>- Realistis</li>
                    <li>- Mandiri</li>
                    <li>- Percaya diri</li>
                    <li>- Suka mencoba hal baru</li>
                </ul>

                <button onclick="location.href='{{ route('tes.index') }}'" type="button" class="custom-btn btn-5">Test
                    MBTI</button>
                <button onclick="location.href='/'" type="button" class="custom-btn btn-5">Homepage</button>
            </div>
        </div>

        <div class="box hide" data-content="2">
            <img src="{{ asset('backend/image/T_T.jpeg') }}" alt="">
            <div>
                <h3>Kekurangan ISTP</h3>
                <ul style="font-family: Arial, Helvetica, sans-serif;">
                    <li>Tidak peka</li>
                    <li>Keras kepala</li>
                    <li>Mudah bosan</li>
                    <li>Sulit berkomitmen</li>
                    <li>Sulit untuk didekati</li>
                </ul>
                <button onclick="location.href='{{ route('tes.index') }}'" type="button" class="custom-btn btn-5">Test
                    MBTI</button>
                <button onclick="location.href='/'" type="button" class="custom-btn btn-5">Homepage</button>
            </div>
        </div>

        <div class="box hide" data-content="3">
            <img src="{{ asset('backend/image/rabbids invasion icon (11).jpeg') }}" alt="">
            <div>
                <h3>Ini dia karir yang cocok</h3>
                <ul style="font-family: Arial, Helvetica, sans-serif;">
                    <li>Secara umum, orang dengan kepribadian ISTP cocok untuk berkarir pada perkerjaan yang melibatkan
                        penalaran dan pengalaman langsung. Ini karena pribadi ISTP merupakan sosok yang praktis,
                        realistis, dan memiliki kemampuan yang sangat baik untuk menerapkan pola pikir sebab-akibat.

                        Pribadi ISTP biasanya paling suka bekerja di lingkungan yang fleksibel, individualis, tidak
                        banyak aturan, sekaligus memungkinkannya untuk menggunakan keterampilan pemecahan masalahnya
                        yang luar biasa.

                        Jadi, dalam hal karir, orang-orang dengan kepribadian ISTP akan lebih cocok bekerja sebagai
                        teknisi, mekanik, ahli forensik, programmer, ilmuwan, pilot, pengacara, hakim, pemadam
                        kebakaran, atau fotografer.</li>
                </ul>
                <button onclick="location.href='{{ route('tes.index') }}'" type="button" class="custom-btn btn-5">Test
                    MBTI</button>
                <button onclick="location.href='/'" type="button" class="custom-btn btn-5">Homepage</button>
            </div>
        </div>

    </div>
    {{-- @endforeach --}}
    <script>
        'use strict';
        const tabs = document.querySelectorAll('[data-id]');
        const contents = document.querySelectorAll('[data-content]');
        let id = 0;

        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                tabs[id].classList.remove('active');
                tab.classList.add('active');
                id = tab.getAttribute('data-id');
                contents.forEach(function(box) {
                    box.classList.add('hide');
                    if (box.getAttribute('data-content') == id) {
                        box.classList.remove('hide');
                        box.classList.add('show');
                    }
                });
            });
        });
    </script>
</body>

</html>
