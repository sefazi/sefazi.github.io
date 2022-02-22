
        <div id="content">

        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Pasien</h1>
            </div>

            <!-- DataTales Example -->
            <div class="d-flex align-items-end flex-column">
                <div class="p-2">
                    <a href="<?= BASEURL; ?>/data_pasien/add" class="btn btn-primary btn-sm mb-2" role="button"><i class="fa fa-plus">&nbsp Tambah baru</i></a>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-7">
                    <!-- Data Tables -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Pasien</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="col-1">ACT</th>
                                            <th class="col-1">NO MR</th>
                                            <th>NAMA</th>
                                            <th class="col-2">TANGGAL LAHIR</th>
                                            <th class="col-2">JENIS KELAMIN</th>
                                            <th class="col-2">ALAMAT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data['dtp'] as $dtp) : ?>
                                        <tr>
                                            <th>
                                                <a href="" class="btn-light" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                <a href="" class="btn-light" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="fas fa-fw fa-times"></span></a>
                                                <a href="" class="btn-light" data-toggle="tooltip" data-placement="top" title="Daftar"><span class="fas fa-fw fa-align-justify"></span></a>
                                            </th>
                                            <th><?= $dtp['nomr'] ?></th>
                                            <th><?= $dtp['nama'] ?></th>
                                            <th><?= $dtp['ttl'] ?></th>
                                            <th><?= $dtp['jk'] ?></th>
                                            <th><?= $dtp['alamat'] ?></th>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
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

        