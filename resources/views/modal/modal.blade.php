@extends('layouts.frontend')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Pengisian Biodata</title>

    </head>

    <body>
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
        <!-- Modal -->
        <main>
            <section class="container">
                <div class="card col-md-4">
                    <img src="{{ asset('assets/backend/images/animasi-welcome.png') }}">
                    <p style="font-size: 24px; font-weight: bold;">Mengisi Jawaban Dengan Santai</p class="display-5">
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
        </main>
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title" id="formModalLabel" style="font-size: 100%; font-weight: bold">Form Pengisian
                            Biodata</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form untuk mengisi biodata -->
                        <form action="{{ route('biodata.store') }}" method="POST">
                            @csrf

                            <!-- Nama -->
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ old('nama') }}" required placeholder="Masukkan Nama">
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin:</label>
                                <select class="form-control" id="jk" name="jk" required>
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki" {{ old('jk') == 'Laki-laki' ? 'selected' : '' }}>
                                        Laki-laki</option>
                                    <option value="Perempuan" {{ old('jk') == 'Perempuan' ? 'selected' : '' }}>
                                        Perempuan</option>
                                </select>
                            </div>


                            <!-- Telepon -->
                            <div class="form-group">
                                <label for="no_tlp">Telepon:</label>
                                <input type="number" class="form-control" id="no_tlp" name="no_tlp"
                                    value="{{ old('no_tlp') }}" required placeholder="Masukkan Nomor Telepon">
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" required placeholder="Masukkan Email">
                            </div>

                            <!-- Tombol Simpan -->
                            <button type="submit"
                                class="btn btn-primary rounded-pill text-white float-end px-5">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Script untuk menampilkan modal saat halaman dimuat -->
        <script>
            $(document).ready(function() {
                $('#formModal').modal('show');
            });
        </script>
    </body>

    </html>
@endsection
