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
                foreach ($item['Stats'] as $stat) {
                    if (isset($item[$stat]))
                    {
                        $statarray = get_statnamearray();
                        if ($stat == 'PA' || $stat == 'MA' || $stat == 'PD' || $stat == 'MD') {
                            echo '<div class="col-sm-3 col-xs-6">';
                            echo $statarray[$stat]['Abbr'] . ' +' . sprintf($statarray[$stat]['Format'], $item[$stat]);
                            echo '</div>';
                        }
                        elseif ($stat == 'SRes') {
                            $elemarray = get_elems();
                            echo '<div class="col-sm-6">';
                            echo $elemarray[$item['ElemID']]['ElemName'] . ' ' . sprintf($statarray[$stat]['Format'],$item[$stat]);
                            echo '</div>';
                        }
                        else {
                            echo '<div class="col-sm-6">';
                            echo $statarray[$stat]['FullName'] . ' ' . sprintf($statarray[$stat]['Format'],$item[$stat]);
                            echo '</div>';
                        }
                    }
                }
                if (isset($item['SpEff'])) {
                    echo '<div class="col-sm-8">';
                    echo $item['SpEff'];
                    echo '</div>';
                }
                if (isset($item['SetMessage'])) {
                    echo '<div class="col-sm-8">';
                    echo $item['SetMessage'];
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>