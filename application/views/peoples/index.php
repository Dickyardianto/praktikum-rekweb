<div class="container">
    <h3 class="mt-3">List Of Peoples</h3>

    <div class="row">
        <div class="col-md-5">
            <form action="<?= base_url('peoples') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Keyword" name="keyword" autofocus
                        autocomplete="off">
                    <div class="input-group-append">
                        <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            <h5>Result : <?= $total_rows ?></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($peoples)) : ?>
                    <tr>
                        <td colspan="4">
                            <div class="alert alert-danger" role="alert">Data Tidak ditemukan !</div>
                        </td>
                    </tr>
                    <?php endif ?>
                    <?php foreach ($peoples as $people) : ?>
                    <tr>
                        <th><?= ++$start; ?></th>
                        <td><?= $people['name'] ?></td>
                        <td><?= $people['email'] ?></td>
                        <td>
                            <a href="" class="badge badge-warning">Detail</a>
                            <a href="" class="badge badge-succes">edit</a>
                            <a href="" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?= $this->pagination->create_links(); ?>

        </div>
    </div>

</div>