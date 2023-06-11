<?php
include "headercart.php"
?>
<?php
if (isset($_GET['id']) || isset($_SESSION['last_id'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else if (isset($_SESSION['last_id'])) {
        $id = $_SESSION['last_id'];
    }
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]++;
    } else {
        $_SESSION['cart'][$id] = 1;
    }
    if (!isset($_SESSION['id'][$id])) {
        $_SESSION['id'][$id] = $id;
    }
    $_SESSION['id'] = $_GET['id'];
}
$total_price = 0;
$getAll = $product->getAllProducts();
if ($_SESSION['cart'] == null) :
?>
    <div class="container" style="text-align: center; padding: 150px;">
        <h1>YOUR CART IS EMPTY!</h1>      
        <a class="primary-btn cta-btn" href="index.php">Shop now</a>
    </div>
    <?php
else :
    if (isset($_SESSION['cart'])) :
    ?>
        <div class="container">
            <h1 style="padding: 15px;">YOUR CART DETAILS</h1>
            <table border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <th style="text-align: center;">Image</th>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Quantity</th>
                    <th style="text-align: center;">Price</th>
                    <th style="text-align: center;">Action</th>
                </tr>
                <?php foreach ($_SESSION['cart'] as $key => $value) :
                    foreach ($getAll as $p) :
                        if ($p['id'] == $key) :
                ?>
                            <tr>
                                <td><img src="./img/<?php echo $p['image'] ?>" alt="" style="height: 100px;"></td>
                                <td><?php echo $p['name'] ?></td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="changequality.php?id=<?php echo $key ?>&control=1"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $_SESSION['cart'][$key] ?>" autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href="changequality.php?id=<?php echo $key ?>&control=2"> - </a>
                                    </div>
                                </td>
                                <td  style="color: red;"><?php echo number_format($p['price']) ?> VNĐ</td>
                                <td><a href="delete.php?id=<?php echo $key ?>" target="_self">Delete</a></td>
                                <?php $total_price += ($p['price'] * $value); ?>
                            </tr>
                <?php endif;
                    endforeach;
                endforeach; ?>
            </table>
            <div style="padding-top: 30px;">
                <strong>
                    <td>TOTAL:  <?php echo number_format($total_price) ?> VNĐ</td>
                </strong>
            </div>
            <br>
            <a class="primary-btn order-submit" href="delete.php">Delete All</a>
            <a class="primary-btn order-submit" href="checkout.php">Checkout</a>
        </div>

<?php endif;
endif; ?>