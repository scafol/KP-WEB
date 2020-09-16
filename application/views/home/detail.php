<div class="container my-3">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?= $data['url']; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $data['title']; ?></h5>
            <form action="" method="POST" class="d-flex">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <a class="btn btn-secondary btn-sm mr-3" href="<?= base_url(); ?>">Back</a>
                <button type="submit" name="btnDel" class="btn btn-danger btn-sm mr-3">Delete</button>
                <button type="submit" name="btnEdit" class="btn btn-primary btn-sm mr-3">Edit</button>
            </form>
        </div>
    </div>
</div>