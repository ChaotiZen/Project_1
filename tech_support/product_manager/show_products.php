<?php
/**
 * File name: show_products.php
 * Project : project_start
 * User: ChaotiZen | Trendon Ellis
 * Date: 6/8/2017
 * Using PhpStorm.
 * Notes:
 */

include '../view/header.php' ?>

<div id='main'>
    <table>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Version</th>
            <th>Release Date</th>
            <th><!-- Column for the remove button, doesn't need a header--></th>
        </tr>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['version']; ?></td>
                <td><?php echo $product['releaseDate']; ?></td>
                <td>
                    <form action="." method="post">
                        <input type="hidden" name="action"
                               value="delete_product" />
                        <input type="hidden" name="product_code"
                               value="<?php echo $product['productCode']; ?>" />
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <nav>
        <ul>
            <li><a href='add_product.php'>Add Product</a></li>
        </ul>
    </nav>
</div>

<?php include '../view/footer.php' ?>

