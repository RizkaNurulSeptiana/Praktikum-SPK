<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistem Pendukung Keputusan</title>
  </head>
  <body>
    <h1>Pengguna Listrik Subsidi dan Non Subsidi</h1>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="login-wrapper my-auto">
            <form method="post">
              <div class="form-group">
                <label for="penghasilan">Penghasilan</label>
                <input type="text" name="penghasilan" id="penghasilan" class="form-control">
              </div>
              <div class="form-group">
                <label for="Tanggungan">Tanggungan</label>
                <input type="text" name="tanggungan" id="tanggungan" class="form-control">
              </div>
              <div class="form-group">
                <label for="KondisiRumah">Kondisi Rumah</label>
                <input type="text" name="kondisirumah" id="kondisirumah" class="form-control">
              </div>
              <div class="form-group">
                <label for="DayaListrik">Daya Listrik</label>
                <input type="text" name="DayaListrik" id="DayaListrik" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="WilayahPerumahan">Wilayah Perumahan</label>
                <input type="text" name="WilayahPerumahan" id="WilayahPerumahan" class="form-control">
              </div>

              <button type="submit" name="input" class="btn btn-block login-btn mb-5" style="background-color: #e1c7a5;">Cek</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="login-wrapper my-auto">
            <form method="post">
              <div class="form-group mb-3">
                <label for="penghasilan">Output</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="email">Golongan</label>
                <input type="text" class="form-control">
              </div>

              <button type="submit" name="reset" class="btn btn-block login-btn mb-3" style="background-color: #e1c7a5;">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>

        


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>