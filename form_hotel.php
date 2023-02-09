<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style_hotel.css">
    <title>Hotel of TienPM</title>
</head>
<style>
    :root {
    --primary-color: #ffdead;
    --foreign-color: #1e90ff;
    }

    body {
        /* background-image: URL(https://images.hdqwalls.com/wallpapers/garena-free-fire-z4.jpg); */
        background: linear-gradient(85deg, aqua, #f0f);
        height: 100%;
        width: 100%;
        font-family: "Inter", sans-serif;
        display: flex;
        justify-content: center;  
    }

    form {
        width: 800px;
        height: 420px;
        background-image: URL(https://www.gratistodo.com/wp-content/uploads/2017/02/Casas-Modernas-15-800x423.jpg);
        margin-top: 50px;
        border: 1px solid grey;
        border-radius: 10px;
    }

    .form-content {
        padding-left: 50px;
        display: flex ;
        flex-direction: column;
        gap: 10px;
    }

    h1 {
        text-align: center;
        text-shadow:4px 4px 8px red;
        color: var(--primary-color);
        padding: 10px;
        margin-top: 10px;
    }

    span {
        color: var(--foreign-color);
    }

    select{
        padding-left: 10px;
        border-radius: 5px;
        background: #CCCCCC;
    }

    input{
        padding-left: 10px;
        border-radius: 5px;
        background: #EEEEEE;
        height: 18px;
    }

    label {
        color: #FFFFFF;
        font-size: 18px;
        font-weight: 600;
    }

    button {
        color: orange;
        font-weight: 800;
        padding-right:10px;
        border-radius: 5px;
        background: #eee;
        margin-right: 100px;
    }

    .checkbox {
        color: var(--primary-color);
        font-size: 16px;
        font-weight: 700;
        padding-left: 80px;
        margin-top: -20px;
    }

    .footer {
        margin-left: 380px;
        margin-top: -340px;
    }

    .footer {
        padding-left: 50px;
        display: flex ;
        flex-direction: column;
        gap: 10px;
    }

    h2 {
        width: 250px;
        height: 33px;
        color: yellow;
        font-weight: 900;
        font-size: 22px;
        text-align: center;
    }

    .footer input {
        width: 80px;
        text-align: right;
        color: var(--primary-color);
        background: #777777;
    }

    .item-bill {
        color: aqua;
        font-weight: 700;
    }

    button:hover {
        background: #666666;
    }


</style>
<body>
    <?php
    ini_set('display_errors',0);
    $giat = $_POST["giat"];
    $an = $_POST["an"];
    $tam = $_POST["tam"];
    $tienAnThem = $_POST["anThem"];
    $loaiPhong = $_POST["loaiPhong"];
    $in = strtotime ($_POST["in"]);
    $out = strtotime ($_POST["out"]); 
    $soNgayThue = abs ($out - $in);
    $ngayTra = floor ($soNgayThue / (60*60*24)) * $loaiPhong;
    $service = $giat + $an + $tam;
    $total = $tienAnThem + $service + $loaiPhong + $ngayTra
    ?>

    <div class="container">
        <div class="left">
            <div class="header">
                <form action="form_hotel.php" method="post">
                    <div class="form-content">
                        <h1>THANH TOÁN MONEY<span> " KHÁCH SẠN "</span></h1>
                        <div class="item">
                            <label for="">Loại phòng: </label>
                            <select name="loaiPhong">
                                <option value="1000000">A</option>
                                <option value="800000">B</option>
                                <option value="500000">C</option>
                            </select>
                        </div>
                        <div class="item">
                            <label for="">Check in: </label>
                            <input type = "date" name="in"/>
                        </div>
                        <div class="item">
                            <label for="">Check out: </label>
                            <input type = "date" name="out"/>
                        </div>
                        <div class="item">
                            <label for="">Tiền ăn: </label>
                            <input type="text" name="anThem" placeholder="Nhập số tiền ăn!" />
                        </div>
                        <div class="item-checkbox"> 
                            <label for="">Dịch vụ: </label>
                            <div class="checkbox">
                                <input type="checkbox" name="giat" value="30000"> Giặt là <br><br>
                                <input type="checkbox" name="an" value="500000"> Ăn buffe <br><br>
                                <input type="checkbox" name="tam" value="200000"> Tắm hơi <br><br>
                            </div>
                        </div>
                        <div class="item">
                            <button type="submit" onclick="alert('Cảm ơn quý khách! Đây là hóa đơn của bạn')">Ok</button>
                            <button type="cancel">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="footer">
                <h2>Your Bill</h2>
                <div class="item-bill">
                    <label for="">Type room:</label>
                    <input type="text" value = "<?php echo $loaiPhong ?>" readonly="true"> vnđ
                </div>
                <div class="item-bill">
                    <label for="">Rental hours:</label>
                    <input type="text" value = "<?php echo $ngayTra ?>" readonly="true"> vnđ
                </div>
                <div class="item-bill">
                    <label for="">Money for meal:</label>
                    <input type="text" value = "<?php echo $tienAnThem ?>" readonly="true"> vnđ
                </div>
                <div class="item-bill">
                    <label for="">Money for service:</label>
                    <input type="text" value = "<?php echo $service ?>" readonly="true"> vnđ
                </div>
                <div class="item-bill">
                    <label for="">Tatal:</label>
                    <input type="text" value = "<?php echo $total ?>" readonly="true"> vnđ
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>