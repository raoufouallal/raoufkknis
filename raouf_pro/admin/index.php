<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope online | اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">

    <style>
        /* أسلوب CSS لوضع النصوص على اليمين */
        input[type="text"] {
            direction: rtl;
            text-align: right;
        }
    </style>

</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>موقع تسويقي اونلاين</h2>
                <img src="logo.png" alt="logo" width="450px">
                <input type="text" name="name" placeholder="أدخل إسم المنتج">
                <br>
                <input type="text" name="price" placeholder="أدخل سعر المنتج">
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> اختيار صورة للمنتج</label>
                <button name='upload'>رفع المنتج ✅</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developed By Raouf</p>
    </center>
</body>
</html>