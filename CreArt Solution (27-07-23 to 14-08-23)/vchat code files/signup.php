<!DOCTYPE html>
<html lang="en">

<head>
    <title>Video Calling</title>
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <!--WRAPPER-->
    <div class=" wrapper h-screen items-center justify-center flex">
        <div class="inner rounded flex bg-white w-4/5 border" style="height:75%; margin-bottom:10%;">
            <!--LEFT_SIDE-->
            <div class="w-2/5 border-r">
                <div class="select-none flex h-full items-center justify-center">
                    <img class="select-none w-4/5" src="assets/images/login-left-bg.png">
                </div>
            </div>
            <!--RIGHT_SIDE-->
            <div class="flex-2 flex rounded-xl w-full h-full ">
                <!--PROFILE_SECTION-->
                <div class=" flex flex-1 justify-center items-center">
                    <div class="flex flex-col flex-1 h-full overflow-hidden overflow-y-auto items-center justify-start">


                        <div class="right-heading w-full flex flex-col items-center">
                            <div>
                                <h2 class="text-center" style="padding-top:0px; color: black; font-weight: bold;">Create New Account !!</h2>
                            </div>
                            <form action="signup-check.php" method="post" class="w-full">
                                <?php
                                if (isset($_GET['error'])) { ?>
                                    <p class="error">
                                        <?php echo $_GET['error']; ?>
                                    </p>
                                <?php }
                                ?>
                                <?php
                                if (isset($_GET['success'])) { ?>
                                    <p class="success">
                                        <?php echo $_GET['success']; ?>
                                    </p>
                                <?php }
                                ?>

                                <div class="w-full flex flex-col items-center">
                                    <div class="flex w-2/4 flex-col my-2 items-center">

                                        <?php
                                        if (isset($_GET['name'])) { ?>
                                            <p class="error"></p>
                                            <input class="w-4/5 my-2 border border-gray-200 rounded px-4 py-2" type="name"
                                                name="name" placeholder="Full Name" value="<?php echo $_GET['name']; ?>">
                                        <?php } else { ?>
                                            <input class="w-4/5 my-2 border border-gray-200 rounded px-4 py-2" type="name"
                                                name="name" placeholder="Full Name">
                                        <?php } ?>

                                        <?php
                                        if (isset($_GET['username'])) { ?>
                                            <p class="error"></p>
                                            <input class="w-4/5 my-2 border border-gray-200 rounded px-4 py-2" type="name"
                                                name="username" placeholder="Username"
                                                value="<?php echo $_GET['username']; ?>">
                                        <?php } else { ?>
                                            <input class="w-4/5 my-2 border border-gray-200 rounded px-4 py-2" type="name"
                                                name="username" placeholder="Username">
                                        <?php } ?>

                                        <?php
                                        if (isset($_GET['email'])) { ?>
                                            <p class="error"></p>
                                            <input class="w-4/5 my-2 border border-gray-200 rounded px-4 py-2" type="email"
                                                name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>">
                                        <?php } else { ?>
                                            <input class="w-4/5 my-2 border border-gray-200 rounded px-4 py-2" type="email"
                                                name="email" placeholder="Email">
                                        <?php } ?>

                                        <?php
                                        if (isset($_GET['password'])) { ?>
                                            <p class="error"></p>
                                            <input class="w-4/5 my-2 border border-gray-200 rounded px-4 py-2"
                                                type="password" name="password" placeholder="Password"
                                                value="<?php echo $_GET['password']; ?>">
                                        <?php } else { ?>
                                            <input class="w-4/5 my-2 border border-gray-200 rounded px-4 py-2"
                                                type="password" name="password" placeholder="Password">
                                        <?php } ?>

                                        <?php
                                        if (isset($_GET['rewrite'])) { ?>
                                            <p class="error"></p>
                                            <input class="w-4/5 my-2 border border-gray-200 rounded px-4 py-2"
                                                type="rewrite password" name="rewrite" placeholder="Rewrite Password"
                                                value="<?php echo $_GET['rewrite']; ?>">
                                        <?php } else { ?>
                                            <input class="w-4/5 my-2 border border-gray-200 rounded px-4 py-2"
                                                type="rewrite password" name="rewrite" placeholder="Rewrite Password">
                                        <?php } ?>

                                        <div
                                            class="select-none  error text-red-500 text-xs p-2 px-2 w-auto self-start ml-20">

                                        </div>
                                    </div>
                                    <div>
                                        <button
                                            class="active:-top-2 relative transition border border-gray-400 shadow-md my-4 bg-green-400 hover:bg-green-500 p-2 px-20 rounded-full text-white text-xl" style="background-color: black;">Signup</button>
                                    </div>
                                    <div>
                                        <p>
                                            Already have an account.
                                            <a href="index.php" class="registration">Login</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>