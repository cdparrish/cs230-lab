<?php
require 'includes/header.php'
?>
<main>
    <link rel="stylesheet" href="css/login.css">
        <div class="bg-cover">
            <div class="h-100 center-me">
                <div class="my-auto">
                    <form class="form-login" style="background: transparent;" action="includes/login-helper.php" method="POST"">
                        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
                        <div class="checkbox mb-3" style="margin: 10px; text-align: left;">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-md btn-secondary btn-block" name="login-submit" type="submit" style="margin-top: -11px">Sign in</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                    <div class="text-center">New User?<a href="signup.php"> create account</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>