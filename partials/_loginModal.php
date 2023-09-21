<div id="loginModal" class="modal">
    <div class="modal-content">
        <span id='close0' class="close">&times;</span>
        <div class="loginSignup">
            <h2>User Login Form</h2>
            <div class='container'>
                <form action='partials/_handelLogin.php' method='post'>
                    <input type="text" name="lastPage" value="<?php echo$_SERVER['REQUEST_URI']?>" hidden>
                    <input type='text' name='username' placeholder='Username' required>
                    <input type='password' name='password' placeholder='Password' required>
                    <div style='text-align: center;'>
                        <button type='submit'>Login</button>
                        <button type='reset'>Reset</button>
                    </div>
                </form>
            </div>
            <div class='bottomContainer'>
                <p>forgot password? <a id='openResetModal'>reset it.</a> </p>
                <p>New user? <a id='openSignupModal'>signup</a></p>
            </div>
        </div>
    </div>
</div>