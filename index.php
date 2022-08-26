<?php
 $db = new PDO("mysql:host=localhost;dbname=dbjnm",'root','');
 $query = $db->query('select * from tbl_siswa');

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="edit.php?nis=<?= $data['nis']; ?>">
            <?= $data['nama'] ?>
        </a>
        
        <a href="proses_hapus.php?nis=<?= $data['nis']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>