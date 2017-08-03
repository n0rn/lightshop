<?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="product">
        <div class="container">
            <div class="product-price1">
                <div class="top-sing">
                    <div class="col-md-7 single-top">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="/images/si.jpg">
                                    <div class="thumb-image"> <img src="/template/images/si.jpg" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                </li>
                                <li data-thumb="/images/si2.jpg">
                                    <div class="thumb-image"> <img src="/template/images/si2.jpg" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                </li>
                                <li data-thumb="/images/si3.jpg">
                                    <div class="thumb-image"> <img src="/template/images/si3.jpg" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                </li>
                            </ul>
                        </div>
                        <script src="/template/js/imagezoom.js"></script>
                        <script defer src="/template/js/jquery.flexslider.js"></script>
                        <script>
                            // Can also be used with $(document).ready()
                            $(window).load(function() {
                                $('.flexslider').flexslider({
                                    animation: "slide",
                                    controlNav: "thumbnails"
                                });
                            });
                        </script>

                    </div>
                    <div class="col-md-5 single-top-in simpleCart_shelfItem">
                        <div class="single-para ">
                            <h4>Lighting Wood Carved Mop Glass Double Wall Lamp </h4>
                            <h5 class="item_price">$ 500.00</h5>
                            <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Vivamus porttitor tincidunt elementum nisi a, euismod rhoncus urna. Curabitur scelerisque vulputate diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
                            <div class="prdt-info-grid">
                                <ul>
                                    <li>- Brand : Fos Lighting</li>
                                    <li>- Dimensions : (LXBXH) in cms of...</li>
                                    <li>- Color : Brown</li>
                                    <li>- Material : Wood</li>
                                </ul>
                            </div>
                            <div class="check">
                                <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Enter pin code for delivery &amp; availability</p>
                                <form class="navbar-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Pin code">
                                    </div>
                                    <button type="submit" class="btn btn-default">Verify</button>
                                </form>
                            </div>
                            <a href="#" class="add-cart item_add">ADD TO CART</a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="bottom-prdt">
                <div class="btm-grid-sec">
                    <div class="col-md-2 btm-grid">
                        <a href="product.html">
                            <img src="/template/images/p3.jpg" alt=""/>
                            <h4>Product#1</h4>
                            <span>$1200</span></a>
                    </div>
                    <div class="col-md-2 btm-grid">
                        <a href="product.html">
                            <img src="/template/images/p10.jpg" alt=""/>
                            <h4>Product#1</h4>
                            <span>$700</span></a>
                    </div>
                    <div class="col-md-2 btm-grid">
                        <a href="product.html">
                            <img src="/template/images/p5.jpg" alt=""/>
                            <h4>Product#1</h4>
                            <span>$1300</span></a>
                    </div>
                    <div class="col-md-2 btm-grid">
                        <a href="product.html">
                            <img src="/template/images/p4.jpg" alt=""/>
                            <h4>Product#1</h4>
                            <span>$9000</span></a>
                    </div>
                    <div class="col-md-2 btm-grid">
                        <a href="product.html">
                            <img src="/template/images/p2.jpg" alt=""/>
                            <h4>Product#1</h4>
                            <span>$450</span></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>