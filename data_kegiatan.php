<?php
include 'config.php';
$query = "select * from tb_user";
$hasil = $koneksi->query($query);
?>
<script>
    function ConfirmDelete() {
        var del =confirm("Yakin data akun akan di hapus");
        if (del)
            return true;
        else
            return false;
    }
</script>
<!-- Modal Tambah Data-->
 <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="tmb_user.php" method="post">
                <div class="modal-body">
                    <input type="text" name="username" class="form-control" placeholder="Username"  required><br>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
?>
    <!-- Modal Edit -->
    <div class="modal fade" id="edit<?php echo $row['id_user']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                 <form action="edit_user.php" method="POST">
                    <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                    <div class="modal-body">
                        <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>"><br>
                        <input type="text" name="password" class="form-control" value="<?php echo $row['password']; ?>"><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php

?>
</tbody>