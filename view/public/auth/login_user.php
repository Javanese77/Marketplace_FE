<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-User</title>
    <link rel="icon" type="iamge/x-icon" href="/JB_Marketplace/media/2.png">
    <link rel="stylesheet" href="/JB_Marketplace/src/output.css">
</head>
<body class="">
    <header class="flex justify-between p-10 bg-black">
        <h2 class="text-3xl font-sans font-bold bg-gradient-to-r from-red-300 to-violet-500 bg-clip-text text-transparent">Anugerah Marketplace</h2>
        <nav>
                <ul class="flex text-white space-x-6">
                    <li><a href="/JB_Marketplace/routes/index.php?controller=User&action=index" class="hover:border-b-3 border-b-violet-500">Home</a></li>
                    <li><a href="/JB_Marketplace/routes/index.php?controller=User&action=about" class="hover:border-b-3 border-b-violet-500">About-us</a></li>
                    <?php if (isset($_SESSION['islogin'])){?>
                    <li><?php echo htmlspecialchars($_SESSION['namaUser']);?></li>
                    <li><a href="/JB_Marketplace/routes/index.php?controller=User&action=logout" class="hover:border-b-3 border-b-violet-500">Logout</a></li>
                    <?php }else{ ?>
                    <li><a href="/JB_Marketplace/routes/index.php?controller=User&action=sigup" class="hover:border-b-3 border-b-violet-500">Sign-Up?</a><a href="/JB_Marketplace/routes/index.php?controller=User&action=singin" class="hover:border-b-3 border-b-violet-500">Sign-in</a></li>
                    <?php } ?>
                </ul>
            </nav>
    </header>
    <div class="h-screen flex items-center justify-center">
        <div class="back-login-form">
            <h1 class="mb-10 text-5xl bg-gradient-to-bl text-transparent from-red-300 to-sky-700 bg-clip-text font-extrabold uppercase font-sans text-shadow-md">Welcome User</h1>
            <form action="/JB_Marketplace/routes/index.php?controller=User&action=login" method="POST">
            <div class="relative mb-10 border-none">
                <input type="text" placeholder="Username" class="place" name="uName" required/>
            </div>
            <div class="relative mb-10 border-none">
                <input type="password" placeholder="Password" class="place" name="pass" required/>
            </div>
                <button type="submit" class="login-btn">Login</button>
        </div>
        </form>
    </div>
    <footer class="p-15 bg-black text-white justify-end b-0">
        <p class="text-center ">&#169;PT.Anugerah Berkah Jaya 2025<p>
    </footer>
</body>
</html>