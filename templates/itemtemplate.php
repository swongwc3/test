<div class="media">
    <div class="media-left">
        <a href="#">
            <img src="ID-char.img" width="50" height="50">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading"><?php echo $item['ItemName']; ?></h4>
        <?php echo $item['SetName']; ?>
        <p>Slot: <?php echo $item['TypeName']; ?></p>
        <div class="row">
            <?php
            if ($item['PA'] && $item['MA'] && $item['PD'] && $item['MD'])
            {
                echo '<div class="col-sm-4"><div class="row"><div class="col-xs-6">';
                echo $item['PA'] . '</div><div class="col-xs-6">';
                echo $item['MA'] . '</div><div class="col-xs-6">';
                echo $item['PD'] . '</div><div class="col-xs-6">';
                echo $item['MD'] . '</div></div></div>';
            }
            ?>
            <div class="col-sm-8">
                <?php
                foreach ($item['Stats'] as $stat) {
                    if ($item[$stat])
                    {
                        echo '<p>' . $stat . ' ' . $item[$stat] . '</p>';
                    }
                }
                echo $item['SRes'];
                echo $item['SpEff'];
                echo $item['SetMessage'];
                ?>
            </div>
        </div>
    </div>
</div>