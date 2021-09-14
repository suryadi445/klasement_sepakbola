<div class="container-fluid mt-3">
    <div class="row">
        <div class="col">
            <h3 class="text-center text-capitalize">klasemen liga top eropa</h3>
            <h5 class="text-center text-capitalize"><?= $musim ?></h5>
        </div>
    </div>
    <div class="card-deck mt-3 mb-3">
        <div class="card">
            <div class="row mt-3">
                <div class="col-md">
                    <div style="background-image: url('../app_api/assets/image/italia.png');"></div>
                    <h6 class="text-center text-capitalize">
                        <img src="<?= base_url('assets/image/italia.png') ?>" width="30px">
                        <?= $italia ?>
                    </h6>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md">
                    <table class="table text-capitalize">
                        <thead>
                            <tr style="font-size: 12px;">
                                <th class="text-left" style="width: 30px;">#</th>
                                <th class="text-left" style="width: 180px;">Team</th>
                                <th class="text-center" style="width: 10px;">Play</th>
                                <th class="text-center" style="width: 10px;">Points</th>
                                <th class="text-center" style="width: 10px;">GD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($klasement_italia as $posisi) : ?>
                                <tr class="font-weight-bold warna" style="font-size: 12px;">
                                    <th scope="row">
                                        <span class="nomor<?= $no; ?>"><?= $no++; ?></span>
                                    </th>
                                    <td class="danger">
                                        <a href="" class="text-decoration-none text-left" data-toggle="modal" data-target="#exampleModal">
                                            <img src="<?= $posisi['team']['logos'][0]['href']; ?>" width="20px">
                                            <?= $posisi['team']['displayName'] ?>
                                        </a>
                                    </td>
                                    <td class="text-center"><?= $posisi['stats'][3]['value'] ?></td>
                                    <td class="text-center"><?= $posisi['stats'][6]['value'] ?></td>
                                    <td class="text-center"><?= $posisi['stats'][9]['displayValue'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row mt-3">
                <div class="col-md">
                    <h6 class="text-center text-capitalize">
                        <img src="<?= base_url('assets/image/inggris.png') ?>" width="30px">
                        <?= $inggris ?>
                    </h6>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md">
                    <table class="table text-capitalize">
                        <thead>
                            <tr style="font-size: 12px;">
                                <th class="text-left" style="width: 30px;">#</th>
                                <th class="text-left" style="width: 180px;">Team</th>
                                <th class="text-center" style="width: 10px;">Play</th>
                                <th class="text-center" style="width: 10px;">Points</th>
                                <th class="text-center" style="width: 10px;">GD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($klasement_inggris as $posisi) : ?>
                                <tr class="font-weight-bold warna" style="font-size: 12px;">
                                    <th scope="row">
                                        <span class="nomor<?= $no; ?>"><?= $no++; ?></span>
                                    </th>
                                    <td>
                                        <a href="" class="text-decoration-none" data-toggle="modal" data-target="#exampleModal">
                                            <img src="<?= $posisi['team']['logos'][0]['href']; ?>" width="20px">
                                            <?= $posisi['team']['displayName'] ?>
                                        </a>
                                    </td>
                                    <td class="text-center"><?= $posisi['stats'][3]['value'] ?></td>
                                    <td class="text-center"><?= $posisi['stats'][6]['value'] ?></td>
                                    <td class="text-center"><?= $posisi['stats'][9]['displayValue'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row mt-3">
                <div class="col-md">
                    <h6 class="text-center text-capitalize">
                        <img src="<?= base_url('assets/image/spanyol.png') ?>" width="30px">
                        <?= $spanyol ?>
                    </h6>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md">
                    <table class="table text-capitalize">
                        <thead>
                            <tr style="font-size: 12px;">
                                <th class="text-left" style="width: 30px;">#</th>
                                <th class="text-left" style="width: 180px;">Team</th>
                                <th class="text-center" style="width: 10px;">Play</th>
                                <th class="text-center" style="width: 10px;">Points</th>
                                <th class="text-center" style="width: 10px;">GD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($klasement_spanyol as $posisi) : ?>
                                <tr class="font-weight-bold warna" style="font-size: 12px;">
                                    <th scope="row">
                                        <span class="nomor<?= $no; ?>"><?= $no++; ?></span>
                                    </th>
                                    <td>
                                        <a href="" class="text-decoration-none gambar" data-gambar="<?= $posisi['team']['logos'][0]['href'] ?>" data-toggle="modal" data-target="#exampleModal">
                                            <img src="<?= $posisi['team']['logos'][0]['href']; ?>" width="20px">
                                            <?= $posisi['team']['displayName'] ?>
                                        </a>
                                    </td>
                                    <td class="text-center"><?= $posisi['stats'][3]['value'] ?></td>
                                    <td class="text-center"><?= $posisi['stats'][6]['value'] ?></td>
                                    <td class="text-center"><?= $posisi['stats'][9]['displayValue'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-4">
                    <div class='box green mr-1'></div>
                    <div class="mt-n1">Champions League</div>
                </div>
                <div class="col-md-4">
                    <div class='box oranye mr-1'></div>
                    <div class="mt-n1">Europa League</div>
                </div>
                <div class="col-md-4">
                    <div class='box red mr-1'></div>
                    <div class="mt-n1">Relegated</div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt="" id="gambar">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('document').ready(function() {
        // champions
        $('.nomor1').addClass('hijau')
        $('.nomor2').addClass('hijau')
        $('.nomor3').addClass('hijau')
        $('.nomor4').addClass('hijau')
        // europa
        $('.nomor5').addClass('orange')
        $('.nomor6').addClass('orange')
        // degradasi
        $('.nomor18').addClass('merah')
        $('.nomor19').addClass('merah')
        $('.nomor20').addClass('merah')
    })
</script>