<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Layang - Layang</a>
          </div>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="d-flex flex-column h-100">
          <div>
            <button type="button" class="btn btn-primary m-3 modalUpload" data-toggle="modal" data-target="#formModal">
              Upload Data
            </button>
            <a href="<?= BASEURL ?>/auth/logout" class="btn btn-danger m-3">Log Out</a>
          </div>
          <?php Flasher::flash(); ?>

          <div class="d-flex justify-content-center m-2 h-100">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Foto Layangan</th>
                  <th>Nama</th>
                  <th>Ukuran</th>
                  <th>No. Layangan</th>
                  <th>Ukuran Tali</th>
                  <th>Warna</th>
                  <th>Jenis</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php if (!empty($data["layangan"])) : ?>
                <?php foreach ($data["layangan"] as $lyg) : ?>
                  <tbody>
                    <tr>
                      <td></td>
                      <td><img src="<?= BASEURL ?>/img/<?= $lyg["foto_layangan"] ?>" class="" alt="<?= $lyg["nama"] ?>" width="25px" /></td>
                      <td><?= $lyg["nama"] ?></td>
                      <td><?= $lyg["ukuran"] ?></td>
                      <td><?= $lyg["no_layangan"] ?></td>
                      <td><?= $lyg["ukuran_tali"] ?></td>
                      <td><?= $lyg["warna_layangan"] ?></td>
                      <td><?= $lyg["jenis"] ?></td>
                      <td><?= $lyg["kategori"] ?></td>
                      <td>
                        <!-- Button trigger modal -->
                        <a href="<?= BASEURL; ?>/dashboard/edit/<?= $lyg['id'] ?>" class="modalUbah" data-toggle="modal" data-id="<?= $lyg['id'] ?>" data-target="#formModal">Edit</a> |
                        <a href="<?= BASEURL; ?>/dashboard/hapus/<?= $lyg['id'] ?>" onclick="return confirm('yakin? ')">Hapus</a>
                      </td>
                    </tr>
                  </tbody>
                <?php endforeach; ?>
              <?php else : ?>
                <tr>
                  <td colspan="10" class="text-center">Data not Found</td>
                </tr>
              <?php endif ?>
            </table>
          </div>
          <!-- End of Main Content -->

          <!-- Footer -->
          <footer class=" sticky-footer bg-primary text-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
              </div>
            </div>
          </footer>
          <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Modal -->
      <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Upload Data Layang - Layang</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= BASEURL ?>/dashboard/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="mb-3">
                  <label class="form-label">Nama Layang-Layang :</label>
                  <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                  <label class="form-label">Ukuran Layang-Layang :</label>
                  <input type="number" name="ukuran" class="form-control" id="ukuran">
                </div>
                <div class="mb-3">
                  <label class="form-label">No. Layang-Layang :</label>
                  <input type="number" name="no_layangan" class="form-control" id="no_layangan">
                </div>
                <div class="mb-3">
                  <label class="form-label">Warna Layang-Layang :</label>
                  <input type="text" name="warna_layangan" class="form-control" id="warna_layangan">
                </div>
                <div class="mb-3">
                  <label class="form-label">Ukuran Tali Layang-Layang :</label>
                  <input type="number" name="ukuran_tali" class="form-control" id="ukuran_tali">
                </div>
                <div class="mb-3">
                  <label class="form-label">Jenis Layang-Layang :</label>
                  <select name="id_jenis" id="id_jenis" class="form-select w-100 p-2 rounded" aria-label="Default select example">
                    <option selected>Pilih Jenis Layang-Layang :</option>
                    <option value="1J">Bebean</option>
                    <option value="2J">Janggan</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Kategori Layang-Layang :</label>
                  <select name="id_kategori" id="id_kategori" class="form-select w-100 p-2 rounded" aria-label="Default select example">
                    <option selected>Pilih Kategori :</option>
                    <option value="1K">Anak - anak</option>
                    <option value="2K">Remaja</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Upload Gambar Layang-Layang :</label>
                  <input name="foto_layangan" id="foto_layangan" class="form-control" type="file" id="formFile">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            </form>
          </div>
        </div>
      </div>