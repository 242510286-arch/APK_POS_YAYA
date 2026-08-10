@extends('layouts.app')

@section('title', 'Penjualan')

@section('content')

@include('layouts.navbar')

{{-- Font Awesome --}}
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
    /* =====================================
       CONTAINER
    ===================================== */

    .penjualan-container {
        padding: 30px;
        background: #ffffff;
        min-height: calc(100vh - 100px);
    }


    /* =====================================
       HEADER
    ===================================== */

    .penjualan-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .penjualan-title {
        margin: 0;
        font-size: 32px;
        font-weight: 700;
        color: #1f2937;
    }

    .penjualan-subtitle {
        margin-top: 6px;
        color: #6b7280;
        font-size: 14px;
    }


    /* =====================================
       BUTTON CREATE
    ===================================== */

    .btn-create {
        background: linear-gradient(135deg, #e083a1, #d66f91);
        color: white;
        border: none;
        border-radius: 10px;
        padding: 11px 18px;
        font-weight: 600;
        text-decoration: none;
        transition: all .2s ease;
        box-shadow: 0 4px 10px rgba(214, 111, 145, .25);
    }

    .btn-create:hover {
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 7px 15px rgba(214, 111, 145, .35);
    }

    .btn-create i {
        margin-right: 7px;
    }


    /* =====================================
       SEARCH
    ===================================== */

    .search-box {
        background: #ffffff;
        padding: 15px;
        border-radius: 14px;
        margin-bottom: 20px;
        border: 1px solid #f0dbe3;
        box-shadow: 0 4px 15px rgba(0, 0, 0, .04);
    }

    .search-box .form-control {
        height: 45px;
        border-radius: 9px 0 0 9px;
        border: 1px solid #ddd;
        box-shadow: none;
    }

    .search-box .form-control:focus {
        border-color: #d66f91;
        box-shadow: 0 0 0 3px rgba(214, 111, 145, .1);
    }

    .btn-search {
        height: 45px;
        padding: 0 22px;
        background: #d66f91;
        color: white;
        border: none;
        border-radius: 0 9px 9px 0;
        font-weight: 600;
    }

    .btn-search:hover {
        background: #c75f81;
        color: white;
    }


    /* =====================================
       TABLE
    ===================================== */

    .table-container {
        background: white;
        border-radius: 15px;
        overflow-x: auto;
        border: 1px solid #eee;
        box-shadow: 0 5px 20px rgba(0, 0, 0, .05);
    }

    .penjualan-table {
        margin-bottom: 0;
        min-width: 1000px;
    }

    .penjualan-table thead th {
        background: #fff5f8;
        color: #374151;
        font-size: 14px;
        font-weight: 700;
        padding: 16px 14px;
        border-bottom: 2px solid #f1d9e1;
        white-space: nowrap;
    }

    .penjualan-table tbody td,
    .penjualan-table tbody th {
        padding: 15px 14px;
        vertical-align: middle;
        border-bottom: 1px solid #f0f0f0;
        color: #374151;
    }

    .penjualan-table tbody tr {
        transition: all .2s ease;
    }

    .penjualan-table tbody tr:hover {
        background: #fff9fb;
    }


    /* =====================================
       TANGGAL
    ===================================== */

    .tanggal {
        color: #4b5563;
        font-size: 14px;
        white-space: nowrap;
    }

    .tanggal i {
        color: #d66f91;
        margin-right: 6px;
    }


    /* =====================================
       KASIR
    ===================================== */

    .kasir-name {
        font-weight: 600;
        color: #374151;
        white-space: nowrap;
    }

    .kasir-name i {
        color: #9ca3af;
        margin-right: 6px;
    }


    /* =====================================
       TOTAL PEMBAYARAN
    ===================================== */

    .total-payment {
        color: #d05f82;
        font-weight: 700;
        white-space: nowrap;
    }


    /* =====================================
       METODE PEMBAYARAN
    ===================================== */

    .payment-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 7px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
    }

    .payment-cash {
        background: #dcfce7;
        color: #15803d;
    }

    .payment-transfer {
        background: #dbeafe;
        color: #1d4ed8;
    }

    .payment-qris {
        background: #f3e8ff;
        color: #7e22ce;
    }

    .payment-default {
        background: #f3f4f6;
        color: #374151;
    }


    /* =====================================
       STATUS
    ===================================== */

    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 7px 13px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
    }

    .status-open {
        background: #fef3c7;
        color: #b45309;
    }

    .status-completed {
        background: #dcfce7;
        color: #15803d;
    }

    .status-cancelled {
        background: #fee2e2;
        color: #dc2626;
    }

    .status-default {
        background: #f3f4f6;
        color: #374151;
    }


    /* =====================================
       BUTTON AKSI
    ===================================== */

    .action-buttons {
        display: flex;
        gap: 7px;
        align-items: center;
    }

    .btn-icon {
        width: 38px;
        height: 38px;
        border: none;
        border-radius: 9px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all .2s ease;
    }


    /* DETAIL */

    .btn-detail {
        background: #dbeafe;
        color: #2563eb;
    }

    .btn-detail:hover {
        background: #2563eb;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(37, 99, 235, .25);
    }


    /* EDIT */

    .btn-edit {
        background: #fff3cd;
        color: #e09b00;
    }

    .btn-edit:hover {
        background: #fbbf24;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(251, 191, 36, .25);
    }


    /* HAPUS */

    .btn-delete {
        background: #fee2e2;
        color: #dc2626;
        cursor: pointer;
    }

    .btn-delete:hover {
        background: #dc2626;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(220, 38, 38, .25);
    }


    /* =====================================
       DATA KOSONG
    ===================================== */

    .empty-data {
        text-align: center;
        padding: 60px !important;
        color: #6b7280;
    }

    .empty-data i {
        font-size: 45px;
        color: #d1d5db;
        margin-bottom: 15px;
    }

    .empty-data h5 {
        margin: 0;
        color: #6b7280;
    }


    /* =====================================
       PAGINATION
    ===================================== */

    .pagination-wrapper {
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }


    /* =====================================
       RESPONSIVE
    ===================================== */

    @media (max-width: 768px) {

        .penjualan-container {
            padding: 20px 10px;
        }

        .penjualan-title {
            font-size: 26px;
        }

        .penjualan-header {
            align-items: flex-start;
        }
    }
</style>


<div class="penjualan-container">

    {{-- =====================================
         HEADER
    ====================================== --}}

    <div class="penjualan-header">

        <div>

            <h1 class="penjualan-title">

                <i class="fa-solid fa-cart-shopping"
                   style="color:#d66f91;"></i>

                Halaman Penjualan

            </h1>

            <div class="penjualan-subtitle">
                Kelola transaksi dan pembayaran penjualan
            </div>

        </div>


        @can('create', App\Models\Penjualan::class)

            <a href="{{ route('penjualan.create') }}"
               class="btn-create">

                <i class="fa-solid fa-plus"></i>

                Tambah Penjualan

            </a>

        @endcan

    </div>


    {{-- =====================================
         SEARCH
    ====================================== --}}

    <div class="search-box">

        <form action="{{ route('penjualan.index') }}" method="GET">

            <div class="input-group">

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    class="form-control"
                    placeholder="Cari nama kasir..."
                >

                <button
                    class="btn-search"
                    type="submit"
                >

                    <i class="fa-solid fa-magnifying-glass"></i>

                    Search

                </button>

            </div>

        </form>

    </div>


    {{-- =====================================
         TABLE
    ====================================== --}}

    <div class="table-container">

        <table class="table penjualan-table">

            <thead>

                <tr>

                    <th width="50">#</th>

                    <th>Tanggal Transaksi</th>

                    <th>Kasir</th>

                    <th>Total Pembayaran</th>

                    <th>Metode Pembayaran</th>

                    <th>Status</th>

                    <th width="140">Aksi</th>

                </tr>

            </thead>


            <tbody>

                @forelse ($sales as $sale)

                    <tr>

                        {{-- NOMOR --}}

                        <th scope="row">

                            {{ $sales->firstItem() + $loop->index }}

                        </th>


                        {{-- TANGGAL --}}

                        <td>

                            <span class="tanggal">

                                <i class="fa-regular fa-calendar"></i>

                                {{ $sale->created_at->format('d-m-Y H:i:s') }}

                            </span>

                        </td>


                        {{-- KASIR --}}

                        <td>

                            <span class="kasir-name">

                                <i class="fa-solid fa-user"></i>

                                {{ $sale->user->name }}

                            </span>

                        </td>


                        {{-- TOTAL --}}

                        <td>

                            <span class="total-payment">

                                Rp {{ number_format($sale->total_pembayaran, 0, ',', '.') }}

                            </span>

                        </td>


                        {{-- METODE PEMBAYARAN --}}

                        <td>

                            @if(strtoupper($sale->metode_pembayaran) == 'CASH')

                                <span class="payment-badge payment-cash">

                                    <i class="fa-solid fa-money-bill-wave"></i>

                                    CASH

                                </span>

                            @elseif(strtoupper($sale->metode_pembayaran) == 'TRANSFER')

                                <span class="payment-badge payment-transfer">

                                    <i class="fa-solid fa-building-columns"></i>

                                    TRANSFER

                                </span>

                            @elseif(strtoupper($sale->metode_pembayaran) == 'QRIS')

                                <span class="payment-badge payment-qris">

                                    <i class="fa-solid fa-qrcode"></i>

                                    QRIS

                                </span>

                            @else

                                <span class="payment-badge payment-default">

                                    {{ strtoupper($sale->metode_pembayaran) }}

                                </span>

                            @endif

                        </td>


                        {{-- STATUS --}}

                        <td>

                            @if(strtoupper($sale->status) == 'OPEN')

                                <span class="status-badge status-open">

                                    <i class="fa-solid fa-clock"></i>

                                    OPEN

                                </span>

                            @elseif(strtoupper($sale->status) == 'COMPLETED')

                                <span class="status-badge status-completed">

                                    <i class="fa-solid fa-circle-check"></i>

                                    COMPLETED

                                </span>

                            @elseif(strtoupper($sale->status) == 'CANCELLED')

                                <span class="status-badge status-cancelled">

                                    <i class="fa-solid fa-circle-xmark"></i>

                                    CANCELLED

                                </span>

                            @else

                                <span class="status-badge status-default">

                                    {{ strtoupper($sale->status) }}

                                </span>

                            @endif

                        </td>


                        {{-- =====================================
                             AKSI
                        ====================================== --}}

                        <td>

                            <div class="action-buttons">

                                {{-- DETAIL --}}

                                <a
                                    href="{{ route('penjualan.show', $sale) }}"
                                    class="btn-icon btn-detail"
                                    title="Detail Penjualan"
                                >

                                    <i class="fa-solid fa-eye"></i>

                                </a>


                                {{-- EDIT --}}

                                @can('update', $sale)

                                    <a
                                        href="{{ route('penjualan.edit', $sale) }}"
                                        class="btn-icon btn-edit"
                                        title="Edit Penjualan"
                                    >

                                        <i class="fa-solid fa-pen"></i>

                                    </a>

                                @endcan


                                {{-- HAPUS --}}

                                @can('delete', $sale)

                                    <form
                                        action="{{ route('penjualan.destroy', $sale) }}"
                                        method="POST"
                                        class="d-inline"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn-icon btn-delete"
                                            title="Hapus Penjualan"
                                            onclick="return confirm('Apakah anda yakin akan menghapus transaksi ini?')"
                                        >

                                            <i class="fa-solid fa-trash"></i>

                                        </button>

                                    </form>

                                @endcan

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7" class="empty-data">

                            <i class="fa-solid fa-cart-shopping d-block"></i>

                            <h5>
                                Data penjualan tidak tersedia
                            </h5>

                            <small>
                                Belum ada transaksi yang ditemukan.
                            </small>

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>


    {{-- =====================================
         PAGINATION
    ====================================== --}}

    <div class="pagination-wrapper">

        {{ $sales->links() }}

    </div>

</div>

@endsection