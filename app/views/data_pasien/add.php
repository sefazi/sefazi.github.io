<div id="content">

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 mb-4 text-gray-800">Form Data Pasien</h1>
    </div>
    <form class="needs-validation" action="<?= BASEURL; ?>/data_pasien/added" method="POST">
    <button type="submit" class="btn btn-outline-dark mb-2">Simpan</button>
    <button type="reset" class="btn btn-outline-dark mb-2">Reset</button>
    <a href="<?= BASEURL; ?>/data_pasien" class="btn btn-outline-dark mb-2">Kembali</a>
    <div class="row">
        <div class="col-sm-12 px-3">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark">Data Pasien</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" id="nomr" name="nomr" placeholder="First name" value="<?= $data['ins']; ?>" hidden>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-4 col-form-label-sm">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-4 col-form-label-sm">Alamat</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control form-control-sm" id="alamat" name="alamat" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rt" class="col-sm-4 col-form-label-sm">RT/RW</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" id="rt" name="rt" placeholder="RT">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" id="rw" name="rw" placeholder="RW">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kelurahan" class="col-sm-4 col-form-label-sm">Kelurahan</label>
                                <div class="col-sm-8">
                                    <select class="form-control form-control-sm" id="kelurahan" name="kelurahan">
                                        <?php foreach ($data['kl'] as $pu) : ?>
                                            <option value="<?= $pu['value']?>"><?= $pu['nama'] ?></option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kecamatan" class="col-sm-4 col-form-label-sm">Kecamatan</label>
                                <div class="col-sm-8">
                                    <select class="form-control form-control-sm" id="kecamatan" name="kecamatan">
                                        <?php foreach ($data['kc'] as $pu) : ?>
                                            <option value="<?= $pu['value']?>"><?= $pu['nama'] ?></option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kota" class="col-sm-4 col-form-label-sm">Kota</label>
                                <div class="col-sm-8">
                                    <select class="form-control form-control-sm" id="kota" name="kota">
                                        <?php foreach ($data['ko'] as $ko) : ?>
                                            <option value="<?= $ko['value']?>"><?= $ko['nama'] ?></option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodepos" class="col-sm-4 col-form-label-sm">Kode Pos</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="kodepos" name="kodepos" placeholder="Kode Pos">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <label for="kotalahir" class="col-sm-4 col-form-label-sm">Tempat/Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm" id="kotalahir" name="kotalahir" placeholder="Kota lahir" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control form-control-sm" id="tgllahir" name="ttl" placeholder="dd-mm-yyyy" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis1" class="col-sm-4 col-form-check-label-sm">Jenis kelamin</label>
                                <div class="col-sm-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="jenis1" value="L" required>
                                        <label class="form-check-label" for="jenis1">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="jenis2" value="P" required>
                                        <label class="form-check-label" for="jenis2">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telp" class="col-sm-4 col-form-label-sm">Telp</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="telp" name="telp" placeholder="Nomor Telp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hp" class="col-sm-4 col-form-label-sm">Handphone</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="hp" name="hp" placeholder="Nomor Telp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="agama" class="col-sm-4 col-form-label-sm">Agama</label>
                                <div class="col-sm-8">
                                    <select class="form-control form-control-sm" id="agama" name="agama">
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="PROTESTAN">PROTESTAN</option>
                                        <option value="KATOLIK">KATOLIK</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="BUDDHA">BUDDHA</option>
                                        <option value="KHONGHUCU">KHONGHUCU</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="wni" class="col-sm-4 col-form-check-label-sm">Warga Negara</label>
                                <div class="col-sm-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="wn" id="wni" value="WNI" required>
                                        <label class="form-check-label" for="wni">WNI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="wn" id="wnik" value="WNIK" required>
                                        <label class="form-check-label" for="wnik">WNI Keturunan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="wn" id="wna" value="WNA" required>
                                        <label class="form-check-label" for="wna">WNA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pendidikan" class="col-sm-4 col-form-label-sm">Pendidikan</label>
                                <div class="col-sm-8">
                                    <select class="form-control form-control-sm" id="pendidikan" name="pendidikan">
                                        <?php foreach ($data['pnd'] as $pnd) : ?>
                                            <option value="<?= $pnd['value']?>"><?= $pnd['nama'] ?></option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pekerjaan" class="col-sm-4 col-form-label-sm">Pekerjaan</label>
                                <div class="col-sm-8">
                                    <select class="form-control form-control-sm" id="pekerjaan" name="pekerjaan">
                                        <?php foreach ($data['pe'] as $pu) : ?>
                                            <option value="<?= $pu['value']?>"><?= $pu['nama'] ?></option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-outline-dark mb-2">Simpan</button>
    <button type="reset" class="btn btn-outline-dark mb-2">Reset</button>
    <a href="<?= BASEURL; ?>/data_pasien" class="btn btn-outline-dark mb-2">Kembali</a>
    </form>
</div>

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

