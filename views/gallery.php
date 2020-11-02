<?php

//2.1
foreach ($images as $image):
    $imgUrl = "/img/{$image['path']}";
    ?>
<!--2.2-->
    <a href="/photo.php?id=<?=$image['id']?>" target="_blank">
        <img src="<?= $imgUrl ?>">
    </a>
<? endforeach;?>




