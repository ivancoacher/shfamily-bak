
<div class="divider-directory" style='background-image: url("<?php print variable_get("path_theme");?>/images/family_style/divider_directory.png");'>
            <div class="wrapper-details">
                <a href="#">
                    You Might Like
                </a>
            </div>  
        </div>
       
        <div class="related-content  col-xs-12">
            <?php foreach ($items as $item): ?>
               <div class="col-xs-6 related-item">
                <div class="col-xs-12 img-related"><a href="<?php print $item["url"]; ?>"><img src="<?php print $item["image"]; ?>" class="img-responsive" /></a></div>
                <div class="col-xs-12 title-related"><a href="<?php print $item["url"];?>" ><?php print $item["title"]; ?></a></div>
                <div class="col-xs-12 adress-related"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                <?php print $item["address"]; ?>
                </div>
            </div>
           <?php endforeach; ?>
            
        </div>
