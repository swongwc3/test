<div class="row">
    <div class="col-sm-5">
        <p><strong><?php echo $setsum['Title']; ?></strong></p>
        <?php

        if ($setsum['PA'] || isset($setsum['MA']) || isset($setsum['PD']) || isset($setsum['MD']))
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
                if (isset($setsum[$stat]) && $setsum[$stat] != '0')
                {
                    echo '<div class="col-xs-6">' . $stat . ' ' . $setsum[$stat] . '</div>';
                }
            }
            if (isset($setsum['Elem'])) {
                echo '<div class="col-xs-6">' . $setsum['Elem'] . ' Resist +' . $setsum['SRes'] . '</div>';
            }

            if (isset($setsum['SpEff'])) {
                echo '<div class="col-xs-12">' . $setsum['SpEff'] . '</div>';
            }
            ?>
        </div>
    </div>
</div>