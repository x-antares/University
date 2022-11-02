<?php if(isset($student)) { ?>
<div>
<form action="" method="post" class="form-group">
    <input type="id" style="display: none">
  <br>
	<p><label for="name">Name</label></p>
  <input type="name" class="form-control" aria-describedby="emailHelp" id="name" value= <?=$name?> name="name" placeholder="Jack" >
  <br>
  <p><label for="surname">Surname</label></p>
  <input type="surname" class="form-control" id="surname" value= <?=$surname?> name="surname" placeholder="Blaskovich" >
  <br>
  <p><label for="gender">Gender</label></p>
  <input type="gender" class="form-control" id="gender" value= <?=$gender?> name="gender" placeholder="male" >
  <br>
  <p><label for="category">Category</label></p>
  <input type="category" class="form-control" id="category" value= <?=$category?> name="category" placeholder="KIs" >
  <br>
  <p><label for="faculty">Faculty</label></p>
  <input type="faculty" class="form-control" id="faculty" value= <?=$faculty?> name="faculty" placeholder="FKIT" >
  <br>
  	 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php } ?>