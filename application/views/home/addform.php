<div class="container mt-3">
    <h1>Form</h1>

    <form method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
            <!-- <small class="form-text text-danger">form error here soon</small> -->
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" name="body" class="form-control" id="body" placeholder="Enter body">
            <!-- <small class="form-text text-danger">form error here soon</small> -->
        </div>
        <div class="form-group">
            <label for="user_id">User Id</label>
            <input type="number" name="userId" class="form-control" id="user_id" placeholder="Enter user_id">
            <!-- <small class="form-text text-danger">form error here soon</small> -->
        </div>
        <button id="submit" type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php if ($data) : ?>
        <table class="table table-hover my-3 text-left">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">User_id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="id" scope="row"><?= $data['id']; ?></th>
                    <td><?= $data['userId']; ?></td>
                    <td><?= $data['title']; ?></td>
                    <td><?= $data['body']; ?></td>
                </tr>
            </tbody>
        </table>
    <?php endif; ?>
</div>