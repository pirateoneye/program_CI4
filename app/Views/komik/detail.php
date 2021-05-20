<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- <div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Komik</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <p class="card-text">Penulis : <b><?= $komik['penulis']; ?></b></p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit : <?= $komik['penerbit']; ?></b></small></p>
                            <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>
                            <form class="d-inline" action="/komik/<?= $komik['id']; ?>" method="POST">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin')"> Delete</button>
                            </form>
                            <br>
                            <a href="/komik" class="btn">Kembali kedaftar komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/img/<?= $komik['sampul']; ?>" class="card-img ">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-2"><?= $komik['judul']; ?></h2>

                    <p class="card-text">Harga : <b><?= $komik['penulis']; ?></b></p>
                    <p class="card-text"><small class="text-muted"><b>Penerbit : <?= $komik['penerbit']; ?></b></small></p>
                    <div class="row">
                        <div class="col">
                            <button>-</button>
                            <input type="number" width="10em" class="jum_prod">
                            <button>+</button>
                            <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>
                        </div>

                    </div>
                    <form class="d-inline" action="/komik/<?= $komik['id']; ?>" method="POST">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin')"> Delete</button>
                    </form>
                    <br>

                    <a href="/komik" class="btn">Kembali kedaftar komik</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <h5>Spesifikasi Produk</h5>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid excepturi alias, recusandae eligendi assumenda sint perspiciatis hic officia delectus commodi ex minus id optio tenetur adipisci ullam officiis vitae velit.
        </div>
    </div>

    <div class="review">
        <h5>Review</h5>

        <div class="row">
            <div class="col-md-2">
                <div class="user">
                    username
                </div>
                <div class="rating">
                    rating
                </div>
            </div>
            <div class="col-md-8">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, eos doloribus? Voluptatibus inventore eveniet dolore quo magni laborum sapiente at pariatur soluta. Consequatur, possimus libero! Vel possimus fugiat vitae quo.
            </div>
    
        </div>
    </div>

    <div class="row">
        <div class="co">
            Yang lain juga membeli ini
        </div>
    </div>


</div>
<?= $this->endSection(); ?>