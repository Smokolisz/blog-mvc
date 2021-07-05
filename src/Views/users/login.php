<div class="container py-5">
    <form method="POST" action="/logowanie" class="mx-auto px-4 pt-5 pb-5 border rounded" style="width: 400px;">
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="jan.kowalski@gmail.com">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Hasło</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="********">
            </div>
        </div>
        <?php
        if(isset($_SESSION['loginErr']) && $_SESSION['loginErr'] != '') {
            echo '<p class="text-danger pt-2">'.$_SESSION['loginErr'].'</p>';
            $_SESSION['loginErr'] = '';
        }
        ?>
        <div>
            <button type="submit" class="btn btn-primary mx-auto d-block">Zaloguj się</button>
        </div>
    </form>
</div>