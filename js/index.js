function jumlah(jumlah_barang){
    let hasil_total_jumlah = 25000*jumlah_barang;
    return hasil_total_jumlah;
}

const  jum_dari_inputan_select = document.getElementById('jumlah');
const total_dari_p_buat_lihat_hasil = document.getElementById('total');

jum_dari_inputan_select.addEventListener('click',function(){
    const nilai = parseInt(jum_dari_inputan_select.value);
    total_dari_p_buat_lihat_hasil.innerHTML= "Total Harga : Rp. " + jumlah(nilai).toLocaleString('id-ID');
})
