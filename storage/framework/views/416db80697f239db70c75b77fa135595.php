<?php $__env->startSection('title', 'Produk'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
    /* ==============================
       HALAMAN PRODUK
    ============================== */

    .produk-container {
        padding: 30px;
        background: #fff;
        min-height: calc(100vh - 100px);
    }

    .produk-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .produk-title {
        margin: 0;
        font-size: 32px;
        font-weight: 700;
        color: #1f2937;
    }

    .produk-subtitle {
        margin-top: 5px;
        color: #6b7280;
        font-size: 14px;
    }

    /* Tombol Create */
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

    /* Search */
    .search-box {
        background: #fff;
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

    /* Table */
    .table-container {
        background: white;
        border-radius: 15px;
        overflow-x: auto;
        border: 1px solid #eee;
        box-shadow: 0 5px 20px rgba(0, 0, 0, .05);
    }

    .produk-table {
        margin-bottom: 0;
        min-width: 950px;
    }

    .produk-table thead th {
        background: #fff5f8;
        color: #374151;
        font-size: 14px;
        font-weight: 700;
        padding: 16px 14px;
        border-bottom: 2px solid #f1d9e1;
        white-space: nowrap;
    }

    .produk-table tbody td,
    .produk-table tbody th {
        padding: 15px 14px;
        vertical-align: middle;
        border-bottom: 1px solid #f0f0f0;
        color: #374151;
    }

    .produk-table tbody tr {
        transition: all .2s ease;
    }

    .produk-table tbody tr:hover {
        background: #fff9fb;
    }

    /* Foto produk */
    .product-image {
        width: 75px;
        height: 75px;
        object-fit: cover;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        padding: 3px;
        background: white;
        transition: all .2s ease;
    }

    .product-image:hover {
        transform: scale(1.08);
        box-shadow: 0 5px 15px rgba(0, 0, 0, .12);
    }

    /* Nama produk */
    .product-name {
        font-weight: 600;
        color: #1f2937;
    }

    /* Harga */
    .price {
        font-weight: 600;
        color: #374151;
    }

    /* Stok */
    .stock-badge {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 20px;
        background: #fce7f3;
        color: #be185d;
        font-size: 13px;
        font-weight: 700;
    }

    /* Tombol aksi */
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

    /* Edit */
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

    /* Hapus */
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

    /* User */
    .user-name {
        font-weight: 500;
        color: #4b5563;
    }

    /* Data kosong */
    .empty-data {
        text-align: center;
        padding: 50px !important;
        color: #6b7280;
    }

    .empty-data i {
        font-size: 45px;
        color: #d1d5db;
        margin-bottom: 12px;
    }

    .empty-data h5 {
        margin: 0;
        color: #6b7280;
    }

    /* Pagination */
    .pagination-wrapper {
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .produk-container {
            padding: 20px 10px;
        }

        .produk-title {
            font-size: 26px;
        }

        .produk-header {
            align-items: flex-start;
        }
    }
</style>


<div class="produk-container">

    
    <div class="produk-header">

        <div>
            <h1 class="produk-title">
                <i class="fa-solid fa-box-open"
                   style="color:#d66f91;"></i>
                Halaman Produk
            </h1>

            <div class="produk-subtitle">
                Kelola data produk dan stok barang
            </div>
        </div>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Produk::class)): ?>
            <a href="<?php echo e(route('produk.create')); ?>" class="btn-create">
                <i class="fa-solid fa-plus"></i>
                Tambah Produk
            </a>
        <?php endif; ?>

    </div>


    
    <div class="search-box">

        <form action="<?php echo e(route('produk.index')); ?>" method="GET">

            <div class="input-group">

                <input
                    type="text"
                    name="search"
                    value="<?php echo e(request('search')); ?>"
                    class="form-control"
                    placeholder="Cari nama produk..."
                >

                <button class="btn-search" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Search
                </button>

            </div>

        </form>

    </div>


    
    <div class="table-container">

        <table class="table produk-table">

            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>User</th>
                    <th>Foto</th>
                    <th>Nama Produk</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th width="130">Aksi</th>
                </tr>
            </thead>

            <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <tr>

                        
                        <th scope="row">
                            <?php echo e($products->firstItem() + $loop->index); ?>

                        </th>


                        
                        <td>
                            <span class="user-name">
                                <i class="fa-solid fa-user"
                                   style="color:#9ca3af;"></i>

                                <?php echo e($product->user->name); ?>

                            </span>
                        </td>


                        
                        <td>

                            <img
                                src="<?php echo e(asset('storage/'.$product->foto)); ?>"
                                class="product-image"
                                alt="<?php echo e($product->nama); ?>"
                            >

                        </td>


                        
                        <td>
                            <span class="product-name">
                                <?php echo e($product->nama); ?>

                            </span>
                        </td>


                        
                        <td>
                            <span class="price">
                                Rp <?php echo e(number_format($product->harga_beli, 0, ',', '.')); ?>

                            </span>
                        </td>


                        
                        <td>
                            <span class="price">
                                Rp <?php echo e(number_format($product->harga_jual, 0, ',', '.')); ?>

                            </span>
                        </td>


                        
                        <td>
                            <span class="stock-badge">
                                <?php echo e($product->stok); ?>

                            </span>
                        </td>


                        
                        <td>

                            <div class="action-buttons">

                                
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $product)): ?>

                                    <a
                                        href="<?php echo e(route('produk.edit', $product)); ?>"
                                        class="btn-icon btn-edit"
                                        title="Edit Produk"
                                    >
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                <?php endif; ?>


                                
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $product)): ?>

                                    <form
                                        action="<?php echo e(route('produk.destroy', $product)); ?>"
                                        method="POST"
                                        class="d-inline"
                                    >

                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>

                                        <button
                                            type="submit"
                                            class="btn-icon btn-delete"
                                            title="Hapus Produk"
                                            onclick="return confirm('Apakah anda yakin akan menghapus produk ini?')"
                                        >
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                    </form>

                                <?php endif; ?>

                            </div>

                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>

                        <td colspan="8" class="empty-data">

                            <i class="fa-solid fa-box-open d-block"></i>

                            <h5>
                                Data produk tidak tersedia
                            </h5>

                            <small>
                                Belum ada produk yang ditemukan.
                            </small>

                        </td>

                    </tr>

                <?php endif; ?>

            </tbody>

        </table>

    </div>


    
    <div class="pagination-wrapper">

        <?php echo e($products->links()); ?>


    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\APK_POS\resources\views/produk/index.blade.php ENDPATH**/ ?>