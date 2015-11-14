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
        foreach ($data as $key => $value) {
           echo '<tr class="success">';
           echo '<td>'.$key.'</td>';
           echo '<td>'.$value['name'].'</td>';
           echo '<td> <a href="http://yii2.local/people/user/'.$value['id'].'">Read more</a></td>';
           echo '<td> <a href="http://yii2.local/people/delete/'.$value['id'].'">Delete</a></td>';
           echo '</tr>';
        }
        ?>
    </tbody>
</table>

