<!DOCTYPE html>
<html>
<head>
        <title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>

        <h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
        <br/>
        <a href="index.php">KEMBALI</a>
        <br/>
        <br/>
        <h3>EDIT DATA MAHASISWA</h3>

        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
        while($d = mysqli_fetch_array($data)){
                ?>
                <form method="post" action="update.php">
                        <table>
                                <tr>
                                        <td>NIM</td>
                                        <td>
                                                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                                <input type="number" name="nim" value="<?php echo $d['nim']; ?>">
                                        </td>
                                </tr>
                                <tr>
                                        <td>NIM</td>
                                        <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
                                </tr>
                                <tr>
                                        <td>Alamat</td>
                                        <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                                </tr>
                                <tr>
                                        <td></td>
                                        <td><input type="submit" value="SIMPAN"></td>
                                </tr>
                        </table>
                </form>
                <?php
        }
        ?>

</body>
</html>
hay@apache1:/var/www/hayload$ ls
edit.php   index.php    tambah_aksi.php  update.php
hapus.php  koneksi.php  tambah.php
hay@apache1:/var/www/hayload$ cat index.php
<!DOCTYPE html>
<html>
<head>
        <title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>

        <h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
        <h2>MACHINE 1</h2>
        <br/>
        <a href="tambah.php">+ TAMBAH MAHASISWA</a>
        <br/>
        <br/>
        <table border="1">
                <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Alamat</th>
                        <th>OPSI</th>
                </tr>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"select * from mahasiswa");
                while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nim']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td>
                                        <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                                        <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                                </td>
                        </tr>
                        <?php
                }
                ?>
        </table>
</body>
</html>