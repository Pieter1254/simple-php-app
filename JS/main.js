
// $(function(){
//     $('#delete-product-btn').on('click', function(){
//         $('.delete-checkbox').each(function(){
//             $(this).remove()
//         })
//     })
// });




function myFunction() {
    var display;
    var type = document.getElementById('productType').value;

    switch (type) 
    {
        case "Book":
            display = `
            <p>Please, provide weight</p>
            <label>Weight(Kg):</label>
            <input id="Book" name="Weight" 
            required oninvalid="this.setCustomValidity('Please, fill in required in for data type')"
            minlength="2" maxlength="6" 
            ><?= $_POST['Weight'] ?? '' ?></input> <br> `;
        break;

        case "Disc":
            display = `
            <p>Please, provide size</p>
            <label>Size(Mb):</label>
            <input id="Size" name="Size" 
            required  oninvalid="this.setCustomValidity('Please, fill in required in for data type')"
            minlength="2" maxlength="6" 
            ><?= $_POST['Size'] ?? '' ?></input> <br> `;
        break;

        case "Furniture":
            display = `
            <p>Please, provide dimensions as HxWxL</p>
            <label>Dimension(CM):</label>
            <input id="Dimensions" name="Dimensions"  
            required  oninvalid="this.setCustomValidity('Please, fill in required in for data type')"
            minlength="2" maxlength="12" 
            ><?= $_POST['Dimensions'] ?? '' ?></input> <br> `;
        break;

        default:
            display = ``;
    }

    document.getElementById("demo").innerHTML = display;
}


