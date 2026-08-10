<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Produk</title>

    {{-- Bootstrap --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    {{-- Font Awesome --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;

            font-family: "Poppins", "Segoe UI", sans-serif;

            background:
                radial-gradient(
                    circle at top left,
                    #ffe5ef 0%,
                    transparent 35%
                ),
                radial-gradient(
                    circle at bottom right,
                    #f8d6e3 0%,
                    transparent 35%
                ),
                linear-gradient(
                    135deg,
                    #fff7fa 0%,
                    #fdebf2 50%,
                    #f9dce8 100%
                );

            padding: 40px 20px;

            position: relative;

            overflow-x: hidden;
        }


        /* =====================================
           BACKGROUND DECORATION
        ====================================== */

        body::before {
            content: "";

            position: fixed;

            width: 330px;
            height: 330px;

            background: rgba(230, 126, 157, 0.13);

            border-radius: 50%;

            top: -160px;
            left: -100px;

            filter: blur(3px);

            z-index: 0;
        }

        body::after {
            content: "";

            position: fixed;

            width: 400px;
            height: 400px;

            background: rgba(255, 255, 255, 0.55);

            border-radius: 50%;

            bottom: -220px;
            right: -130px;

            filter: blur(4px);

            z-index: 0;
        }


        /* =====================================
           CONTAINER
        ====================================== */

        .product-wrapper {
            width: 100%;
            max-width: 1100px;

            margin: auto;

            position: relative;

            z-index: 2;
        }


        /* =====================================
           CARD
        ====================================== */

        .product-card {

            background: rgba(255, 255, 255, 0.92);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border: 1px solid rgba(255, 255, 255, 0.8);

            border-radius: 25px;

            padding: 35px;

            box-shadow:
                0 25px 60px rgba(181, 92, 120, 0.15),
                0 8px 25px rgba(181, 92, 120, 0.07);

            animation: fadeUp 0.6s ease;
        }


        @keyframes fadeUp {

            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        /* =====================================
           HEADER
        ====================================== */

        .page-header {
            display: flex;

            align-items: center;

            gap: 15px;

            margin-bottom: 30px;
        }


        .header-icon {

            width: 55px;
            height: 55px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 17px;

            background: linear-gradient(
                135deg,
                #e7799d,
                #d95f87
            );

            color: white;

            font-size: 22px;

            box-shadow:
                0 10px 22px rgba(217, 95, 135, 0.25);
        }


        .page-title {

            margin: 0;

            color: #49333d;

            font-size: 27px;

            font-weight: 700;
        }


        .page-subtitle {

            margin: 3px 0 0;

            color: #a17e8c;

            font-size: 13px;
        }


        /* =====================================
           FORM LABEL
        ====================================== */

        .form-label {

            color: #604653;

            font-size: 14px;

            font-weight: 600;

            margin-bottom: 8px;
        }


        /* =====================================
           INPUT
        ====================================== */

        .form-control {

            height: 48px;

            border-radius: 12px;

            border: 1px solid #efd4df;

            background: #fffafd;

            color: #543b46;

            font-size: 14px;

            transition: all 0.25s ease;
        }


        .form-control:focus {

            border-color: #df7799;

            background: #fff;

            box-shadow:
                0 0 0 4px rgba(223, 119, 153, 0.12);

            outline: none;
        }


        .form-control::placeholder {

            color: #b99da8;
        }


        /* =====================================
           FILE INPUT
        ====================================== */

        input[type="file"] {

            padding: 9px 12px;

            background: #fffafd;
        }


        input[type="file"]::file-selector-button {

            border: none;

            background: #f7d8e3;

            color: #a24f70;

            border-radius: 8px;

            padding: 7px 13px;

            margin-right: 10px;

            font-weight: 600;

            cursor: pointer;

            transition: 0.2s;
        }


        input[type="file"]::file-selector-button:hover {

            background: #f2c5d5;
        }


        /* =====================================
           PREVIEW FOTO
        ====================================== */

        .preview-title {

            color: #604653;

            font-size: 14px;

            font-weight: 600;

            margin-bottom: 8px;
        }


        .preview-box {

            width: 100%;

            height: 250px;

            border-radius: 18px;

            border: 2px dashed #efc4d3;

            background: #fff8fb;

            display: flex;

            align-items: center;

            justify-content: center;

            flex-direction: column;

            color: #b58d9d;

            overflow: hidden;

            transition: 0.25s ease;
        }


        .preview-box:hover {

            border-color: #df7799;

            background: #fff4f8;
        }


        .preview-box i {

            font-size: 40px;

            color: #e28aa7;

            margin-bottom: 10px;
        }


        .preview-box span {

            font-size: 13px;
        }


        #preview {

            width: 100%;

            height: 100%;

            object-fit: contain;

            display: none;
        }


        /* =====================================
           BUTTON
        ====================================== */

        .btn-save {

            border: none;

            height: 46px;

            padding: 0 22px;

            border-radius: 11px;

            background: linear-gradient(
                135deg,
                #e67b9e,
                #d85f87
            );

            color: white;

            font-size: 14px;

            font-weight: 600;

            box-shadow:
                0 9px 20px rgba(216, 95, 135, 0.22);

            transition: all 0.25s ease;
        }


        .btn-save:hover {

            transform: translateY(-2px);

            background: linear-gradient(
                135deg,
                #df6f94,
                #cf527c
            );

            color: white;

            box-shadow:
                0 13px 25px rgba(216, 95, 135, 0.30);
        }


        .btn-back {

            height: 46px;

            padding: 0 22px;

            border-radius: 11px;

            border: 1px solid #e7c5d1;

            background: #fff5f8;

            color: #9b6077;

            font-size: 14px;

            font-weight: 600;

            transition: 0.25s ease;
        }


        .btn-back:hover {

            background: #fce4ed;

            border-color: #dda0b5;

            color: #8f4d68;
        }


        /* =====================================
           ALERT
        ====================================== */

        .alert-danger {

            border: none;

            border-radius: 12px;

            background: #fde8ee;

            color: #b33d62;

            font-size: 14px;
        }


        /* =====================================
           RESPONSIVE
        ====================================== */

        @media (max-width: 768px) {

            body {
                padding: 20px 15px;
            }

            .product-card {
                padding: 25px 20px;
                border-radius: 20px;
            }

            .page-title {
                font-size: 23px;
            }

            .preview-box {
                height: 220px;
                margin-top: 10px;
            }
        }

    </style>

</head>


<body>


<div class="product-wrapper">

    <div class="product-card">


        {{-- =====================================
             HEADER
        ====================================== --}}

        <div class="page-header">

            <div class="header-icon">

                <i class="fa-solid fa-box"></i>

            </div>

            <div>

                <h1 class="page-title">
                    Tambah Produk
                </h1>

                <p class="page-subtitle">
                    Tambahkan produk baru ke dalam sistem POS
                </p>

            </div>

        </div>


        {{-- =====================================
             ERROR
        ====================================== --}}

        @if($errors->any())

            <div class="alert alert-danger mb-4">

                <i class="fa-solid fa-circle-exclamation me-2"></i>

                Silakan periksa kembali data yang dimasukkan.

            </div>

        @endif


        {{-- =====================================
             FORM
        ====================================== --}}

        <form
            action="{{ route('produk.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf


            <div class="row g-4">


                {{-- =====================================
                     LEFT SIDE
                ====================================== --}}

                <div class="col-md-7">


                    {{-- GAMBAR --}}

                    <div class="mb-3">

                        <label
                            for="gambar"
                            class="form-label"
                        >

                            <i class="fa-solid fa-image me-1"
                               style="color:#d77b99;">
                            </i>

                            Gambar Produk

                        </label>


                        <input
                            type="file"
                            name="gambar"
                            id="gambar"
                            class="form-control"
                            accept="image/*"
                            onchange="previewImage(event)"
                        >

                    </div>


                    {{-- NAMA PRODUK --}}

                    <div class="mb-3">

                        <label
                            for="nama_produk"
                            class="form-label"
                        >

                            <i class="fa-solid fa-tag me-1"
                               style="color:#d77b99;">
                            </i>

                            Nama Produk

                        </label>


                        <input
                            type="text"
                            name="nama_produk"
                            id="nama_produk"
                            class="form-control"
                            placeholder="Masukkan nama produk"
                            value="{{ old('nama_produk') }}"
                            required
                        >

                    </div>


                    {{-- HARGA BELI --}}

                    <div class="mb-3">

                        <label
                            for="harga_beli"
                            class="form-label"
                        >

                            <i class="fa-solid fa-money-bill me-1"
                               style="color:#d77b99;">
                            </i>

                            Harga Beli

                        </label>


                        <input
                            type="number"
                            name="harga_beli"
                            id="harga_beli"
                            class="form-control"
                            placeholder="Masukkan harga beli"
                            value="{{ old('harga_beli') }}"
                            required
                        >

                    </div>


                    {{-- HARGA JUAL --}}

                    <div class="mb-3">

                        <label
                            for="harga_jual"
                            class="form-label"
                        >

                            <i class="fa-solid fa-tags me-1"
                               style="color:#d77b99;">
                            </i>

                            Harga Jual

                        </label>


                        <input
                            type="number"
                            name="harga_jual"
                            id="harga_jual"
                            class="form-control"
                            placeholder="Masukkan harga jual"
                            value="{{ old('harga_jual') }}"
                            required
                        >

                    </div>


                    {{-- STOK --}}

                    <div class="mb-3">

                        <label
                            for="stok"
                            class="form-label"
                        >

                            <i class="fa-solid fa-boxes-stacked me-1"
                               style="color:#d77b99;">
                            </i>

                            Stok

                        </label>


                        <input
                            type="number"
                            name="stok"
                            id="stok"
                            class="form-control"
                            placeholder="Masukkan jumlah stok"
                            value="{{ old('stok') }}"
                            required
                        >

                    </div>

                </div>


                {{-- =====================================
                     RIGHT SIDE - PREVIEW
                ====================================== --}}

                <div class="col-md-5">

                    <div class="preview-title">

                        <i class="fa-solid fa-camera me-1"
                           style="color:#d77b99;">
                        </i>

                        Preview Foto

                    </div>


                    <div class="preview-box">

                        <i
                            class="fa-solid fa-image"
                            id="previewIcon"
                        ></i>

                        <span id="previewText">
                            Belum ada foto
                        </span>


                        <img
                            id="preview"
                            alt="Preview Produk"
                        >

                    </div>

                </div>

            </div>


            {{-- =====================================
                 BUTTON
            ====================================== --}}

            <div class="d-flex gap-2 mt-4 pt-3"
                 style="border-top: 1px solid #f3dce4;">

                <button
                    type="submit"
                    class="btn-save"
                >

                    <i class="fa-solid fa-floppy-disk me-2"></i>

                    Simpan

                </button>


                <a
                    href="{{ url()->previous() }}"
                    class="btn btn-back"
                >

                    <i class="fa-solid fa-arrow-left me-2"></i>

                    Kembali

                </a>

            </div>


        </form>

    </div>

</div>


{{-- =====================================
     PREVIEW IMAGE JAVASCRIPT
====================================== --}}

<script>

    function previewImage(event) {

        const input = event.target;

        const preview =
            document.getElementById('preview');

        const previewIcon =
            document.getElementById('previewIcon');

        const previewText =
            document.getElementById('previewText');


        if (input.files && input.files[0]) {

            const reader =
                new FileReader();


            reader.onload = function(e) {

                preview.src = e.target.result;

                preview.style.display = 'block';

                previewIcon.style.display = 'none';

                previewText.style.display = 'none';

            };


            reader.readAsDataURL(input.files[0]);

        }

    }

</script>


</body>

</html>