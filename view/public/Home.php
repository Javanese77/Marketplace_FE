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
<body class="bg-transparent">
    <header class="flex justify-between p-10 bg-black">
        <h2 class="text-3xl font-sans font-bold bg-gradient-to-r from-red-300 to-violet-500 bg-clip-text text-transparent">Anugerah Marketplace</h2>
        <nav>
                <ul class="flex text-white space-x-6">
                    <form action="/JB_Marketplace/routes/index.php?controller=User&action=comm_sun" method="POST">
                    <div class="flex">
                    <li><button type="submit"><svg fill="#ffff" width="30px" height="30px" viewBox="0 0 512.00 512.00" xmlns="http://www.w3.org/2000/svg" stroke="#ffff" class="mr-2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="21.503999999999998"><title>ionicons-v5-f</title><path d="M464,428,339.92,303.9a160.48,160.48,0,0,0,30.72-94.58C370.64,120.37,298.27,48,209.32,48S48,120.37,48,209.32s72.37,161.32,161.32,161.32a160.48,160.48,0,0,0,94.58-30.72L428,464ZM209.32,319.69A110.38,110.38,0,1,1,319.69,209.32,110.5,110.5,0,0,1,209.32,319.69Z"></path></g><g id="SVGRepo_iconCarrier"><title>ionicons-v5-f</title><path d="M464,428,339.92,303.9a160.48,160.48,0,0,0,30.72-94.58C370.64,120.37,298.27,48,209.32,48S48,120.37,48,209.32s72.37,161.32,161.32,161.32a160.48,160.48,0,0,0,94.58-30.72L428,464ZM209.32,319.69A110.38,110.38,0,1,1,319.69,209.32,110.5,110.5,0,0,1,209.32,319.69Z"></path></g></svg></button></li>
                    <li><input type="text" id="search" placeholder="ketik nama barang" class="bg-white  rounded-md p-1 w-76 text-black outline-none"></li>
                    </div>
                    </form>
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

    <div class="bg-scroll">
    <video autoplay muted loop class="w-full object-cover bg-transparent-300">
        <source src="/JB_Marketplace/video/Tws_commerce.mp4">
    </video>
        <article class="flex-wrap text-3xl p-20 text-center w-full bg-transparent absolute bottom-10">
            <h2 class="bg-gradient-to-r from-red-300 to-violet-500 bg-clip-text uppercase font-extrabold text-6xl text-transparent text-shadow-md">Hello Welcome to Marketplace</h2><br>
            <p class="text-white text-3xl ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente libero dolor quas aliquam eveniet expedita laborum, eaque officiis necessitatibus inventore! Atque qui vero unde eius aliquid ullam neque aspernatur eligendi.</p>
        </article>
    </div>

    <div class="text-center mt-25 p-3 bg-black ml-50 mr-50 rounded-md text-shadow-white-lg/20">
        <h2 class="text-3xl font-sans font-bold bg-gradient-to-r from-red-300 to-violet-500 bg-clip-text text-transparent">PRODUK TWS</h2>
    </div>
    
    <div class="pembungkus_card">
         <div class="card">
                <img class="object-cover rounded-t-md w-full" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/86/MTA-112300563/tws_m10_tws_headphone_bluetooth_v5-0_earphone_nirkabel_tampilan_led_dengan_mikrofon_9d_stereo_olahraga_headset_earbud_tahan_air_original_full01_o1xlmlct.jpg" alt="Tws">
                <div class="container">
                    <h2 class="judul-card" name="Tws-m10">Tws M10</h2>
                    <del class="harga-discount">Rp.50.000,-</del>
                    <p class="harga-asli">Rp.25.000,-</p>
                    <div class="bungkus-tombol-keranjang-beli">
                    <div class="flex space-x-3">
                    <form action="/JB_Marketplace/routes/index.php?controller=User&action=beli" method="POST">
                    <input type="submit" value="Beli" class="tombol-beli">
                    </form>
                    <form action="/JB_Marketplace/routes/index.php?controller=User&action=keranjang" method="POST">
                    <input type="submit" value="Keranjang" class="tombol-keranjang">
                    </form>
                    </div>
                    </div>
                </div>
         </div>

        <div class="card">
            <img class="object-cover rounded-t-md w-full" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/86/MTA-112300563/tws_m10_tws_headphone_bluetooth_v5-0_earphone_nirkabel_tampilan_led_dengan_mikrofon_9d_stereo_olahraga_headset_earbud_tahan_air_original_full01_o1xlmlct.jpg" alt="Tws">
                <div class="container">
                    <h2 class="judul-card" >Tws M10</h2>
                    <del class="harga-discount">Rp.50.000,-</del>
                    <p class="harga-asli">Rp.25.000,-</p>
                    <div class="bungkus-tombol-keranjang-beli">
                    <input type="submit" value="Beli" class="tombol-beli">
                    <input type="submit" value="Keranjang" class="tombol-keranjang">
                    </div>
            </div>
         </div>

        <div class="card">
            <img class="object-cover rounded-t-md w-full" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/86/MTA-112300563/tws_m10_tws_headphone_bluetooth_v5-0_earphone_nirkabel_tampilan_led_dengan_mikrofon_9d_stereo_olahraga_headset_earbud_tahan_air_original_full01_o1xlmlct.jpg" alt="Tws">
                <div class="container">
                    <h2 class="judul-card">Tws M10</h2>
                    <del class="harga-discount">Rp.50.000,-</del>
                    <p class="harga-asli">Rp.25.000,-</p>
                    <div class="bungkus-tombol-keranjang-beli">
                    <input type="submit" value="beli" class="tombol-beli">
                    <input type="submit" value="Keranjang" class="tombol-keranjang">
                    </div>
                </div>
        </div>

    </div>
    <footer class="p-15 bg-black text-white justify-end b-0 mb-0">
        <p class="text-center">&#169;Aswun2025<p>
    </footer>
</body>
