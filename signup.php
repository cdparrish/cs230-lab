<?php
require "includes/header.php"
?>

<main>
    <div class="bg-cover">
        <div class="h-100 center-me">
            <div class="my-auto">
                <form class="form-login" style="background: transparent;" action="includes/signup-helper.php" method="POST">
                    <h1 class="h3 mb-3 font-weight-normal">Register</h1>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="firstName" name="fname" class="form-control" placeholder="First name" required autofocus>
                        </div>
                        <div class="col">
                            <input type="text" id="lastName" name="lname" class="form-control" placeholder="Last name" required autofocus>
                        </div>
                    </div>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                    <input type="text" id="userId" name="uname" class="form-control" placeholder="Username" required autofocus>
                    <input type="password" id="pass" name="password" class="form-control" placeholder="Password" required autofocus>
                    <input type="password" id="conP" name="confirmPassword" class="form-control" placeholder="Confirm password" required autofocus>

                    <button class="btn btn-md btn-secondary btn-block" name="signup-submit" type="submit">Register</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                    <div class="text-center">
                        Already a member? <a href="login.html">login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>