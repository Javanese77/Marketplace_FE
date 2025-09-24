<?php
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anugerah Marketplace</title>
    <link rel="icon" type="iamge/x-icon" href="/JB_Marketplace/media/2.png">
    <link rel="stylesheet" href="/JB_Marketplace/src/output.css" />
   
</head>
<body>
    <header class="flex justify-between p-10 bg-black">
        <h2 class="text-3xl font-sans font-bold bg-gradient-to-r from-red-300 to-violet-500 bg-clip-text text-transparent">Anugerah Marketplace</h2>
        <nav>
                <ul class="flex text-white space-x-6">
                    <li><a href="/JB_Marketplace/routes/index.php?controller=User&action=index" class="hover:border-b-3 border-b-violet-500">Home</a></li>
                    <li><a href="/JB_Marketplace/routes/index.php?controller=User&action=about" class="hover:border-b-3 border-b-violet-500">About-us</a></li>
                    <?php if (isset($_SESSION['islogin'])){?>
                    <li><a href="/JB_Marketplace/routes/index.php?controller=User&action=profil"><?php echo htmlspecialchars($_SESSION['namaUser'])?></a></li>
                    <li><a href="/JB_Marketplace/routes/index.php?controller=User&action=logout" class="hover:border-b-3 border-b-violet-500">Logout</a></li>
                    <?php }else{ ?>
                    <li><a href="/JB_Marketplace/routes/index.php?controller=User&action=sigup" class="hover:border-b-3 border-b-violet-500">Sign-Up?</a><a href="/JB_Marketplace/routes/index.php?controller=User&action=singin" class="hover:border-b-3 border-b-violet-500">Sign-in</a></li>
                    <?php } ?>
                </ul>
            </nav>
    </header>
    
    <div class="flex flex-wrap justify-center item-center min-h-screen bg-transparent">
    <div class="m-[200px] text-center text-white justify-center bg-black rounded-xl">
        <h1 class="bg-gradient-to-r from-red-300 to-violet-500 bg-clip-text uppercase font-extrabold text-6xl text-transparent text-shadow-md p-5 mb-3">Anugerah Marketplace</h1>
        <p class="text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quia et culpa reiciendis qui enim quaerat rerum quibusdam, numquam a itaque iste molestias doloribus, provident tempore ut fuga ducimus quas!</p>
    </div>
    </div>
    
    <footer class="p-15 bg-black text-white justify-end b-0">
        <p class="text-center ">&#169;PT.Anugerah Berkah Jaya 2025<p>
    </footer>
</body>
</html>