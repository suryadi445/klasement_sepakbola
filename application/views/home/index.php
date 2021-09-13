<div class="container-fluid mt-3">
    <div class="row">
        <div class="col">
            <h3 class="text-center text-capitalize">klasemen liga top eropa</h3>
            <h5 class="text-center text-capitalize"><?= $musim ?></h5>
        </div>
    </div>
    <div class="card-deck mt-3">
        <div class="card">
            <div class="row mt-3">
                <div class="col-md">
                    <h6 class="text-center text-capitalize"><?= $italia ?></h6>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md">
                    <table class="table text-center text-capitalize" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Team</th>
                                <th scope="col">Play</th>
                                <th scope="col">Win</th>
                                <th scope="col">Lose</th>
                                <th scope="col">Draw</th>
                                <th scope="col">Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($klasement_italia as $posisi) : ?>
                                <tr>
                                    <th scope="row"><?= $posisi['stats'][8]['value'] ?></th>
                                    <td>
                                        <a href="" class="text-decoration-none" data-toggle="modal" data-target="#exampleModal"><?= $posisi['team']['abbreviation'] ?></a>
                                    </td>
                                    <td><?= $posisi['stats'][3]['value'] ?></td>
                                    <td><?= $posisi['stats'][0]['value'] ?></td>
                                    <td><?= $posisi['stats'][1]['value'] ?></td>
                                    <td><?= $posisi['stats'][2]['value'] ?></td>
                                    <td><?= $posisi['stats'][6]['value'] ?></td>
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
                    <h6 class="text-center text-capitalize"><?= $inggris ?></h6>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md">
                    <table class="table text-center text-capitalize" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Team</th>
                                <th scope="col">Play</th>
                                <th scope="col">Win</th>
                                <th scope="col">Lose</th>
                                <th scope="col">Draw</th>
                                <th scope="col">Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($klasement_inggris as $posisi) : ?>
                                <tr>
                                    <th scope="row"><?= $posisi['stats'][8]['value'] ?></th>
                                    <td>
                                        <a href="" class="text-decoration-none" data-toggle="modal" data-target="#exampleModal"><?= $posisi['team']['abbreviation'] ?></a>
                                    </td>
                                    <td><?= $posisi['stats'][3]['value'] ?></td>
                                    <td><?= $posisi['stats'][0]['value'] ?></td>
                                    <td><?= $posisi['stats'][1]['value'] ?></td>
                                    <td><?= $posisi['stats'][2]['value'] ?></td>
                                    <td><?= $posisi['stats'][6]['value'] ?></td>
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
                    <h6 class="text-center text-capitalize"><?= $spanyol ?></h6>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md">
                    <table class="table text-center text-capitalize" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Team</th>
                                <th scope="col">Play</th>
                                <th scope="col">Win</th>
                                <th scope="col">Lose</th>
                                <th scope="col">Draw</th>
                                <th scope="col">Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($klasement_spanyol as $posisi) : ?>
                                <tr>
                                    <th scope="row"><?= $posisi['stats'][8]['value'] ?></th>
                                    <td>
                                        <a href="" class="text-decoration-none gambar" data-gambar="<?= $posisi['team']['logos'][0]['href'] ?>" data-toggle="modal" data-target="#exampleModal"><?= $posisi['team']['abbreviation'] ?>
                                        </a>
                                    </td>
                                    <td><?= $posisi['stats'][3]['value'] ?></td>
                                    <td><?= $posisi['stats'][0]['value'] ?></td>
                                    <td><?= $posisi['stats'][1]['value'] ?></td>
                                    <td><?= $posisi['stats'][2]['value'] ?></td>
                                    <td><?= $posisi['stats'][6]['value'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
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