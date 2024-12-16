<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f4f9;
    margin: 20px 20% 10px 20%;
    color: #333;
}

form {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 50px;
    padding: 30px;
    background-color: #fff;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    width: 80%;
    max-width: 1200px;
    transition: box-shadow 0.3s ease;
}


.product-image {
    width: 300px;
    height: 300px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px; 
    transition: transform 0.3s ease;
}

.product-image:hover {
    transform: scale(1.05); 
}

/* Phần thông tin sản phẩm */
.product-info {
    text-align: center;
    margin-bottom: 20px; 
}

.product-info h2 {
    font-size: 30px;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
}

.product-info .product-price {
    font-size: 24px;
    font-weight: 500;
    color: #e67e22;
    margin-top: 10px;
}

.product-info p {
    font-size: 16px;
    color: #777;
    margin-top: 20px;
}


.input-group {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    margin-top: 20px;
}

.input-group input[type="number"] {
    width: 60px;
    padding: 10px;
    font-size: 18px;
    border: 2px solid #e67e22;
    border-radius: 8px;
    transition: border-color 0.3s ease;
}

.input-group input[type="number"]:focus {
    border-color: #d35400;
    outline: none;
}

.btn__add-to-card {
    background-color: #e67e22;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    font-size: 18px;
    text-transform: uppercase;
    margin-left: 20px; 
    transition: background-color 0.3s ease, transform 0.3s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.btn__add-to-card:hover {
    background-color: #d35400;
    transform: translateY(-3px); 
}

.btn__add-to-card:active {
    transform: translateY(1px);
}


@media (max-width: 768px) {
    form {
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .product-image {
        width: 188px;
        height: 285px;
        margin-bottom: 20px;
    }

    .product-info {
        text-align: center;
    }

    .product-info h2 {
        font-size: 26px;
    }

    .product-price {
        font-size: 22px;
    }

    .btn__add-to-card {
        width: 100%;
        padding: 12px;
    }

   
    .input-group {
        flex-direction: column; 
        align-items: center;
        gap: 15px;
    }

    .input-group input[type="number"] {
        width: 100%; 
    }

    .btn__add-to-card {
        width: 100%;
        padding: 12px;
    }
}

    </style>
</head>
<body>
<form action="giohang.php" method="post">
<?php
if(isset($_POST['addcart']) && $_POST['addcart']){
    $hinh = $_POST['hinh'];
    $ten = $_POST['tensp'];
    $gia = $_POST['gia'];
    

    echo ' <img src="' . $hinh . '" alt="" class="product-image"><br>';
    echo 'Tên sản phẩm: ' . $ten . '<br>';
    echo '<br>';
    echo 'Giá: ' . number_format($gia) . ' VND<br>';
    echo '<br>';
    echo '<br>';

}
?>


<input type="number" name="soluong" min="1" value="1" id="">
<br>
<br>
<input class="btn btn__add-to-card" type="submit" name="addcart" value="Đặt hàng" id="">
<input type="hidden" name="hinh" value="<?php echo $hinh ?>">
<input type="hidden" name="tensp" value="<?php echo $ten ?>">
<input type="hidden" name="gia" value="<?php echo $gia ?>">



</form>

</body>
</html>