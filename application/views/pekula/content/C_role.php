

    <div class="container">

      <h3>Tambah Role</h3>

      <?php
        validation_errors();
        echo form_open_multipart('home/role');
       ?>
             <label for="koderole">Kode role</label>
             <input type="number" name="kode" placeholder="Kode Role"><br>

            <label for="koderole">Nama Role</label>
            <input type="text" name="role" placeholder="Kode Role"><br>

            <input type="submit" name="addrole" value="wa">

      </form>
    </div>
