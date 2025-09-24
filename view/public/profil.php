<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian</title>
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
    <div class="min-h-screen">
        <div class="relative mt-25">
            <div class="bg-red-600 mb-25">
                <img src="/JB_Marketplace/media/a.jpg" alt="icon-default" class="mx-auto rounded-full border-2 border-violet-500" width="250px" height="250px">
            </div>
            <span class="absolute bottom-0 -z-10 ml-[150px]">
                <svg width="1500" height="1500" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#FF0066" d="M42.9,-76C54.7,-67.5,62.7,-54.1,69.4,-40.7C76.1,-27.2,81.4,-13.6,83.4,1.2C85.4,15.9,84.1,31.9,76.8,44.2C69.5,56.6,56.1,65.3,42.3,70.8C28.5,76.4,14.3,78.7,0.8,77.3C-12.7,76,-25.5,71.1,-38.3,65C-51.1,58.9,-64.1,51.7,-71.2,40.7C-78.2,29.6,-79.5,14.8,-80.5,-0.6C-81.5,-16,-82.4,-32,-75.4,-43.3C-68.5,-54.6,-53.8,-61.2,-39.9,-68.6C-26.1,-76,-13,-84.2,1.3,-86.4C15.5,-88.5,31.1,-84.6,42.9,-76Z" transform="translate(100 100)" />
                </svg>
            </span>
        </div>
    </div>
    

    <footer class="p-15 bg-black text-white justify-end b-0">
        <p class="text-center">&#169;PT.Anugerah Berkah Jaya 2025<p>
    </footer>
    <script src="/JB_Marketplace/js/index.js"></script>
</body>
</html>