<?php include './templates/top.php'; ?>
    <div class="container border">
        <div class="row p-2">
            <div class="col-sm fw-bold">
                Add new category
            </div>
            <div class="col-sm text-end">
                <a href="/account">
                    <button type="text" class="btn btn-primary btn-block">Back</button>
                </a>
            </div>
        </div>
    </div>

    <form method="POST" action="/account/add_category">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="title" class="form-control" required />
                    </td>
                    <td>
                        <textarea class="form-control" name="description" rows="3" required></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>

<?php include './templates/footer.php';