<?php require 'views/partials/head.php'; ?> 


            <!-- the products goes here, they will be pulled from the database -->
            <!-- the whole body is placed in a form so when we can just send the delete post to destroy.php -->
                 <form action="/controllers/destroy.php" method="POST">

                 <div class="nav">

                 <div class="nav-header">
                    <a href="/" class="header ">Product List</a>
                </div>

                    <ul class="list">
                        <li class="list-item">
                            <a href="/add-product">
                                <input type="button" id="add-product-btn" class="link-item" value="Save">
                            </a>
                        </li>
                        <li class="list-item">
                            <input  id="delete-product-btn" name="delete" type="submit" value="Delete">
                        </li>
                    </ul>  
                 </div>

                <br>
                <hr class="linebreak">

                <div class="container ">
               
                    <div class="product-row ">
                        <?php foreach($discs as $disc): ?>
                 
                            <div class="product-table">
                                    <input type="checkbox" class="delete-checkbox" name="checkbox[]" value="<?= $disc['SKU']?>">

                                    <div class="product-info">
                                        <div class="product-atr"><?= $disc['SKU']?></div>
                                        <div class="product-atr"><?= $disc['Name']?></div>
                                        <div class="product-atr">Price: <?= $disc['Price']?></div>
                                        <div class="product-atr">Size: <?= $disc['Size']?></div>
                                    </div>
                                
                            </div>
                        <?php endforeach; ?>
                    </div>


                <div class="product-row">
                    <?php foreach($books as $book): ?>
                        <div class="product-table">
                                <input type="checkbox" class="delete-checkbox" name="checkbox[]" value="<?= $book['SKU']?>">

                                <div class="product-info">
                                    <div class="product-atr"><?= $book['SKU']?></div>
                                    <div class="product-atr"><?= $book['Name']?></div>
                                    <div class="product-atr">Price: <?= $book['Price']?></div>
                                    <div class="product-atr">Weight: <?= $book['Weight']?></div>
                                </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="product-row">
                    <?php foreach($furnitures as $furniture): ?>
                        <div class="product-table">
                                <input type="checkbox" class="delete-checkbox" name="checkbox[]" value="<?= $furniture['SKU']?>">

                                <div class="product-info">
                                    <div class="product-atr"><?= $furniture['SKU']?></div>
                                    <div class="product-atr"><?= $furniture['Name']?></div>
                                    <div class="product-atr">Price: <?= $furniture['Price']?></div>
                                    <div class="product-atr">Dimensions: <?= $furniture['Dimensions']?></div>
                                </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div> 

            </form>
            
            <br>
            <hr class="linebreak">

<?php require 'views/partials/footer.php';?>