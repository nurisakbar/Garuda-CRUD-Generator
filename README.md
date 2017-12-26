# CIGENERATOR
CIGENERATOR adalah CRUD Generator Yang Dibuat Diatas Framework Codeigniter 3, Library Datatables Serverside Untuk Menampilkan Data Dan Template AdminLTE.<br>
CRUD Generator Yang Saya Gunakan Adalah Harviacode Yang Sudah Dimodifikasi Agar Hasil Generate Filenya Sesuai Dengan AdminLTE.

# CARA INSTALL
1.silahkan clone atau download repository ini.<br>
2.silahkan extrack dan rename nama folder menjadi cigenerator.<br>
3.buat sebuah database baru dengan nama cigenerator lalu import file cigenerator.sql.<br>
4.buka web browser dan masukan http://localhost/cigenerator/ pada address bar.

# AUTENTIFIKASI
Untuk melakukan proses login silahkan gunakan akun default berikut :<br>
Email : admin@gmail.com<br>
Password : password


# DROPDOWN DINAMIS
Fungsi ini digunaan untuk membuat dropdown dinamis dengan data yang berasal dari database, cara penggunaan :<br>
``` <?php echo cmb_dinamis(NamaElement,NamaTabel,NamaField,PrimaryKey,DefaultValue);?>```<br>
Contoh : <br>
``` <?php echo datalist_dinamis('cmb_kelas','tbl_kelas','nama_kelas','id_kelas',5) ?>```

# DATALIST DINAMIS
Fungsi ini digunaan untuk membuat datalist dinamis dengan data yang berasal dari database, cara penggunaan :<br>
``` <?php echo datalist_dinamis(NamaElement,NamaTabel,NamaField,DefaultValue);?>```<br>
Contoh : <br>
``` <?php echo datalist_dinamis('ListUser','tbl_users','nama_lengkap') ?>```

# SELECT2 DINAMIS
Fungsi ini digunaan untuk membuat select2 dinamis dengan data yang berasal dari database, cara penggunaan :<br>
``` <?php echo select2_dinamis(NamaElement,NamaTabel,NamaField,PlaceHolder);?>```<br>
Contoh : <br>
``` <?php echo select2_dinamis('ListUser','tbl_users','nama_lengkap','Masukan Nama Users') ?>```