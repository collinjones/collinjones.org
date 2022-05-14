<?php

$pages = array(
    "About Me" => "about.php",
	"Computer Science" => "computer-science.php",
	"Music" => "music.php",
	"Photography" => "photography.php",
	"Social" => "social.php"
);
$cur_page = "";
$title = "";

function str_equal($s1, $s2){
    if(strcmp($s1, $s2) == 0){
        return true;
    }
    return false;
}

function set_navigation_dependencies($current_page, $title) {
    $GLOBALS['cur_page'] = $current_page;
    $GLOBALS['title'] = $title;
}

function selected_navbar_html() {
    // Function that will generate html based on the currently selected page. For the navbar in mobile mode

    foreach($GLOBALS['pages'] as $key => $value) {
        if(str_equal($GLOBALS['cur_page'], $value)){
            ?>
            <li><a id="selected" href=<?php echo $GLOBALS['cur_page'] ?>><?php echo $GLOBALS['title'] ?></a></li>
            <?php
        }
        else{
            ?>
            <li><a href=<?php echo $value ?>><?php echo $key ?></a></li>
            <?php
        }
    }
}

function selected_sidebar_html(){
    // Function that will generate html based on the currently selected page. For the sidebar in wide mode

    foreach($GLOBALS['pages'] as $key => $value){
        if(str_equal($GLOBALS['cur_page'], $value)) {
            ?>
            <tr>
                <td><a id="selected" href=<?php echo $GLOBALS['cur_page']?> ><?php echo $GLOBALS['title'] ?></a></td>
            </tr>
            <?php
        }
        else {
            ?>
            <tr>
                <td><a href=<?php echo $value ?>><?php echo $key ?></a></td>
            </tr>
            <?php
        }
    }
}

function generate_navigation_html(){

    ?>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php
                    selected_navbar_html();
                    ?>  
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="sidenav-content">
        <a style="padding:0;" href="about.php" ><img src="../resources/imgs/self-portraits/collin2.jpg"></a>
        <table style="text-align: center;">
            <?php
            selected_sidebar_html();
            ?>
        </table>
    </div>

    <?php

}

?>

