<?php include './templates/top.php'; ?>
    <div class="container border">
        <div class="row p-2">
            <div class="col-sm fw-bold">
                My list of categories
            </div>
            <div class="col-sm text-end">
                <a href="/account/add_category">
                    <button type="text" class="btn btn-primary btn-block">Add new</button>
                </a>
                <?php if (isset($_SESSION['categories'])) { ?>
                    <a href="/account/delete_all_category">
                        <button type="text" class="btn btn-danger btn-block">Delete all</button>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php if (isset($_SESSION['categories'])) { ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php
            $categories = $_SESSION['categories'];
            $c = 0;
            foreach ($categories as $i => $value) { $c++; ?>
                <tr>
                    <th scope="row"><?= $c; ?></th>
                    <td><?= $value[0]; ?></td>
                    <td><?= $value[1]; ?></td>
                    <td style="width: 150px; text-align: center;">
                        <a href="/account/edit_category/?id=<?= $i ?>">
                            <button type="text" class="btn-sm btn-info btn-block">Edit</button>
                        </a>
                        <a href="/account/delete_category/?id=<?= $i ?>">
                            <button type="text" class="btn-sm btn-danger btn-block">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
    } else {
        echo '<div class="p-5 text-center">No categories yet.</div>';
    }
    ?>

<?php include './templates/footer.php';