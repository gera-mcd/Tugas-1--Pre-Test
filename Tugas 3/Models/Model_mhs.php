
<?php

    /**
     * Model mahasiswa berfungsi untuk menjalankan query
     * Sebelum menggunakan query, load dulu library database
     */

    namespace Models;
    use Libraries\Database;

    class Model_mhs
    {
        public function __construct()
        {
            $db = new Database();
            $this->dbh = $db->getInstance();
        }

        function simpanData($nim,$nama)
        {
            $rs = $this->dbh->prepare("INSERT INTO mahasiswa (nim,nama) VALUES (?,?)");
            $rs->execute([$nim,$nama]);
        }

        function lihatData()
        {

            $rs = $this->dbh->query("SELECT * FROM mahasiswa");
            return $rs;
        }

        function lihatDataDetail($id)
        {

            $rs = $this->dbh->prepare("SELECT * FROM mahasiswa WHERE id=?");
            $rs->execute([$id]);
            return $rs->fetch();// kalau hasil query hanya satu, gunakan method fetch() bawaan PDO
        }

        function softDelete($id)
        {
             // Memperbarui kolom Deleted_at dengan timestamp saat ini
            $rs = $this->dbh->prepare("UPDATE mahasiswa SET Deleted_at = NOW() WHERE id = ?");
            $rs->execute([$id]);
        }
        
    }
