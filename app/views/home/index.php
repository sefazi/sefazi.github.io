
      <!-- Main Content -->
      <div id="content">
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="<?= BASEURL; ?>/rawat_jalan/add" target="_blank">INI CONTOH LINK BUKA DI TAB BARU</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card bg-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-3">Medical Record</div>
                      <div class="h5 mb-0 font-weight-bold text-white"><?= $data['brs']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="<?= BASEURL; ?>/data_pasien" class="card-link">View detail</a>
                </div>
			        </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card bg-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-3">Pasien RJ Hari Ini</div>
                      <div class="h5 mb-0 font-weight-bold text-white">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-stethoscope fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="<?= BASEURL; ?>/rawat_jalan" class="card-link">View detail</a>
                </div>
			        </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card bg-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-3">Belum Lunas</div>
                      <div class="h5 mb-0 font-weight-bold text-white">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="<?= BASEURL; ?>/laporan/piutang" class="card-link">View detail</a>
                </div>
			        </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card bg-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-3">Kwitansi</div>
                      <div class="h5 mb-0 font-weight-bold text-white">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="<?= BASEURL; ?>/kwitansi" class="card-link">View detail</a>
                </div>
			        </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>