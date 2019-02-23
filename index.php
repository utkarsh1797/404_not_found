<?php

/* This project is Devloped By : Amit Gupta 
 * +91 9810980641 
 Amit Gupta */

require_once './include/constants_files.php';
require HEADER;
?>
<!-- Material form register -->
<div class="card" style="margin-left: 8%;margin-right: 8%;margin-top: 5%;margin-bottom: 3%">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Registration</strong>
    </h5>
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="register.php" method="POST">
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="firstname" name="firstname" class="form-control"  placeholder="First Name">
                        <!-- <label for="materialRegisterFormFirstName">First name</label> -->
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="lastname" name="lastname" class="form-control"  placeholder="Last Name">
                        <!-- <label for="materialRegisterFormLastName">Last name</label> -->
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <!-- Email Id -->
                    <div class="md-form">
                        <input type="email" id="emailid" name="emailid" class="form-control"  placeholder="Email Id">
                        <!-- <label for="materialRegisterFormFirstName">Email Id</label> -->
                    </div>
                </div>
                <div class="col">
                    <!-- Phone No. -->
                    <div class="md-form">
                        <input type="number" id="phone" name="phone" class="form-control"  placeholder="Phone No.">
                        <!-- <label for="materialRegisterFormLastName">Phone No.</label> -->
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <!-- Password -->
                    <div class="md-form">
                        <input type="number" id="houseno" name="houseno" class="form-control"  placeholder="House No.">
                        <!-- <label for="materialRegisterFormFirstName">House No.</label> -->
                    </div>
                </div>
                <div class="col">
                    <!-- Confirm Password -->
                    <div class="md-form">
                        <input type="number" id="floor" name="floor" class="form-control"  placeholder="Floor">
                        <!-- <label for="materialRegisterFormLastName">Floor</label> -->
                    </div>
                </div>
                <div class="col">
                    <!-- Password -->
                    <div class="md-form">
                        <input type="number" id="street" name="street" class="form-control"  placeholder="Street">
                        <!-- <label for="materialRegisterFormFirstName">Street</label> -->
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <!-- Confirm Password -->
                    <div class="md-form">
                        <input type="text" id="landmark" name="email" class="form-control"  placeholder="Landmark">
                        <!-- <label for="materialRegisterFormLastName">Landmark</label> -->
                    </div>
                </div>
                <div class="col">
                    <!-- Password -->
                    <div class="md-form">
                        <input type="text" id="state" name="state" class="form-control"  placeholder="State">
                        <!-- <label for="materialRegisterFormFirstName">State</label> -->
                    </div>
                </div>
                <div class="col">
                    <!-- Confirm Password -->
                    <div class="md-form">
                        <input type="number" id="pincode" name="email" class="form-control"  placeholder="Pincode">
                        <!-- <label for="materialRegisterFormLastName">Pincode</label> -->
                    </div>
                </div>
            </div>
            <!-- Address -->
            <div class="form-row">
                <textarea id="textarea-char-counter" class="form-control md-textarea" name="Address" length="120" rows="3" placeholder="Address"></textarea>
            </div>
            <!-- <div class="md-form mt-0">
                <textarea id="textarea-char-counter" class="form-control md-textarea" length="120" rows="1" placeholder="Address"></textarea>
                <label for="materialRegisterFormEmail">Address</label>
            </div> -->
            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Register</button>
            <hr>
        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->
<?php
require_once FOOTER;
?>
