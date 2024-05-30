<?php include './templates/top.php'; ?>

<form method="POST" action="/login">
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="login" name="login" class="form-control" />
        <label class="form-label">Login</label>
    </div>

    <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" name="password" class="form-control" />
        <label class="form-label">Password</label>
    </div>

    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>
</form>

<?php include './templates/footer.php'; ?>