<section class="section">
          <div class="section-header">
            <h1>Tambah data</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Editor</div>
            </div>
          </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Form tambah</h4>
                  </div>
                  <div class="card-body">
                    <form action="mod/sambutan/aksi_tambah.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Label</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" name="deskripsi"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="file" name="foto">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>