<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page

?>
<?php include('partials-front/menu.php'); ?>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section >
        <div class="order-box">
            <h2 style="color: aqua;" class="text-center">Fill this form to confirm your order.</h2>

            <form action="#" class="order">
                <fieldset>
                    <legend style="color: white;">Selected Food</legend>

                    <div class="food-menu-img">
                        <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3>Food Title</h3>
                        <p class="food-price">$2.3</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend style="color: white;">Delivery Details</legend>
                    <form >
                        <div class="user-box">
                         <input type="text" name="full-name" required="" >
                         <label>Full Name</label>
                       </div>
                       <div class="user-box">
                         <input type="tel" name="contact"  required="">
                         <label>Phone Number</label>
                       </div>
                       <div class="user-box">
                        <input type="email" name="email" required="">
                        <label>Email</label>
                       </div>
                    
                      
 <button type="submit" class="btn" name="Confirm" value="Confirm" id="submit1">Order Now</button>
                    
                </fieldset>

            </form>

        </div>
    </section>

</body>
</html>