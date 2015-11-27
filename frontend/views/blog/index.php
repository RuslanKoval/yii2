<?php
use yii\helpers\Url;
$absoluteBaseUrl = Url::base(true);
?>
<table class="table">
    <thead>
    <tr>
        <th>№</th>
        <th>Name</th>
        <th>Read more</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $count = 1;
    foreach ($blog as $key => $value) {
        echo '<tr class="success">';
        echo '<td>'.$count.'</td>';
        echo '<td>'.$value['username'].'</td>';
        echo '<td> <a href="'.$absoluteBaseUrl.'/blog/post/'.$value['id'].'">Read more</a></td>';
        echo '<td> <a href="'.$absoluteBaseUrl.'/blog/delete/'.$value['id'].'">Delete</a></td>';
        echo '</tr>';
        $count++;
    }
    ?>
    </tbody>
</table>

<a href="<?php echo $absoluteBaseUrl?>/blog/create" class="btn btn-primary">add new</a>