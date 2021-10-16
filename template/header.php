<header class="border-bottom">
    <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 ">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <strong class="h2 text-primary text-opacity-75 mx-5">eShop</strong>
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <?php if (!empty($_SESSION)):?>
                <?php if ($_SESSION['user']['role'] == 1):?>
                    <li><a href="/admin/goods/" class="nav-link px-2 link-dark">Товары</a></li>
                    <li><a href="/admin/orders/" class="nav-link px-2 link-dark">Заказы</a></li>
                    <li><a href="/admin/users/" class="nav-link px-2 link-dark">Пользователи</a></li>
                    <li><a href="/admin/user/" class="nav-link px-2 link-secondary">Профиль</a></li>
                <?php elseif ($_SESSION['user']['role'] == 2):?>
                    <li><a href="/admin/user/" class="nav-link px-2 link-secondary">Профиль</a></li>
                <?php endif;?>
            <?php endif;?>
        </ul>
        <div class="col-md-4 text-end">
            <a href="/layouts/cart/" class="btn btn-outline-secondary me-2">Корзина</a>
            <?php if (!empty($_SESSION)):?>
                <a href="/controllers/auth.php?logout=yes" class="btn btn-secondary">Выйти</a>
            <?php else:?>
                <a href="/layouts/auth/login/" class="btn btn-secondary">Войти</a>
            <?php endif;?>
        </div>
    </div>
</header>
