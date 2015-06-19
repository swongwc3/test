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
                        <h4 class="media-heading"><a
                                href="<?php echo "item.php?item={$item['ID']}" ?>"><?php echo $item['SetName'];
                                echo ' ' . $item['PartName'] ?></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>