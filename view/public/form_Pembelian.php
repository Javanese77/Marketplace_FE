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
     
    <div class="flex justify-center item-center min-h-screen bg-transparent">
        <div class="m-[200px] text-left shadow-xl/30 justify-center rounded-xl">
            <div class="m-8 flex flex-column object-cover bg-red-50 text-center">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/86/MTA-112300563/tws_m10_tws_headphone_bluetooth_v5-0_earphone_nirkabel_tampilan_led_dengan_mikrofon_9d_stereo_olahraga_headset_earbud_tahan_air_original_full01_o1xlmlct.jpg" class="h-full w-[5  50px] rounded-md" alt="Tws">
            <div class="text-left ml-5">
                <h2 class="text-center font-sans text-3xl mt-5 font-bold">TWS</h2>
                    <p class="mt-3 text-left font-normal">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum sequi doloremque similique dolores quidem omnis repellat officia, exercitationem qui maxime recusandae ipsa a porro libero vitae ullam quis dignissimos iste!</p>
                    <div class="mt-[200px]">
                        <form action="/JB_Marketplace/routes/index.php?controller=User&action=alertLanjut" method="post">
                        <label for="jumlah">Jumlah Produk Dibeli :</label>
                        <input type="number" value="jumlah" name="jumlah" id="jumlah" class="rounded-md text-center mt-5 w-[150px] h-[40px] outline-2 outline-offset-0 outline-black" min="0" max=><br><br>
                        <label for="harga" class="mt-2">Harga Jual : </label>
                        <p class="harga-asli">Rp.25.000,-</p><br><br>
                        <!-- <label for="total"></label> -->
                        <p class="harga-asli" id="total"></p><br><br>
                    </div>
                    <div class="mt-15 mr-4">
                        <button type="submit" value="buy" class="bg-green-500 text-center text-white w-full">Buy</button>
                    </div>
                    </form>
                    <div class="mt-1 mr-4">
                        <a href="/JB_Marketplace/routes/index.php?controller=User&action=index"><button type="submit" value="cancel" class="bg-red-500 text-center text-white w-full">Cancel</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="p-15 bg-black text-white justify-end b-0">
        <p class="text-center">&#169;PT.Anugerah Berkah Jaya 2025<p>
    </footer>
    <script src="/JB_Marketplace/js/index.js"></script>
</body>
</html>