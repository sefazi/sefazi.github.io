<div id="content">

  <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Penjualan Obat Apotik</h1>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-5">
        <div class="card shadow mb-4">
          <input type="text" id="nobukti" value="<?= $data['no']?>" hidden>
          <div class="card-body">
            <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label-sm">Nama</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Lengkap" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label-sm">Alamat</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" placeholder="Alamat" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="kelurahan" class="col-sm-4 col-form-label-sm">Perusahaan</label>
              <div class="col-sm-8">
                <select class="form-control form-control-sm" id="perusahaan" name="perusahaan">
                  <?php foreach ($data['pe'] as $pe) : ?>
                    <option value="<?= $pe['value'] ?>"><?= $pe['nama'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="obat-tab" data-toggle="tab" role="tab" aria-controls="obat" aria-selected="true">Obat</a>
              </li>
            </ul>
            <div class="tab-content mt-3">
              <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="obat-tab">
                <div class="form-group row">
                  <label for="obatname" class="col-2 col-form-label">Obat</label>
                  <div class="col-sm-10 col-md-10">
                    <div class="input-group">
                      <select class="custom-select" id="obatname">
                        <?php foreach ($data['ob'] as $ob) : ?>
                        <option value="<?= $ob['id']?>"><?= $ob['nama_obat'] ?></option>
                        <?php endforeach ?>
                      </select>
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary fill" type="button"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group row">
                      <label for="racik" class="col-sm-4 col-form-label-sm">Racik</label>
                      <div class="col-sm-8">
                        <select class="form-control form-control-sm" id="racik">
                          <option value="T" selected>Tunggal</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="jumlah" class="col-sm-4 col-form-label-sm">Jumlah</label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control form-control-sm" id="jumlah" name="jumlah" placeholder="Jumlah">
                      </div>
                    </div>
                    <div class="form-group row">
                    <label for="ppn" class="col-sm-4 col-form-label-sm">PPN</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="ppn" name="ppn" placeholder="PPN" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group row">
                      <label for="cont" class="col-sm-4 col-form-label-sm">Cont</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="cont" placeholder="Cont ^Racik">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="harga" class="col-sm-4 col-form-label-sm">Harga</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="harga" name="harga" placeholder="Harga" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="total" class="col-sm-4 col-form-label-sm">Total</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="total" name="total" placeholder="Total" disabled>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" class="col-12 btn btn-primary mb-2 add-btn">Tambah</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                  <tr>
                    <th class="col-10">Obat</th>
                    <th class="total-obat"></th>
                  </tr>
                  <tr>
                    <td class="col-10">Jasa Racik</td>
                    <td class=""><input type="number" class="form-control form-control-sm" id="jasa-racik" placeholder="0"></td>
                  </tr>
                  <tr>
                    <td class="col-10">Grand Total</td>
                    <td class="grand-total"></td>
                  </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm">
                <thead class="thead-light">
                  <tr>
                    <th class="col-6">Obat</th>
                    <th>Cont</th>
                    <th>Jml</th>
                    <th>Harga</th>
                    <th>PPN</th>
                    <th>Total</th>
                    <th>R</th>
                    <th class="col-1"></th>
                  </tr>
                </thead>
                <tbody class="list">
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <button  class="save btn btn-success btn-sm">Simpan dan Cetak</button>
      </div>
    </div>
  </div>
</div>
<!-- end of content -->
<script src="<?= BASEURL ?>/js/demo/apotik-demo.js"></script>