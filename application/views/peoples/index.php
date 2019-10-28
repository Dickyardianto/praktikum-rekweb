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
            <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">Data Peoples
                        <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endif; ?>
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
                            <a href="<?= base_url(); ?>peoples/detailPeoples/<?= $people['id']; ?>"
                                class="badge badge-warning">Detail</a>
                            <a href="<?= base_url(); ?>peoples/ubah/<?= $people['id']; ?>"
                                class="badge badge-success">edit</a>
                            <a href="<?= base_url(); ?>peoples/hapus/<?= $people['id']; ?>" class="badge badge-danger"
                                onclick="return confirm('Apakah Yakin ?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?= $this->pagination->create_links(); ?>

        </div>
    </div>

</div>