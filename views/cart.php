<?php if (!empty($_COOKIE['cart'])):?>
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <form action="../../controllers/order.php" method="POST">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <?php foreach ($cart as $key => $value):?>
                            <?php $good = getGood($value['id'], $connect);?>
                                <li class="list-group-item">
                                    <p class="mb-1">Товар: <?= $good['title']?><input type="hidden" name="id_good[]" value="<?= $good['id']?>"></p>
                                    <p class="mb-1">Количество: <?= $value['count']?> шт.<input type="hidden" name="count[]" value="<?= $value['count']?>"></p>
                                    <p class="mb-1">Сумма: <?= number_format($value['count'] * $good['price'], 2)?> ₽</p>
                                    <div class="text-center">
                                        <a href="/controllers/cart.php?sign=plus&id_cart=<?= $value['id']?>" class="badge rounded-pill bg-secondary text-decoration-none text-light">&plus;</a>

                                        <a href="/controllers/cart.php?sign=minus&id_cart=<?= $value['id']?>" class="badge rounded-pill bg-secondary text-decoration-none text-light">&minus;</a>
                                    </div>
                                    <?php $cost += $value['count'] * $good['price']?>
                                </li>
                        <?php endforeach;?>
                    </ul>
                    <div class="card-footer text-muted text-center">Общая сумма заказа: <strong class="text-primary"><?= number_format($cost,2)?> ₽</strong></div>
                </div>
                <div class="card mt-3 p-2">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ФИО</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Адрес доставки</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" name="address" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">Телефон</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput3" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput4" name="email" required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary m-2" name="order" type="submit">Заказать</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php else:?>
    <div class="alert alert-primary text-center mt-3" role="alert">
        Корзина пуста!
    </div>
<?php endif;?>
