<?php if (!empty($_SESSION)):?>
    <div class="alert alert-success text-center" role="alert">
        Вы авторизированы!
    </div>
<?php else:?>
    <?php if ($error):?>
        <div class="alert alert-danger text-center" role="alert">
            Неверный логин или пароль!
        </div>
    <?php endif;?>
    <div class="alert alert-warning text-center" role="alert">
        Для входа под учеткой Администратора введите<br>Email: admin@admin.ru, пароль: admin
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card p-3">
                <form action="" method="POST">
                    <?php if (!empty($_COOKIE['user'])):?>
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
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="remember">
                                    <label class="form-check-label" for="gridCheck1">Запомнить меня</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Войти</button>
                        <a href="../registration/" class="btn btn-outline-primary">Регистрация</a>
                    <?php else:?>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Email:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" name="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Пароль:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" name="password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="remember">
                                    <label class="form-check-label" for="gridCheck1">Запомнить меня</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Войти</button>
                        <a href="../registration/" class="btn btn-outline-primary">Регистрация</a>
                    <?php endif;?>
                </form>
            </div>
        </div>
    </div>
<?php endif;?>
