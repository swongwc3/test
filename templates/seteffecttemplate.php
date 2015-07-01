<p><strong>Set Effects:</strong></p>
<?php
foreach ($items as $item) {
    if ($item['CatID'] == $effect && $item['PartName'] == '') {
        $item = process_stats($item);
        echo '<div class="row"><div class="col-xs-1"></div>';
        echo '<div class="col-xs-2">' . $item['TypeName'] . '</div>';
        foreach ($item['Stats'] as $stat) {
            if (isset($item[$stat]))
            {
                $statarray = get_statnamearray();
                if ($stat == 'PA' || $stat == 'MA' || $stat == 'PD' || $stat == 'MD') {
                    echo '<div class="col-sm-3 col-xs-10">';
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
        if (isset($item['SpEff']) && $item['SpEff'] != '') {
            echo '<div class="col-sm-8">';
            echo $item['SpEff'];
            echo '</div>';
        }
        if (isset($item['SetMessage']) && $item['SetMessage'] != '') {
            echo '<div class="col-sm-8">';
            echo $item['SetMessage'];
            echo '</div>';
        }
        echo '</div>';
    }
}
?>