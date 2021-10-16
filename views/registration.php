<?php if ($message == 'success'):?>
    <div class="alert alert-success text-center" role="alert">
        Вы успешно зарегистрированы! <a href="../login/" class="">Войдите</a> на сайт!
    </div>
<?php elseif ($message == 'error'):?>
    <div class="alert alert-danger text-center" role="alert">
        Пользователь с такой почтой уже создан! <a href="../login/" class="">Войдите</a> на сайт!
    </div>
<?php endif;?>
<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card p-3">
            <form action="" method="POST">
                <?php if (!empty($_COOKIE['user'])):?>
                    <div class="row mb-3">
                        <label for="inputName3" class="col-sm-3 col-form-label">Имя:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputName3" name="name" value="<?= $_COOKIE['user']['name']?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" name="email" value="<?= $_COOKIE['user']['email']?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Пароль:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" name="password" value="<?= $_COOKIE['user']['password']?>" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="registration">Зарегистрироваться</button>
                    <a href="../login/" class="btn btn-outline-primary">Войти</a>
                <?php else:?>
                    <div class="row mb-3">
                        <label for="inputName3" class="col-sm-3 col-form-label">Имя:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputName3" name="name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" name="email" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Пароль:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" name="password" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="registration">Зарегистрироваться</button>
                    <a href="../login/" class="btn btn-outline-primary">Войти</a>
                <?php endif;?>
            </form>
        </div>   
    </div>
</div>
