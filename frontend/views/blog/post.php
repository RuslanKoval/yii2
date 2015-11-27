<?php
use yii\helpers\Url;
$absoluteBaseUrl = Url::base(true);
?>

<div class="row">

        <?php
        foreach($post as $key => $value)
        {
            echo '<div class="col-md-6 col-md-offset-3 text-center"><h1>' . $value['title'] . '</h1></div>';
            echo '<div class="col-md-12"><p>' . $value['disc'] . '</p></div>';
            echo '<div class="col-md-4"><span>' . date('Y-m-d H:i:s', $value['date']) . '</span></div>';
            echo '<hr class="col-md-12">';
        }
        ?>

</div>


<a href="<?php echo $absoluteBaseUrl?>/blog" class="btn btn-primary">go back</a>
