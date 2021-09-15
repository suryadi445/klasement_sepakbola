<div class="container-fluid mt-3">
    <div class="row">
        <div class="col">
            <h3 class="text-center text-capitalize">klasemen liga top eropa</h3>
            <h5 class="text-center text-capitalize"><?= $musim; ?></h5>
        </div>
    </div>
    <div class="card-deck mt-3 mb-3">
        <div class="card pb-3">
            <div class="row mt-3">
                <div class="col-md">
                    <div style="background-image: url('../app_api/assets/image/italia.png');"></div>
                    <h6 class="text-center text-capitalize">
                        <img src="<?= base_url('assets/image/italia.png') ?>" width="30px" height="30px">
                        <?= $ita ?>
                        italia
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
                            foreach ($italia as $result) : ?>
                                <tr class="font-weight-bold warna" style="font-size: 12px;">
                                    <th scope="row">
                                        <span class="nomor<?= $no; ?>"><?= $no++; ?></span>
                                    </th>
                                    <td>
                                        <img src="<?= $result['logo']; ?>" width="20px">
                                        <?= $result['team']; ?>
                                    </td>
                                    <td class="text-center"><?= $result['play'] ?></td>
                                    <td class="text-center"><?= $result['point'] ?></td>
                                    <td class="text-center"><?= $result['GD'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class='box green mr-1'></div>
                <div class="mt-n1 pr-3">Champions League</div>
                <div class='box oranye mr-1'></div>
                <div class="mt-n1 pr-3">Europa League</div>
                <div class='box red mr-1'></div>
                <div class="mt-n1 pr-3">Relegated</div>
            </div>
        </div>
        <div class="card pb-3">
            <div class="row mt-3">
                <div class="col-md">
                    <h6 class="text-center text-capitalize">
                        <img src="<?= base_url('assets/image/inggris.png') ?>" width="30px" height="30px">
                        <?= $eng ?>
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
                            foreach ($inggris as $result) : ?>
                                <tr class="font-weight-bold warna" style="font-size: 12px;">
                                    <th scope="row">
                                        <span class="nomor<?= $no; ?>"><?= $no++; ?></span>
                                    </th>
                                    <td>
                                        <img src="<?= $result['logo']; ?>" width="20px">
                                        <?= $result['team']; ?>
                                    </td>
                                    <td class="text-center"><?= $result['play'] ?></td>
                                    <td class="text-center"><?= $result['point'] ?></td>
                                    <td class="text-center"><?= $result['GD'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class='box green mr-1'></div>
                <div class="mt-n1 pr-3">Champions League</div>
                <div class='box oranye mr-1'></div>
                <div class="mt-n1 pr-3">Europa League</div>
                <div class='box red mr-1'></div>
                <div class="mt-n1 pr-3">Relegated</div>
            </div>
        </div>
        <div class="card pb-3">
            <div class="row mt-3">
                <div class="col-md">
                    <h6 class="text-center text-capitalize">
                        <img src="<?= base_url('assets/image/spanyol.png') ?>" width="30px" height="30px">
                        <?= $esp ?>
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
                            foreach ($spanyol as $result) : ?>
                                <tr class="font-weight-bold warna" style="font-size: 12px;">
                                    <th scope="row">
                                        <span class="nomor<?= $no; ?>"><?= $no++; ?></span>
                                    </th>
                                    <td>
                                        <img src="<?= $result['logo']; ?>" width="20px">
                                        <?= $result['team']; ?>
                                    </td>
                                    <td class="text-center"><?= $result['play'] ?></td>
                                    <td class="text-center"><?= $result['point'] ?></td>
                                    <td class="text-center"><?= $result['GD'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class='box green mr-1'></div>
                <div class="mt-n1 pr-3">Champions League</div>
                <div class='box oranye mr-1'></div>
                <div class="mt-n1 pr-3">Europa League</div>
                <div class='box red mr-1'></div>
                <div class="mt-n1 pr-3">Relegated</div>
            </div>
        </div>
    </div>
</div>