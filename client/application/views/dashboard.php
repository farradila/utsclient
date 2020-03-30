        <section id="features">
                  <div class="container">
                  <div class="card shadow mb-4">
                  <div class="card-header py-3">
                  <div class="card-body">
                  <div class="table-responsive">
                  <table class="table table-bordered" id="datatables" width="100%" cellspacing="0">
                    <h2 align="center">Data Obat</h2>
                    <thead>
                      <tr>
                        <th>Nomor</th>
                        <th>kode Obat</th>
                        <th>Merk Obat</th>
                        <th>Jenis Obat</th>
                        <th>Harga</th>
                        <th>Tanggal Kadaluarsa</th>
                        <th>Stok</th>
                      </tr> 
                    </thead>

                 <tbody>
                      <?php
                        for ($i= 0; $i < count($obat['data']); $i++) { ?>                    
                        <tr>
                        <td> <?= $i+1 ?></td>
                        <td> <?= $obat['data'][$i]['kode_obat'] ?></td>
                        <td> <?= $obat['data'][$i]['merk_obat'] ?></td>
                        <td> <?= $obat['data'][$i]['jenis_obat'] ?></td>
                        <td> <?= $obat['data'][$i]['harga'] ?></td>
                        <td> <?= $obat['data'][$i]['tanggal_kadaluarsa'] ?></td>
                        <td> <?= $obat['data'][$i]['stok'] ?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                </table>
              </div>
        </section>