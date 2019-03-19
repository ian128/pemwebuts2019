<?php
    include 'controller.php';

    if(isset($_FILES['gambar'])){
        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];

        $directory = "images/user/";
        if($tipe_file == "image/jpeg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
            // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
            if($ukuran_file <= 2000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
              // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
              // Proses upload
              unlink($directory.$_SESSION['UserID'].".jpg");

              $destination = $directory.$nama_file;
              if(move_uploaded_file($tmp_file, $destination)){
                    rename($destination,$directory.$_SESSION['UserID'].".jpg");
                    echo "
                        <script>
                        window.location.href='view/profileView.php';
                        </script>
                    ";
                }else{
                    // Jika gambar gagal diupload, Lakukan :
                    echo "Maaf, Gambar gagal untuk diupload.";
                }
            }else{
              // Jika ukuran file lebih dari 2MB, lakukan :
              echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 2MB";
            }
        }else{
            // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
            echo "Maaf, Tipe gambar yang diupload harus JPG";
        }
    }


?>