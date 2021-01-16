<div class="container">
    <h1>Pridanie novej otazky </h1>
</div>



<?php /** @var \App\Models\Otazka $data */ ?>
<div class="container">
    <form method="post">
        <?php if (!empty($data['model'])) { ?>
            <input type="hidden" value="<?= $data['model']->getId() ?>" name="id">
        <?php } ?>

        <h4>Otazka: </h4>
        <input class="form-control" placeholder="Otazka" type="text" name="otazka" value="<?= ( !empty($data['model']) ? $data['model']->getOtazka() : "") ?>" required>
        <br>
        <?php if (isset($data['err']['otazka'])) {
            foreach ($data['err']['otazka'] as $err) { ?>
                <div><?= $err ?></div>
            <?php } ?>
        <?php } ?>

        <h4>Odpoved: </h4>
        <input class="form-control" placeholder="Odpoved" type="text" name="odpoved" value="<?= ( !empty($data['model']) ? $data['model']->getOdpoved() : "") ?>">
        <br>

        <h4>Pytajuceho id: </h4>
        <input class="form-control" placeholder="Pytajuci_id" type="text" name="pytajuci_id" value="<?= ( !empty($data['model']) ? $data['model']->getPytajuciId() : "") ?>">
        <br>
        <input type="submit" value="Odoslat">


    </form>
</div>