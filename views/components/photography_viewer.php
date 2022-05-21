<?php
function loadImgs(){
    $img_names = array_diff(scandir('../resources/imgs/my-photos/'), array('..', '.'));
    $img_paths = [];
    foreach($img_names as $img_name){
        $path = "../resources/imgs/my-photos/" . $img_name;
        array_push($img_paths, $path);
    }
    foreach($img_paths as $img_path){
        $img_width = getimagesize($img_path)[0];
        $img_height = getimagesize($img_path)[1];
        ?>
        <a href=<?php echo $img_path ?>
            data-pswp-width=<?php echo $img_width ?>
            data-pswp-height=<?php echo $img_height ?>
            target="_blank">
            <img src=<?php echo $img_path ?> alt="Sadr Region Nebula" />
        </a>
        <?php
    }
}
?>