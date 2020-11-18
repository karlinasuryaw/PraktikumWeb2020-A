var layar = document.querySelector("#layar");
var tombol = document.querySelector(".container-tombol");
var resetLayar = false; //deklarasi awal reset layar nilainya msh salah
var bolehHitung = false; //begitu juga nilai variabel awal boleh hitung msh salah nilainya krn gaada inputan
var tmpVal = ''; //variabel menyimpan nilai sementara
var operator = ''; //variabel operator bilangan
 
tombol.addEventListener("click", function(e) {
    var tombolClick = e.target;
    var nilaiTombol = tombolClick.innerText;
 
    if (nilaiTombol == "C") { //fungsi untuk clear
        layar.value = "";
        tmpVal = ""; // tambahkan ini untuk clear nilai sementara
    }
    else if (nilaiTombol == "<") { //fungsinya buat delete number tapi start lagi dari nol perhitungannya atau delete sementara
        layar.value = layar.value.slice(0, -1);
    }
    else if (nilaiTombol == "=") { //kalo user klik sama dengan artinya jalanin operasi hitung
        if (bolehHitung == true) {
            layar.value = eval(tmpVal + operator + layar.value);
            bolehHitung = false;
        }
    }
    else if (nilaiTombol == ".") { //ini kondisi kalau ngetik titik enggak langsung ngelakuin operasi hitung
        layar.value = layar.value + nilaiTombol;
    }
    else if (tombolClick.classList.contains('operator')) { //kondisi untuk fungsi tiap operator yg dipilih
        if (bolehHitung == true) { //klo operator yg di klik ini memenuhi syarat, lanjut ke proses hitung
            layar.value = eval(tmpVal + operator + layar.value);
            bolehHitung = false;
        }
 
        tmpVal = layar.value; //layar nampilin nilai hasil operasi
        operator = nilaiTombol; //tombol jdi operator 
        resetLayar = true; //user bisa reset layar
    }
    else {
        if (resetLayar == true) { //kondisi kalo reset layar benar
            layar.value = nilaiTombol; //layar value kosong, user bisa klik stiap button
            resetLayar = false;
            bolehHitung = true;
        } else {
            layar.value = layar.value + nilaiTombol;
        }
    }
});