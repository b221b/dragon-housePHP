<style>
    .product-block {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 20px;
        width: 250px;
        display: inline-block;
    }

    .product-image {
        width: 100%;
        height: 150px;
        overflow: hidden;
        border-radius: 10px 10px 0 0;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-info {
        padding: 20px;
    }

    .product-info h2 {
        font-size: 18px;
        margin-top: 0;
        color: #333;
    }

    .product-info p {
        font-size: 14px;
        color: #666;
    }

    .product-info .label {
        font-weight: bold;
        color: #337ab7;
    }

    .product-info .value {
        font-size: 16px;
        color: #333;
    }

    hr {
        border-top: 2px solid #ccc;
        margin: 10px 0;
    }
</style>

<?php
include_once 'db.php';

if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];

    $sql_products = "SELECT Name, Opisanie, Price, Kolichestvo FROM tovar WHERE CategoryID = " . $category_id;
    $result_products = mysqli_query($conn, $sql_products);

    if (mysqli_num_rows($result_products) > 0) {
        while ($row_product = mysqli_fetch_assoc($result_products)) {
?>
            <div class="product-block">
                <div class="product-info">
                    <h2><?php echo $row_product['Name']; ?></h2>
                    <p><span class="label">Описание:</span> <span class="value"><?php echo $row_product['Opisanie']; ?></span></p>
                    <p><span class="label">Цена:</span> <span class="value"><?php echo $row_product['Price']; ?> rub.</span></p>
                    <p><span class="label">Количество:</span> <span class="value"><?php echo $row_product['Kolichestvo']; ?></span></p>
                </div>
            </div>
<?php
        }
    } else {
        echo "No products found for this category.";
    }
}

mysqli_close($conn);
?>