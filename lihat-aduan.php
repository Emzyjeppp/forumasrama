<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Riwayat Melapor</h6>
  </div>
  <div class="card-body" style="font-size: 14px">
    <label>
      Show
      <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
      entries
    </label>
            <div class="card-body" style="font-size: 14px">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Aduan</th>
                      <th>NIK</th>
                      <th>Keterangan Aduan</th>
                      <th>Foto</th>
                      <th>Status Laporan</th>
                      <th>Tindakan</th>
                    </tr>
                  </thead>
                  <tfoot>    
                <tbody>
                  <?php
                  include 'koneksi.php';
                  $sql = "SELECT*FROM pengaduan WHERE nik='$_SESSION[nik]' ORDER BY id_pengaduan DESC";
                  $query = mysqli_query($koneksi, $sql);
                  $no = 1;
                  while ($data=mysqli_fetch_array($query)) { ?>
                    <tr>
                     <td><?= $no++?></td>
                     <td><?= $data['tgl_pengaduan'];?></td>
                     <td><?= $data['nik'];?></td> 
                     <td><?= $data['isi_laporan'];?></td>
                      <td><?= $data['foto'];?></td>
                      <td><?= $data['status'];?></td>
                      <td>
                      <div class="card shadow">
                  <div class="card header">
                  <a href="?url-detail-pengaduan&id=<?= $data['id_pengaduan']?>" class="btn btn-primary btc-icon-split">
                      <span class="icon text-white-5">
                          <i class="fa fa-info"></i>
                      </span>
                      <span class="text">Detail Laporan</span>
                  </a>
                  <a href="masyarakat.php" class="btn btn-info btc-icon-split">
                      <span class="icon text-white-5">
                          <i class="fa fa-info"></i>
                      </span>
                      <span class="text">Lihat Tanggapan</span>
                      </td>
                      </a>
                      </td>
                  </tr>
                  
                    <?php }?>
                
                    <tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
