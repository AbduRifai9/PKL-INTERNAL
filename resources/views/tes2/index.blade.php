@extends('layouts.frontend')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Test MBTI!!</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            main {
                padding: 100px;
                text-align: center;
                /* Pusatkan teks */
            }

            .container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
            }

            h1 {
                color: #333;
                text-align: center;
                /* Pusatkan teks */
            }

            .question {
                margin-bottom: 15px;
                text-align: center;
                /* Pusatkan teks */
            }

            .question p {
                font-weight: bold;
                font-size: 1.2em;
                /* Tambahkan ukuran font yang sesuai */
                margin-bottom: 10px;
                /* Berikan margin bawah pada paragraf */
            }

            .question .radio-options {
                display: flex;
                justify-content: center;
                gap: 20px;
                /* Jarak antara radio button dan teks jawaban */
            }

            .question .radio-option {
                display: flex;
                align-items: center;
            }

            .question input[type="radio"] {
                display: none;
                /* Sembunyikan radio button asli */
            }

            .question label {
                display: inline-block;
                background-color: #f9f9f9;
                /* Warna latar belakang label */
                border: 2px solid #ddd;
                /* Garis border label */
                border-radius: 8px;
                /* Border radius untuk sudut melengkung */
                padding: 15px 30px;
                /* Padding untuk ruang di dalam label */
                cursor: pointer;
                transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
                /* Animasi transisi */
            }

            .question label:hover {
                background-color: #e9e9e9;
                border-color: #aaa;
            }

            .question input[type="radio"]:checked+label {
                background-color: #89a7c6;
                /* Warna latar belakang saat terpilih */
                border-color: #007bff;
                /* Warna border saat terpilih */
                color: #fff;
                /* Warna teks saat terpilih */
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
                box-shadow: inset 2px 2px 2px 0px rgba(196, 70, 70, 0.758),
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
                background: linear-gradient(0deg, rgb(126, 108, 243) 0%, rgb(215, 167, 147) 100%);
            }

            .btn-5:hover {
                color: #bfd480;
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

            #result {
                margin-top: 20px;
            }

            .card {
                background-color: white;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin: 10px;
                padding: 20px;
                width: 300px;
                text-align: center;
                transition: transform 0.3s ease-in-out;
            }

            .card:hover {
                transform: translateY(-10px);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }

            .card h2 {
                color: #4CAF50;
            }

            .header2 {
                background-color: #f5b76f;
                color: rgb(255, 255, 255);
                padding: 3em 0;
                text-align: center;
            }

            .text {
                color: #333;
                font-size: 2em;
                font-weight: bold;
                margin-top: 20px;
                margin: 70px auto 20px auto;
                width: 100%;
                text-align: center;
                /* Pusatkan teks */
            }

            .text2 {
                color: #333;
                font-size: 1em;
                font-weight: bold;
                margin-top: 0;
                margin: auto;
                text-align: center;
                /* Pusatkan teks */
            }

            .img {
                max-width: 50%;
                height: auto;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            }

            .image img:hover {
                transform: scale(1.05);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }

            .answers {
                display: flex;
                justify-content: space-around;
                margin: 20px;
            }

            .answer button {
                background-color: white;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 20px;
                width: 35%;
                text-align: center;
                cursor: pointer;
                font-size: 16px;
                transition: box-shadow 0.2s ease-in-out;
            }

            .answer button:hover {
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }

            .note {
                text-align: center;
                font-size: 0.9em;
                color: #555;
                margin-top: 10px;
            }
        </style>
    </head>

    <body>
        <main>
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Baca Terlebih Dahulu Sebelum Mengisi Pertanyaan DI Bawah Ini!!!</h4>
                </div>
            </div>
            <section class="container">
                <div class="card col-md-4">
                    <img src="{{ asset('assets/backend/images/animasi-welcome.png') }}">
                    <p style="font-size: 24px; font-weight: bold;">Mengisi Jawaban Dengan Santai</p>
                    <p>Luangkan waktu untuk memahami setiap pertanyaan. Jangan terburu-buru dalam memberikan jawaban.</p>
                </div>
                <div class="card col-md-4">
                    <img src="{{ asset('assets/backend/images/animasi-welcome-2.png') }}">
                    <p style="font-size: 24px; font-weight: bold">Tidak Ada Jawaban Yang Salah</p>
                    <p>Tidak ada jawaban yang benar atau salah. Pilih jawaban yang paling menggambarkan diri Anda, bukan
                        jawaban yang Anda pikir diharapkan oleh orang lain.</p>
                </div>
                <div class="card col-md-4">
                    <img src="{{ asset('assets/backend/images/animasi3.png') }}">
                    <p style="font-size: 24px; font-weight: bold">Pikirkan Jawaban Secara Baik-baik</p>
                    <p>Jawablah setiap
                        pertanyaan sesuai dengan bagaimana Anda biasanya merasa atau bertindak.</p>
                </div>
            </section>
            <hr>
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Sesi Pertanyaan Di Mulai</h4>
                </div>
            </div>
            <form id="mbtiForm">
                <!-- pertanyaan 1 -->
                <div class="question">
                    <div class="text2">
                        <p>Pertanyaan ke-1:</p>
                        <p>Ketika mengerjakan tugas sekolah, Apakah Anda lebih suka?</p>
                    </div>
                    <div class="radio-options">
                        <div class="radio-option">
                            <input type="radio" id="q1a" name="q1" value="J">
                            <label for="q1a">a) Merencanakan segala sesuatu dengan rinci sebelum mulai
                                bekerja</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="q1b" name="q1" value="P">
                            <label for="q1b">b) Langsung mulai bekerja dan melihat bagaimana hasilnya nanti</label>
                        </div>
                    </div>
                </div>
                <!-- Pertanyaan 2 -->
                <div class="question">
                    <div class="text2">
                        <p>Pertanyaan ke-2:</p>
                        <p>Saat harus membuat keputusan, Apakah Anda lebih mengutamakan?</p>
                    </div>
                    <div class="radio-options">
                        <div class="radio-option">
                            <input type="radio" id="q2a" name="q2" value="T">
                            <label for="q2a">a) Logika dan pemikiran rasional</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="q2b" name="q2" value="F">
                            <label for="q2b">b) Perasaan dan dampak keputusan pada orang lain</label>
                        </div>
                    </div>
                </div>
                <!-- Pertanyaan 3 -->
                <div class="question">
                    <div class="text2">
                        <p>Pertanyaan ke-3:</p>
                        <p>Saat menghadapi masalah di sekolah, Apakah Anda cenderung?</p>
                    </div>
                    <div class="radio-options">
                        <div class="radio-option">
                            <input type="radio" id="q3a" name="q3" value="S">
                            <label for="q3a">a) Mengandalkan fakta dan detail yang konkret</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="q3b" name="q3" value="N">
                            <label for="q3b">b) Melihat gambaran besar dan mencari berbagai kemungkinan</label>
                        </div>
                    </div>
                </div>
                <!-- Pertanyaan 4 -->
                <div class="question">
                    <div class="text2">
                        <p>Pertanyaan ke-4:</p>
                        <p>Dalam berinteraksi dengan teman-teman, Apakah Anda lebih?</p>
                    </div>
                    <div class="radio-options">
                        <div class="radio-option">
                            <input type="radio" id="q4a" name="q4" value="E">
                            <label for="q4a">a) Energik dan banyak bicara</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="q4b" name="q4" value="I">
                            <label for="q4b">b) Tenang dan lebih suka mendengarkan</label>
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 5 -->
                <div class="question">
                    <div class="text2">
                        <p>Pertanyaan ke-5:</p>
                        <p>Ketika bekerja dalam kelompok di sekolah, Bagaimana Anda berkontribusi?</p>
                    </div>
                    <div class="radio-options">
                        <div class="radio-option">
                            <input type="radio" id="q5a" name="q5" value="J">
                            <label for="q5a">a) Saya suka mengatur dan memimpin kelompok</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="q5b" name="q5" value="P">
                            <label for="q5b">b) Saya suka bekerja sama dan berdiskusi dengan teman-teman</label>
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 6 -->
                <div class="question">
                    <div class="text2">
                        <p>Pertanyaan ke-6:</p>
                        <p>Bagaimana cara belajar yang paling cocok untuk Anda?</p>
                    </div>
                    <div class="radio-options">
                        <div class="radio-option">
                            <input type="radio" id="q6a" name="q6" value="S">
                            <label for="q6a">a) Saya lebih suka belajar dengan langkah-langkah yang
                                terstruktur</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="q6b" name="q6" value="N">
                            <label for="q6b">b) Saya lebih suka bereksplorasi dan belajar dari berbagai
                                sumber</label>
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 7 -->
                <div class="question">
                    <div class="text2">
                        <p>Pertanyaan ke-7:</p>
                        <p>Bagaimana Anda mengelola stres dari tugas sekolah?</p>
                    </div>
                    <div class="radio-options">
                        <div class="radio-option">
                            <input type="radio" id="q7a" name="q7" value="T">
                            <label for="q7a">a) Saya cenderung menghadapi masalah langsung dan mencari
                                solusi</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="q7b" name="q7" value="F">
                            <label for="q7b">b) Saya cenderung mencari dukungan dari teman dan keluarga</label>
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 8 -->
                <div class="question">
                    <div class="text2">
                        <p>Pertanyaan ke-8:</p>
                        <p>Apa yang paling Anda cari dalam kegiatan ekstrakurikuler?</p>
                    </div>
                    <div class="radio-options">
                        <div class="radio-option">
                            <input type="radio" id="q8a" name="q8" value="E">
                            <label for="q8a">a) Kesempatan untuk berkomunikasi dan berinteraksi dengan banyak
                                orang</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="q8b" name="q8" value="I">
                            <label for="q8b">b) Keterlibatan dalam pemecahan masalah yang kompleks</label>
                        </div>
                    </div>
                </div>

                <!-- Button Submit -->
                <button type="submit" form="mbtiForm"
                    class="btn btn-primary rounded-pill text-white px-5 float-end">Submit</button>
            </form>
        </main>

        <script>
            document.getElementById('mbtiForm').addEventListener('submit', function(event) {
                event.preventDefault();

                // Retrieve selected answers
                let answers = {
                    'E': 0,
                    'I': 0,
                    'S': 0,
                    'N': 0,
                    'T': 0,
                    'F': 0,
                    'J': 0,
                    'P': 0
                };

                answers[document.querySelector('input[name="q1"]:checked').value]++;
                answers[document.querySelector('input[name="q2"]:checked').value]++;
                answers[document.querySelector('input[name="q3"]:checked').value]++;
                answers[document.querySelector('input[name="q4"]:checked').value]++;
                answers[document.querySelector('input[name="q5"]:checked').value]++;
                answers[document.querySelector('input[name="q6"]:checked').value]++;
                answers[document.querySelector('input[name="q7"]:checked').value]++;
                answers[document.querySelector('input[name="q8"]:checked').value]++;

                let mbtiType = '';
                mbtiType += (answers['E'] > answers['I']) ? 'E' : 'I';
                mbtiType += (answers['S'] > answers['N']) ? 'S' : 'N';
                mbtiType += (answers['T'] > answers['F']) ? 'T' : 'F';
                mbtiType += (answers['J'] > answers['P']) ? 'J' : 'P';

                // Redirect based on MBTI type
                switch (mbtiType) {
                    case 'INTJ':
                        window.location.href = '{{ route('intj.index') }}';
                        break;
                    case 'INTP':
                        window.location.href = '{{ route('intp.index') }}';
                        break;
                    case 'ENTJ':
                        window.location.href = '{{ route('entj.index') }}';
                        break;
                    case 'ENTP':
                        window.location.href = '{{ route('entp.index') }}';
                        break;
                    case 'INFJ':
                        window.location.href = '{{ route('infj.index') }}';
                        break;
                    case 'INFP':
                        window.location.href = '{{ route('infp.index') }}';
                        break;
                    case 'ENFJ':
                        window.location.href = '{{ route('enfj.index') }}';
                        break;
                    case 'ENFP':
                        window.location.href = '{{ route('enfp.index') }}';
                        break;
                    case 'ISTJ':
                        window.location.href = '{{ route('istj.index') }}';
                        break;
                    case 'ISFJ':
                        window.location.href = '{{ route('isfj.index') }}';
                        break;
                    case 'ESTJ':
                        window.location.href = '{{ route('estj.index') }}';
                        break;
                    case 'ESFJ':
                        window.location.href = '{{ route('esfj.index') }}';
                        break;
                    case 'ISTP':
                        window.location.href = '{{ route('istp.index') }}';
                        break;
                    case 'ISFP':
                        window.location.href = '{{ route('isfp.index') }}';
                        break;
                    case 'ESTP':
                        window.location.href = '{{ route('estp.index') }}';
                        break;
                    case 'ESFP':
                        window.location.href = '{{ route('esfp.index') }}';
                        break;
                    default:
                        window.location.href = 'Tidak ada tipe kepribadian yang sesuai';
                        break;
                }
            });
        </script>
        </main>
    </body>

    </html>
@endsection
