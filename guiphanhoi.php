<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biểu Mẫu Phản Hồi Khách Hàng</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .feedback-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        
        .feedback-form h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 600;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: #555;
        }
        
        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            color: #333;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus,
        select:focus {
            border-color: #4a90e2;
            background-color: #fff;
            outline: none;
        }
        
        textarea {
            resize: vertical;
            height: 100px;
        }
        
        .rating-group {
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        
        .rating-group input {
            display: none;
        }
        
        .rating-group label {
            cursor: pointer;
            color: #ddd;
            font-size: 24px;
            transition: color 0.3s;
        }
        
        .rating-group input:checked ~ label,
        .rating-group input:hover ~ label,
        .rating-group label:hover ~ label {
            color: #FFD700;
        }
        
        .submit-btn {
            display: inline-block;
            width: 100%;
            padding: 12px;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-align: center;
        }
        
        .submit-btn:hover {
            background-color: #357ab8;
        }
        
        .form-footer {
            text-align: center;
            font-size: 14px;
            color: #888;
            margin-top: 10px;
        }
        
        .form-footer a {
            color: #4a90e2;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="feedback-form">
        <h2>Gửi Phản Hồi Của Bạn</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input type="text" id="name" name="name" placeholder="Nhập họ và tên của bạn" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>
            </div>
            <div class="form-group">
                <label for="product">Sản phẩm đã mua:</label>
                <input type="text" id="product" name="product" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
                <label>Đánh giá của bạn:</label>
                <div class="rating-group">
                    <input type="radio" id="rating-1" name="rating" value="1">
                    <label for="rating-1">&#9733;</label>
                    <input type="radio" id="rating-2" name="rating" value="2">
                    <label for="rating-2">&#9733;</label>
                    <input type="radio" id="rating-3" name="rating" value="3">
                    <label for="rating-3">&#9733;</label>
                    <input type="radio" id="rating-4" name="rating" value="4">
                    <label for="rating-4">&#9733;</label>
                    <input type="radio" id="rating-5" name="rating" value="5" checked>
                    <label for="rating-5">&#9733;</label>
                </div>
            </div>
            <div class="form-group">
                <label for="feedback">Phản hồi:</label>
                <textarea id="feedback" name="feedback" placeholder="Viết phản hồi của bạn tại đây..." required></textarea>
            </div>
            <button type="submit" class="submit-btn">Gửi Phản Hồi</button>
            <div class="form-footer">
                <p>Cảm ơn bạn đã giúp chúng tôi cải thiện Ivymoda ngày càng tốt hơn</p>
            </div>
        </form>
        <?php
require_once("ketnoi.php");
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['product'])&&isset($_POST['feedback'])){
$name = $_POST['name'];
$email = $_POST['email'];
$product = $_POST['product'];
$feedback= $_POST['feedback'];

$sql="INSERT INTO feedback(name,email,product,feedback)VALUE('$name','$email','$product','$feedback')";
mysqli_query($conn,$sql);

}
?>
    </div>
</body>
</html>

