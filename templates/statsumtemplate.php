<div class="row">
    <div class="col-sm-5">
        <p><strong><?php echo $setsum['Title']; ?></strong></p>
        <?php
        if ($setsum['PA'] && $setsum['MA'] && $setsum['PD'] && $setsum['MD'])
        {
            echo '<div class="row"><div class="col-xs-6">';
            echo 'PA: ' . $setsum['PA'] . '</div><div class="col-xs-6">';
            echo 'MA: ' . $setsum['MA'] . '</div><div class="col-xs-6">';
            echo 'PD: ' . $setsum['PD'] . '</div><div class="col-xs-6">';
            echo 'MD: ' . $setsum['MD'] . '</div></div>';
        }
        ?>
    </div>
    <div class="col-sm-7">
        <div class="row">
            <?php
            foreach ($setsum['Stats'] as $stat) {
                if ($setsum[$stat])
                {
                    echo '<div class="col-xs-6">' . $stat . ' ' . $setsum[$stat] . '</div>';
                }
            }
            if ($setsum['SRes']) {
                echo '<div class="col-xs-6">' . $setsum['SRes'] . '</div>';
            }
            ?>
        </div>
    </div>
</div>