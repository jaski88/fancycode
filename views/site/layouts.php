<?php
$dir = "thumbs/";
$url = "https://templated.co/items/demos/";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
//$b = scandir($dir,1);
//print_r($a);
//print_r($b);

$num = 6;
$pages = ceil( ( count($a) - 2 ) / $num );

$i = 0;
$page = 1;
?>

<div id="order" class="col-lg-12">


<?php foreach ($a as $name): if ($name == '.' || $name == '..') continue; ?>
    <?php if( $i%$num == 0 ): ?> <div id="page<?php echo ($page) ?>" class="page"> <!-- page begin --> <?php endif; ?>
    <?php $base = pathinfo($name, PATHINFO_FILENAME); ?>
    <div class="col-sm-4 portfolio-item">
        <div class="portfolio-link">
            <div class="caption">
                <div class="caption-content">
                    <a href="<?php echo $url . $base ?>" class="btn btn-success">Podgląd</a>
                    <a href="#" class="btn btn-info select" template="<?php echo $base ?>">Wybierz</a>
                </div>
            </div>

            <img src="img/loader.gif" class="img-responsive" data-src="thumbs/<?php echo $name ?>" alt="thumbs/<?php echo $name ?>">
        </div>
    </div>
    <?php if( ( $i%$num == $num - 1 ) ): ?> </div> <!-- page end --> <?php $page++; endif; ?>
    <?php $i++; ?>
<?php endforeach; ?>
 </div>
    
<div class="col-lg-12 text-center">

<nav>
    <ul class="pagination">
        <li><a class="prev" href="#">«</a></li>
        <?php for($i = 1; $i <= $pages; $i++ ): ?>
            <li><a class="goto" href="#page<?php echo $i ?>"><?php echo $i ?></a></li>        
        <?php endfor; ?>
        <li><a class="next" href="#">»</a></li>
    </ul>
</nav>
    
</div>


