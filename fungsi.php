<?php
$koneksi = mysqli_connect("localhost","root","","Portopolio");
$hasil = mysqli_query($koneksi,"SELECT * FROM user");
$result = mysqli_query($koneksi,"SELECT * FROM about");
function data($isi){
    global $koneksi;
    $sa = mysqli_query($koneksi,$isi);
    $box = [];
    while ($keluarkan = mysqli_fetch_assoc($sa)){
         $box[] = $keluarkan;
    }
       
    return $box;
}

   function tambah($data){
       global $koneksi;
       $email = $data["email"];
       $nama = $data["nama_k"];
       $pesan = $data["pesan"];
       
       $query = "INSERT INTO contact
                     VALUES
                (NULL,'$email','$nama','$pesan')
                ";
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
   }
?>