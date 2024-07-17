<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ENFJ</title>
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
            background: linear-gradient(145deg, #3c5ea4, #23272b);
            box-shadow: 10px 10px 19px #1c1e22, -10px -10px 19px #262a2e;
            color: #5e83ff !important;
            position: relative;
            z-index: 1;
            border-radius: 10px;
        }

        .contents {
            width: 90%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
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
            width: 40%;
            height: 30%;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .box h3 {
            color: #c4cfde;
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            margin-bottom: 2%;
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

    <div class="contents">
        <div class="box" data-content="0">
            <div class="container justify-content-center">
            <img src="{{ asset('backend/image/_3.jpeg') }}" alt="">
            </div>
            <div class="px-5">
                <h3>Tipe kepribadian yang cocok dengan hasil tes MBTI kamu adalah ENFJ
                    (SOSOK YANG HANGAT)</h3>
                <ul style="font-family: Arial, Helvetica, sans-serif;">
                    <li>Kepribadian ENFJ merupakan salah satu dari 16 tipe kepribadian yang diklasifikasikan berdasarkan
                        Myers-Briggs Type Indicator (MBTI). ENFJ itu sendiri adalah akronim dari Extraverted, Intuitive,
                        Feeling, dan Judging. Biasanya, individu ENFJ dikenal sebagai sosok yang pandai berteman dan
                        peka
                        terhadap perasaan orang lain.
                    </li>
                    <h3>Kelebihan ENFJ</h3>
                    <li>- Ramah</li>
                    <li>- Persuasif</li>
                    <li>- Terorganisir</li>
                    <li>- Penuh kasih sayang</li>
                    <li>- Memiliki empati tinggi</li>
                    <li>- Suka bersosialisasi</li>
                    <h3>Kekurangan ENFJ</h3>
                    <li>- Kaku</li>
                    <li>- Manipulatif</li>
                    <li>- Sangat sensitif</li>
                    <li>- Sangat protektif</li>
                    <li>- Suka mengorbankan diri</li>
                    <h3>Karir Yang Cocok Untuk Seorang ENFJ</h3>
                    <li>Individu ENFJ digambarkan sebagai pribadi yang sangat suka membantu orang lain dan memiliki
                        kemampuan dalam memahami keinginan, kebutuhan, dan maksud orang lain. <br>
                        Tak hanya itu, pribadi ENFJ juga sangat terampil dalam berkomunikasi, membuat strategi, dan
                        mengelola kegiatan, sehingga ia memiliki potensi besar untuk menjadi pemimpin yang hebat.
                        <br>
                        Oleh sebab itu, orang dengan kepribadian ENFJ umumnya sangat menyukai karir di mana ia bisa
                        menghabiskan banyak waktu untuk berinteraksi dan menolong orang lain. Ia juga suka bekerja di
                        lingkungan yang fleksibel dan memungkinkannya untuk mempelajari berbagai hal baru.
                        <br>
                        Nah, beberapa bidang pekerjaan yang cocok untuk seseorang dengan kepribadian ENFJ adalah:
                    </li>
                    <li>- Psikolog</li>
                    <li>- Guru</li>
                    <li>- Dosen</li>
                    <li>- Manajer</li>
                    <li>- Sukarelawan</li>
                </ul>
                <div class="mt-3">
                <button onclick="location.href='{{ route('tes.index') }}'" type="button" class="custom-btn btn-5">Test
                    MBTI</button>
                <button onclick="location.href='/'" type="button" class="custom-btn btn-5">Homepage</button>
                </div>
            </div>
        </div>
    </div>
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
