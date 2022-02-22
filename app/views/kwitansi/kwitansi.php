
        <div id="content">
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Cetak Kwitansi Rawat Jalan</h1>
                </div>

                <div class="d-flex align-items-end flex-column">
                    <div class="p-2">
                        <a href="<?= BASEURL; ?>/kwitansi/add" class="btn btn-primary btn-sm mb-2" role="button"><i class="fa fa-plus">&nbsp Tambah baru</i></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-7">
                        <!-- Data Tables -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ACT</th>
                                                <th>NO KWITANSI</th>
                                                <th>NOREG</th>
                                                <th>NAMA</th>
                                                <th>PERUSAHAAN</th>
                                                <th>POLI</th>
                                                <th>DOKTER</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <!--<tbody>
                                            <tr>
                                                <th>1</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </tbody>-->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
