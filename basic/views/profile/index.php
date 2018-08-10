<html>
<head>
<!--    <link rel="stylesheet" type="text/css" href="css/style1.css" />-->
</head>

    <body>
    <?php

    use yii\helpers\Html;

    $this->title = 'My profile';
    ?>
    <br/>
        <div class="row">
            <div class="col-md-3">
                <br/>
                <?=Html::img('@web/upload/hi.gif', array("width" => "200px", "height" => "196px")); ?>
            </div>
            <div class="col-md-3">
                <div class="img">
                    <abbr title="Ảnh đại diện cụa tui.!!!" class="figure-caption text-left">
                        <?=Html::img('@web/'.$result->image,
                            array("width" => "323px", "height" => "306px"),
                            ['class' => 'img-face',
                                'alt' => '',
                            ]); ?>
                    </abbr>
                </div>
            </div>
            <div class="col-md-6">
                <a href="http://localhost/basic/web/trang-chu.html" style="text-decoration: none;">
                    <p class="a" align="right";>
                        My personal page
                    </p>
                </a>
                <a href="http://localhost/basic/web/gioi-thieu.html" style="text-decoration: none;">
                    <p class="b"; align="center";>
                        About me.!!!
                    </p>
                </a>
                <a href="http://localhost/basic/web/lien-he.html" style="text-decoration: none;">
                    <p class="c" align="center">
                        Contact me.!!!
                    </p>
                </a>
                <h3>Welcome to my page</h3>
                <h4>I love you not because of who you are, but because of who I am when I am with you.</h4>
            </div>
        </div>
    <br/>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div>
                    <p class="b">about me</p>
                    <p class="d">
                        Hi.! I'm ..... <br/>
                        <a href="http://localhost/basic/web/gioi-thieu.html" style="text-decoration: none;">read more about me</a>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <p class="b" align="center">my friends</p>
                    <p class="d" style="color: #00bf00">
                        The test of friendship is assistance in adversity, and that too unconditional assistance.
                        Friendship is the only cure for hatred, the only guarantee of peace...
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <?=Html::img('@web/upload/kiss.gif', array("width" => "100px", "height" => "96px")); ?>
            </div>
            <div class="col-md-6">
                <p class="b">
                    music and hobbies
                </p>
                <p class="d" style="text-indent: 1cm;">Link nhạc nè!!!</p>
                <a href="https://www.youtube.com/watch?v=K5p09EGkQuU" style="text-decoration: none;"><p style="color: #00b3ee; font-size: 1em;">"Phố vắng em rồi".</p></a>
                <a href="https://www.youtube.com/watch?v=K5p09EGkQuU" style="text-decoration: none;"><p style="color: blueviolet; font-size: 1em">Cũng là "Phố vắng em rồi" nhưng màu tím.</p></a>
            </div>
            <div class="col-md-3">
                <?=Html::img('@web/upload/kiss.gif', array("width" => "100px", "height" => "96px")); ?>
            </div>
        </div>
        <div class="row">
            <marquee><p>Thank for watch my page!!!</p></marquee>
        </div>
    </body>
</html>