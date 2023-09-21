<div id="signupModal" class="modal">
    <div class="modal-content">
        <span id='close1' class="close">&times;</span>
        <div class="loginSignup">
            <h2>User Registration Form</h2>
            <div class='container'>
                <form action='partials/_handelSignup.php' method='post'>
                    <input type="text" name="lastPage" value="<?php echo$_SERVER['REQUEST_URI']?>" hidden>
                    <input type='text' name='name' placeholder='Name' required>
                    <input type='text' name='username' placeholder='Username' required>
                    <input type='email' name='email' placeholder='Email' required>
                    <input type='password' name='password' placeholder='Password' required>
                    <input type='password' name='confirmPassword' placeholder='Confirm Password' required>

                    <input type='text' name='dob' pattern='\d{4}-\d{2}-\d{2}' placeholder='Date of Birth (yyyy-mm-dd)'
                        required>
                    <div style='text-align: center;'>
                        <button type='submit'>Submit</button>
                        <button type='reset'>Reset</button>
                    </div>
                </form>
            </div>
            <div class='bottomContainer'>
                <p>old user? <a id='openLoginModal'>login.</a></p>
            </div>
        </div>
    </div>
</div>