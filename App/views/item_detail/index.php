<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['itm']['Nama_Barang']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['itm']['Kode_Barang']; ?></h6>
            <p class="card-text"><?= $data['itm']['Stok']; ?></p>
            <p class="card-text"><?= $data['itm']['Kategori']; ?></p>
            <p class="card-text"><?= $data['itm']['Harga']; ?></p>
            <a href="<?= BASEURL; ?>/Home" class="card-link">Back</a>
        </div>
    </div>
</div>