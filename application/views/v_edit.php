
<body>
	<center>
        <h3>Edit Data</h3>
    </center>

    <?php foreach($user as $u){ ?>
        <form action="<?php echo base_url(). 'web/update'; ?>" method="post">
		    <table style="margin:20px auto;">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                    <input type="text" name="nama" value="<?php echo $u->nama ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
            

        </form>	
    <?php } ?>
</body>