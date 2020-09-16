<div class="container mt-3">

    <h1>All Member</h1>

    <div class="row">
        <div class="col">

            <form action="<?= base_url('/'); ?>" method="post" class="d-flex" style="width: 100%;">
                <div class="input-group">
                    <input name="keyword" type="text" class="form-control" placeholder="Input User_id">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit" name="submit">Search</button>
                    </div>
                </div>
            </form>

            <table class="table table-hover my-3">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Body</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $data) : ?>
                        <tr>
                            <th scope="row"><?= $data['id']; ?></th>
                            <td class="text-center"><?= $data['userId']; ?></td>
                            <td><?= $data['title']; ?></td>
                            <td><?= $data['body']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>