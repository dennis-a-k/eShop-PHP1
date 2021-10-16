<?php if (!empty($_SESSION)):?>
    <h2 class="text-secondary">
        <?php if  ($user['role'] == 1):?>
            Администратор сайта - <span class="text-success"><?= $user['name']?></span>
        <?php elseif ($user['role'] == 2):?>
            Пользователь - <span class="text-success"><?= $user['name']?></span>
        <?php endif;?>
    </h2>
    <div class="card mb-3 p-3">
        <form action="../../controllers/user.php?id=<?= $user['id']?>" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Измените или введите имя:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?= $user['name']?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Измените или введите почту:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="<?= $user['email']?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Измените или введите пароль:</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" name="password" required>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary m-2" name="edit" type="submit">Редактировать</button>
            </div>
        </form>
    </div>
    <?php if (!empty($orders)):?>
        <div class="card p-3">
            <?php foreach ($orders as $key => $order):?>
                <dl class="row p-3 border">
                    <dt class="col-lg-3">
                        <p><?= $order['user']['name']?></p>
                        <p class="text-secondary text-center"><em><?= $order['user']['date']?></em></p> 
                    </dt>
                    
                    <dd class="col-lg-5">
                        <?php foreach ($order['goods'] as $key => $count):?>
                            <?php $good = getGood($key, $connect);?>
                                <p class="text-center mt-3"><span class="text-secondary">Товар:</span> <?= $good['title']?> &times; <?= $count?> шт. = <?= number_format($count * $good['price'], 2)?> ₽</p>
                        <?php endforeach;?>
                    </dd>
                    
                    <dd class="col-lg-4">
                        <p class="m-1"><span class="text-secondary">Адрес:</span> <?= $order['user']['address']?></p>
                        <p class="m-1"><span class="text-secondary">Телефон:</span> <?= $order['user']['phone']?></p>
                        <p class="m-1"><span class="text-secondary">Почта:</span> <?= $order['user']['email']?></p>
                    </dd>
                </dl>
            <?php endforeach;?>
        </div>
    <?php else:?>
        <div class="alert alert-danger text-center" role="alert">
            На данный email заказов нет!
        </div>
    <?php endif;?>
<?php else:?>
    <div class="alert alert-danger text-center" role="alert">
        Пользователь не найден!
    </div>
<?php endif;?>
