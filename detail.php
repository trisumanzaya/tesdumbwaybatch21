<?php
require 'functions.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
$data = query("SELECT NPSN,name_school,address,logo_school,school_level,status_school,user_id, user.name, user.email FROM school_tb 
JOIN user 
ON user.id=school_tb.user_id
                    WHERE school_tb.id=$id;")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
    *{
        padding: 0;
        margin: 0;
    }
    a {
        text-decoration: none;
    }
    .cover-img{
        min-height: 454px;
        background-image: url('https://image.freepik.com/free-vector/happy-tiny-people-listening-spiritual-music_74855-5870.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .navigation{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .back{
        background-color: #ffffff;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin: 20px;
    }
    .back img{
        padding:18px 19px;
    }
    .rectangle{
        position: absolute;
        background-size: contain;
        width: 200px;
        height: 288.81px;
        left: 1100px;
        top: 253px;
        border-radius: 10px;
    }
    .detailbook{
        display: flex;
        flex-direction: column;
        max-width: 850px;
        margin-top:20px;
        margin-left: 50px;
    }
    .detailbook a{
        background-color: #FBCC38;
        color: white;
        border: none;
        width: 95px;
        height: 30px;
        padding-top: 8px;
        text-align: center;
        border-radius: 20px;
        font-size: 20px;
    }
    .detailhead{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .title-book{
        display: flex;
        flex-direction: column;
    }

    .title-book h1{
        font-size: 50px;
        line-height: 65px;
        height: 65px;
    }
    .title-book h5{
        font-size: 20px;    
    }

    .detailhead h3{
        font-size: 30px;
        color: #99D815;
        margin-top:-30px;
    }

    .detailbook p{
        font-size: 20px;
        line-height: 26px;
        margin-top: 44px;
        width: 824px;
        height: 342px;
    }
    </style>
</head>
<body class="container-details">
    <header class="cover-img">
        <header class="navigation">
            <div class="back">
                <a href="./index.html">
                    <img src="https://i.ibb.co/GnGXBMC/back.jpg" alt="back" border="0">
                </a>
            </div>
        </header>
    </header>
    <img src=<?= $data['logo_school'];?> class="rectangle" >
    </div>
    <section class="detailbook">
        <a href="#"><?=$data['status_school'];?></a>
        <div class="detailhead">
            <div class="title-book">
                <h1><?= $data['name_school']; ?></h1>
                <h5><?= 'akreditas: '. $data['school_level']; ?></h5>
            </div>        
        </div>
        <p>
        <?= $data['address']; ?>
        </p>
    </section>
</body>
</html>

