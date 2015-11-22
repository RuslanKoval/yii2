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
        foreach ($data as $key => $value) {
           echo '<tr class="success">';
           echo '<td>'.$count.'</td>';
           echo '<td>'.$value['name'].'</td>';
           echo '<td> <a href="'.$absoluteBaseUrl.'/people/user/'.$value['id'].'">Read more</a></td>';
           echo '<td> <a href="'.$absoluteBaseUrl.'/people/delete/'.$value['id'].'">Delete</a></td>';
           echo '</tr>';
            $count++;
        }
        ?>
    </tbody>
</table>

<a href="<?php echo $absoluteBaseUrl?>/people/add" class="btn btn-primary">add new</a>