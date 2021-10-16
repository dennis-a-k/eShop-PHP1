<?php if (!empty($orders)):?>
    <div class="card p-3">
        <?php foreach ($orders as $key => $order):?>
            <dl class="row p-3 border">
                <dt class="col-lg-2">
                    <p><?= $order['user']['name']?></p>
                    <?php if ($order['user']['completed'] == 0):?>
                        <a href="../../controllers/orders.php?user=<?= $order['user']['id_user']?>" class="alert alert-success text-success text-decoration-none p-2">
                            Оформить!
                        </a>
                    <?php elseif ($order['user']['completed'] == 1):?>
                        <span class="alert alert-warning text-warning text-decoration-none p-2">Выполнен!</span>
                    <?php endif;?>
                </dt>
                
                <dd class="col-lg-5">
                    <?php foreach ($order['goods'] as $key => $count):?>
                        <?php $good = getGood($key, $connect);?>
                            <p class="text-center mt-3"><span class="text-secondary">Товар:</span> <?= $good['title']?> &times; <?= $count?> шт. = <?= number_format($count * $good['price'], 2)?> ₽</p>
                    <?php endforeach;?>  
                    <p class="text-secondary text-center"><em><?= $order['user']['date']?></em></p>  
                </dd>
                
                <dd class="col-lg-5">
                    <p class="m-1"><span class="text-secondary">Адрес:</span> <?= $order['user']['address']?></p>
                    <p class="m-1"><span class="text-secondary">Телефон:</span> <?= $order['user']['phone']?></p>
                    <p class="m-1"><span class="text-secondary">Почта:</span> <?= $order['user']['email']?></p>
                </dd>
            </dl>
        <?php endforeach;?>
    </div>
<?php else:?>
    <div class="alert alert-danger text-center" role="alert">
        Заказов нет!
    </div>
<?php endif;?>
