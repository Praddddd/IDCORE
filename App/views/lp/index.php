<form class="form-inline " action="<?= BASEURL; ?>/lp/cari" method="post">
  			<input class="form-control form-control-sm ml-3 w-50  align-middle" type="text" placeholder="Search" aria-label="Search" name="keyword" id="keyword" autocomplete="off">
            <button class="btn btn-outline-danger ms-2" type="submit" id="tombolCari">Cari</button>
</form>
<br><br>


<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
			 <br><br>	
             <h2 class="text-white">LIST PENGGUNA</h2>
                <ol class="list-group list-group-numbered">                
                    <?php foreach ($data['usr'] as $usr): ?>
                        <hr>
                    <li class="list-group-item ">
                        |
						<b><?= $usr['ID_user']; ?></b>
						   |
                        <?= $usr['username']; ?>
						
                        <a href="<?= BASEURL; ?>/lp/hapus/<?= $usr['ID_user']; ?>" class="badge bg-danger float-end ms-2" onclick="return confirm('yakin?');">hapus</a>
                        <a href="<?= BASEURL; ?>/lp/detail/<?= $usr['ID_user']; ?>" class="badge bg-primary float-end ms-2">detail</a>
                    </li>
                    <?php endforeach; ?>
                </ol>
        </div>
    </div>
</div> 