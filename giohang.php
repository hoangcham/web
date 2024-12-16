<?php
session_start();
require_once("ketnoi.php");



if (!isset($_SESSION["giohang"]))  $_SESSION["giohang"] = [];


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['namepr']) && isset($_POST['phone']) && isset($_POST['address'])) {
    $name = $conn->real_escape_string($_POST['namepr']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);

    foreach ($_SESSION['giohang'] as $sp) {
        $product_name = $conn->real_escape_string($sp[1]);
        $product_price = $sp[2];
        $product_quantity = $sp[3];
        
        $sql_order = "INSERT INTO shop_dp (namepr, phone, addres, product_name, product_price, product_quantity) 
                      VALUES ('$name', '$phone', '$address', '$product_name', '$product_price', '$product_quantity')";
                    mysqli_query($conn, $sql_order);
    }

  
    $_SESSION['giohang'] = [];
    echo "Đơn hàng của bạn đã được ghi nhận.";
}
?>
<?php
if (!isset($_SESSION["giohang"]))  $_SESSION["giohang"]=[];
if(isset($_POST['addcart'])&&($_POST['addcart'])){
    $hinh=$_POST['hinh'];
    $ten=$_POST['tensp'];
    $gia=$_POST['gia'];
    $soluong=$_POST['soluong'];
    $sp =[$hinh,$ten,$gia,$soluong];
    $_SESSION['giohang'][]=$sp;
    
   
}
if (isset($_POST['delcart']) && ($_POST['delcart'])) {
    $id = $_POST['id'];
    if (isset($_SESSION['giohang'][$id])) {
        unset($_SESSION['giohang'][$id]);
        $_SESSION['giohang'] = array_values($_SESSION['giohang']); 
    }
}
function showgiohang() {
    $total = 0; 
    if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            echo '<div class="cart-item">';
            echo $itemNumber = $i + 1;
            $product_price = $_SESSION['giohang'][$i][2]; 
            $product_quantity = $_SESSION['giohang'][$i][3]; 
            $item_total = $product_price * $product_quantity; 
            $total += $item_total; 

            echo ' <img src="' . $_SESSION['giohang'][$i][0] . '" alt=""><br>';
            echo 'Tên sản phẩm: ' . htmlspecialchars($_SESSION['giohang'][$i][1]) . '<br>';
            echo 'Giá: $' . number_format($product_price, 2) . '<br>';
            echo 'Số lượng: ' . $product_quantity . '<br>';
            echo 'Tổng: $' . number_format($item_total, 2) . '<br>';

            echo '<form action="" method="post">';
            echo '<input type="hidden" name="id" value="' . $i . '">';
            echo '<button type="submit" name="delcart" value="1">Xóa</button>';
            echo '</form>';
            echo '</div><br>';
        }
        echo '<div class="total-price">';
        echo 'Tổng tiền giỏ hàng: $' . number_format($total, 2); 
        echo '</div>';
    } else {
        echo "Giỏ hàng của bạn đang trống.";
    }
}

?>

<!DOCTYPE html>  
<html lang="vi">
    <link rel="stylesheet" href="./assets/css/giohang.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng của bạn</title>
</head>
<body>
    <h1  >Giỏ hàng của bạn</h1>
    <?php showgiohang(); ?>
    <form action="" method="post">
        <input type="text" name="namepr" id="" placeholder="Tên Người Nhận">
        <input type="text" name="phone" id="" placeholder="số điện thoại người nhận">
        <input type="text" name="address" placeholder="địa chỉ người nhận">
    <button type="submit"> Mua Hàng</button>
    <a style="text-align: center;" href="aosomi.php">Tiếp tục mua sắm</a>

    </form>
</body>
</html>