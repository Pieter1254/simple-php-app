<?php require 'views/partials/head.php';?>


        <form id="product_form" method="POST">
                <h2 class="form_header">Add Product</h2>

                <div class="form_buttons">
                        <input type="submit" value="Submit" class="submit">

                        <a href="/">
                        <input type="button" value="Cancel" class="cancel">
                        </a>
                </div>

                <label class="label">Sku</label>

                <input type="text" placeholder="GGWP0007" id="sku" name="SKU" 
                required  oninvalid="this.setCustomValidity('Please, Submit required data')"
                minlength="8" maxlength="8"
                ><?= $_POST['SKU'] ?? '' ?> <br>

                <label class="label" >Name</label>

                <input type="text" placeholder="War and Peace" id="name" name="Name" 
                required  oninvalid="this.setCustomValidity('Please, Submit required data')"
                minlength="1" maxlength="35"
                ><?= $_POST['Name'] ?? '' ?> <br>

                <label class="label" >Price($)</label>

                <input type="text" placeholder="20$" id="price" name="Price" 
                required  oninvalid="this.setCustomValidity('Please, Submit required data')"
                minlength="2" maxlength="6" 
                ><?= $_POST['Price'] ?? '' ?> <br>

                <label class="label">Type Switcher</label>
                 
                <select name="type" id="productType" onchange="myFunction()" required>
                <option value="" class="select-type">Select product type</option>
                <option value="Book" id="Book">Book</option>
                <option value="Disc" id="Disc">Disc</option>
                <option value="Furniture" id="Furniture">Furniture</option>
                </select>

                <p id="demo"></p>  

        </form>

<?php require 'views/partials/footer.php';?>