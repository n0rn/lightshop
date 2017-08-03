<!DOCTYPE html>
<html>
<head>
    <title>Lighting | Home</title>
    <link href="/template/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <!--theme style-->
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="/template/js/jquery.min.js"></script>

    <!--//theme style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- start menu -->
    <script src="/template/js/simpleCart.min.js"> </script>
    <!-- start menu -->
    <link href="/template/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/template/css/form.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="/template/js/memenu.js"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <!-- /start menu -->
</head>
<body>
<!--header-->
<script src="/template/js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: false,
        });
    });
</script>

<div class="header-top">
    <div class="header-bottom">
        <div class="logo">
            <h1><a href="/">Lighting</a></h1>
        </div>
        <!---->
        <div class="top-nav">
            <ul class="memenu skyblue"><li class="active"><a href="index.html">Home</a></li>
                <li class="grid"><a href="#">Category</a>
                    <div class="mepanel">
                        <div class="row">
                            <div class="col1 me-one">
                                <h4>Category</h4>
                                <ul>
                                    <?php foreach ($categories as $category) : ?>
                                    <li><a href="/category/<?php echo $category['id'];?>"><?php echo $category['name'];?></a></li>
                                    <?php endforeach ;?>
                                </ul>
                            </div>
                        </div>
                </li>
                <li class="grid"><a href="#">Accessories</a>
                    <div class="mepanel">
                        <div class="row">
                            <div class="col1 me-one">
                                <h4>Accessories</h4>
                                <ul>
                                    <li><a href="product.html">New Arrivals</a></li>
                                    <li><a href="product.html">Home</a></li>
                                    <li><a href="product.html">Decorates</a></li>
                                    <li><a href="product.html">Accessories</a></li>
                                    <li><a href="product.html">Kids</a></li>
                                    <li><a href="product.html">Login</a></li>
                                    <li><a href="product.html">Brands</a></li>
                                    <li><a href="product.html">My Shopping Bag</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="grid"><a href="/type/">Typo</a></li>
                <li class="grid"><a href="/contact/">Contact</a></li>
            </ul>
        </div>
        <!---->
        <div class="cart box_1">
            <a href="checkout.html">
                <div class="total">
                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            </a>
            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
        <!---->
    </div>
    <div class="clearfix"> </div>
</div>
<!---->