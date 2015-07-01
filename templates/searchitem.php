<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div class="media-left">
                        <a href="<?php echo "item.php?item={$item['ID']}" ?>">
                            <img class="media-object" src="ID-char.img" width="50" height="50">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="<?php echo "item.php?item={$item['ID']}" ?>"><?php echo $item['SetName'];
                                echo ' ' . $item['PartName'] ?></a></h4>
                            <?php
                            if ($stat != '0') {
                                $statarray = get_statnamearray();
                                if ($stat == 'SRes') {
                                    echo '<p>' . $item['Elem'] . 'Resist ' . sprintf($statarray[$stat]['Format'],$item[$stat]) . '</p>';
                                }
                                else {
                                    echo '<p>' . $statarray[$stat]['FullName'] . ' ' . sprintf($statarray[$stat]['Format'],$item[$stat]) . '</p>';
                                }
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>