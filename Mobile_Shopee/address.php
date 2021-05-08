<?php
ob_start();
// include header.php file
include ('header.php');


    // save for later
//    if (isset($_POST['first_name'])){
//    $address->insertIntoAddress($_POST['first_name']);
//    }

?>
<!--address-->
<section id="address_form" class="font-baloo px-5 py-5">
<form   method="post">

    <div class="form-row">
        <div class="col">
            <label for="input">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="First name">
        </div>
        <div class="col">
            <label for="input">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Last name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email_id" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6"></div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Address Line 1</label>
        <input type="text" class="form-control" name="address1" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Address Line 2</label>
        <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control"  name="city" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">State </label>
            <input type="text" class="form-control" name="state" id="inputCity">
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Pin Code</label>
            <input type="text" class="form-control"  name="pincode" id="inputPin">
        </div>
    </div>

    <div class="form-group  color-yellow px-5">
        <button  type="submit" onclick="document.location='confirmed.php'" class="btn btn-primary items-center">Proceed To Checkout</button>
    </div>
</form>
</section>
<?php
// include footer.php file
include ('footer.php');
?>