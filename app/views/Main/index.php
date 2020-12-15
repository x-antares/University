
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Gender</th>
      <th scope="col">Category</th>
      <th scope="col">Faculty</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      

    </tr>
  </thead>
  <tbody>
    <div class="container">
  <?php if(!empty($students)): ?>
    <?php foreach ($students as $student): ?>
    <tr>
      <th scope="row"><?=$student->getId()?></th>
      <td><?=$student->getName()?></td>
      <td><?=$student->getSurname()?></td>
      <td><?=$student->getGender()?></td>
      <td><?=$student->getCategory()?></td>
      <td><?=$student->getFaculty()?></td>
      <td><a class="nav-link" href="../Main/edit">Edit</a></td>
      <td><a class="nav-link" href="../Main/delete">Delete</a></td>    
    </tr>
    <?php endforeach;?>
  <?php endif; ?>


  </tbody>
</table>




