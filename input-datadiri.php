<?php 
      include('./input-config.php');
      if ( $_SESSION["login"] != TRUE) {
        header('location:login.php');
      }
      
      echo "<div class='container'>";
      echo "Selamat datang, " . $_SESSION["username"] . "<br>";
      echo "Anda sebagai : " . $_SESSION["role"] . "<br>";
      echo "<a class='btn btn-sm btn-secondary' href='logout.php'>Logout</a>";
      echo "<hr>";
      echo "<a class='btn btn-sm btn-primary' href='input-datadiri-tambah.php'>Tambah Data</a>";
      echo "<br>";
      echo "<a class='btn btn-sm btn-warning' href='input-datadiri-pdf.php'>Cetak PDF</a>";
      echo "<hr>";
      // READ - Menampilkan data dari database
      $no = 1;
      $tabledata = "";
      $data = mysqli_query($mysqli, " SELECT * FROM datadiri ");
      while($row = mysqli_fetch_array($data)){
            $tabledata .= "
                  <tr>
                        <td>".$row["nis"]."</td>
                        <td>".$row["namalengkap"]."</td>
                        <td>".$row["tanggal_lahir"]."</td>
                        <td>".$row["nilai"]."</td>
                        <td>
                              <a class='btn btn-sm btn-success' href='input-datadiri-edit.php?nis=".$row["nis"]."'>Edit</a>
                              &nbsp;-&nbsp;
                              <a class='btn btn-sm btn-danger' href='input-datadiri-hapus.php?nis=".$row["nis"]."' 
                              onclick='return confirm(\"Yakin Dek ?\");'>Hapus</a>
                        </td>
                  </tr>
            ";
            $no++;
      }

      echo "
            <table class='table table-dark table-bordered table-striped'>
                  <tr>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                  </tr>
                  $tabledata
            </table>
      ";
      echo "</div>";
?>
