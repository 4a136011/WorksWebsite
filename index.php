<?php
    $title:Hellow word
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,700" rel="stylesheet">
        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
                list-style: none;
                font-family: 'Crimson+Pro', sans-serif;
            }
            .banner{
                width: 100%;
                height: 70vh;
                background-color: #ccc;
                background: linear-gradient(115deg, #7bf 50%, transparent 50%) center center / 100% 100%,
                                            url("https://picsum.photos/1200/600?random=10") right center / auto 100%;
            }
            .container{
                width: 100%;
                max-width: 1200px;
                height: 100%;
                margin: auto;
            }
            .banner-txt{
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: flex-start;
            }
            .banner-txt h1{
                font-size: 80px;
                border-bottom: 1px solid #333;
                font-weight: 900;
                padding-bottom: .3em;
                margin-bottom: .3em;
            }
            .banner-txt h1 small{
                display: block;
                font-size: 53px;
                font-weight: 700;
            }
            .banner-txt h2{
                font-size: 50px;
                font-weight: 700;
            }
            .banner-txt p{
                font-size: 30px;
                font-weight: 300;
            }
        </style>
    </head>
    <body>
        <div class="banner">
            <div class="container">
                <div class="banner-txt">
                    <h1>
                        Hellow word!
                        <small>
                            Works
                        </small>
                    </h1>
                    <h2>
                        Test
                    </h2>
                    <p>Test</p>
                </div>
            </div>
        </div>
    </body>
</html>