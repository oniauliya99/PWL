@extends('layouts.idx') 

@section('header', 'Konfigurasi NAT Mikrotik') 

@section('konten')
            <h3>Konfigurasi NAT pada Mikrotik</h3>
            <h4>Probolinggo, 1 Oktober 2020</h4>
            <p>NAT (Network Address Translation) adalah suatu protokol yang digunakan mikrotik untuk mentranslasikan IP publik ke IP privat agar ip privat dapat tersambung dengan ip publik dalam penggunaan internet. Setelah saya mengulas tentang DHCP server pada artikel saya yang lain, disini saya akan mengeshare sedikit tentang membuat NAT di router Mikrotik OS. Dimana router Mikrotik yang tersambung dengan modem atau PC sumber internet yang akan mendapatkan IP publik dari internet serta pada PC guest/client yang tersambung dengan Mikrotik menggunakan IP Privat akan dapat mengakses internet dengan cara konfigurasi NAT pada mikrotik tersebut, untuk langkah - langkahnya sebagai berikut :</p>
            <p>1) Sambungkan Modem atau PC source internet ke Mikrotik pada ether1 dan PC guest/client ke ether2. Pada PC client buka Winbox dan search perangkat mikrotik dan tekan connect jangan lupa set login = admin dan password kosongkan.</p>
            <p>2) Setting DHCP client (mendapatkan IP publik dari modem/PC sumber internet) pada mikrotik dengan cara IP - DHCP Client</p>
            <p>3) Pilih tanda (+) dan pilih interface ether1 yang tersambung dengan modem/pc sumber internet dan OK</p>
            <p>4) Lihat pada list DHCP client apakah sudah tertera tulisan bound di ether1, berarti ether1 sudah emndapat IP address dari modem/PC sumber internet</p>
            <p>5) Lihat pada Addresses pada ether1 sudah mendapatkan IP dengan tanda (D) yaitu dinamik otomatis dapat IP dari modem/ pc sumber internet</p>
            <p>6) sekarang buatIP address pada ether2 yang tersambung ke PC client. masuk IP>addresses lalu tekan tanda (+) masukan IP privat misal 192.168.5.1/24 dan interface ether2 lalu OK, dan buat DHCP Server pada Ether2 seperti ulasan artikel saya yang ini</p>
            <p>6) Sekarang setting NAT, dengan cara buka IP - Firewall - pada tab NAT pilih tanda (+) untuk menambah konfigurasi NAT</p>
            <p>7) pilih chain srcnat dan out interface pilih ether1</p>
            <p>8) pada Tab Action pilih masquerade lalu OK</p>
            <p>9) setting DNS dengan pilihIP>DNS masukan IP dari server modem/ pc yang tersambung internet dan DNS google 8.8.8.8</p>
            <p>10)Konfigurasi NAT sudah selesai, sekarang PC client dapat terkoneksi dengan internet.</p>
            <p>Sumber : <a href="https://qwords.com/blog/apa-itu-mikrotik/">mikrotik</a></p>
            
@endsection

@section('copyright', 'Auliya Oni Priyandika')