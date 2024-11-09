<div class="card text-center">
        <div class="card-header">
                Daftar
            </div>
                <div class="card-body">
                    <form action="<?= site_url('mahasiswa/proses_daftar')?>" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="nama" name='nama' class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">tanggal lahir</label>
                            <input type="date" name='lahir' class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nomor Hp</label>
                            <input type="number" name='hp' class="form-control" id="exampleFormControlInput1" placeholder="08xxxxxxxxxx">
                        </div>

                    </div>
                        <div class="card-footer text-body-secondary">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                        
                    </form>
                        
</div>