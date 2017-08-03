<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="slider">
      <div class="callbacks_container">
         <ul class="rslides" id="slider">
             <li>
                 <div class="banner1">                
                      <div class="banner-info">
                      <h3>Morbi lacus hendrerit efficitur.</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
                      </div>
                 </div>
             </li>
             <li>
                 <div class="banner2">
                     <div class="banner-info">
                     <h3>Phasellus elementum tincidunt.</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
                     </div>
                 </div>
             </li>
             <li>
                 <div class="banner3">
                 <div class="banner-info">
                 <h3>Maecenas interposuere volutpat.</h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
                 </div>
                 </div>
             </li>
          </ul>
      </div>
  </div>
<!---->
<script src="/template/js/bootstrap.js"> </script>

<div class="items">
     <div class="container">
         <div class="items-sec">
             <?php foreach ($latestProducts as $product): ?>
             <div class="col-md-3 feature-grid">
                 <a href="/product/<?php echo $product['id'];?>"><img src="/template/images/<?php echo $product['image'];?>" alt=""/>
                     <div class="arrival-info">
                         <h4><?php echo $product['name'];?></h4>
                         <p><?php echo $product['price'];?></p>
                         <a href="/cart/add/<?php echo $product['id'];?>" class="add-cart item_add">ADD TO CART</a>
                         <span class="pric1"><del><?php echo $product['offer'];?></del></span>
                         <span class="disc">[12% Off]</span>
                     </div>
                     <div class="viw">
                        <a href="/product/<?php echo $product['id'];?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                     </div>
                  </a>
             </div>
             <?php endforeach ;?>
             <div class="clearfix"></div>
         </div>
     </div>
</div>
<!---->
<div class="offers">
     <div class="container">
     <h3>End of Season Sale</h3>
     <div class="offer-grids">
         <div class="col-md-6 grid-left">
             <a href="#"><div class="offer-grid1">
                 <div class="ofr-pic">
                     <img src="/template/images/ofr2.jpeg" class="img-responsive" alt=""/>
                 </div>
                 <div class="ofr-pic-info">
                     <h4>Emergency Lights <br>& Led Bulds</h4>
                     <span>UP TO 60% OFF</span>
                     <p>Shop Now</p>
                 </div>
                 <div class="clearfix"></div>
             </div></a>
         </div>
         <div class="col-md-6 grid-right">
             <a href="#"><div class="offer-grid2">               
                 <div class="ofr-pic-info2">
                     <h4>Flat Discount</h4>
                     <span>UP TO 30% OFF</span>
                     <h5>Outdoor Gate Lights</h5>
                     <p>Shop Now</p>
                 </div>
                 <div class="ofr-pic2">
                     <img src="/template/images/ofr3.jpg" class="img-responsive" alt=""/>
                 </div>
                 <div class="clearfix"></div>
             </div></a>
         </div>
         <div class="clearfix"></div>
     </div>
     </div>
</div>
<!---->
<div class="subscribe">
     <div class="container">
         <h3>Newsletter</h3>
         <?php if ($result): ?>
                <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
            <?php else: ?>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                        <form action="" method="post">
                         <input type="text" class="text" name="userEmail" value="<?php echo $userEmail;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                         <input type="submit" name="submit" value="Subscribe">
                     </form>
                 </div>
        <?php endif; ?>
</div>
<!---->

<?php include ROOT . '/views/layouts/footer.php'; ?>
