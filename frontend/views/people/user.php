
<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Age</th>
        <th>Comments</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td><?php echo $data['name']?></td>
        <td><?php echo $data['surname']?></td>
        <td><?php echo $data['age']?></td>
        <td><?php echo $data['comments']?></td>
      </tr>
    </tbody>
  </table>

<a href="http://yii2.local/people/all" class="btn btn-primary">go back</a>