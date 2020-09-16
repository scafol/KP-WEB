<div class="container mt-3">

    <h1>All Member</h1>

    <div class="row">
        <div class="col">

            <form action="<?= base_url('/'); ?>" method="post" class="d-flex" style="width: 40%;">
                <div class="input-group">
                    <input name="keyword" type="number" class="form-control" placeholder="Search by Album_id">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit" name="submit">Search</button>
                    </div>
                </div>
            </form>

            <table class="table table-hover my-3">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Album_id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $data) : ?>
                        <tr>
                            <th class="id" scope="row"><?= $data['id']; ?></th>
                            <td class="text-center"><?= $data['albumId']; ?></td>
                            <td><?= $data['title']; ?></td>
                            <td><a href="<?= base_url('home/detail/' . $data['id']); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>