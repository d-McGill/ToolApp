
<div class="row my-5 mx-5">
  <h1>Add Tool</h1>
<form method="post" action=<?php echo site_url('Search/addtool')?>>
  <div class="row">
    <div class="col-sm">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="description" required>
        <label for="floatingInput">Description</label>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="status" required>
        <label for="floatingInput">Status</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="asetNum" required>
        <label for="floatingInput">Aset Number</label>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="cat" required>
        <label for="floatingInput">Catagory</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="make" required>
        <label for="floatingInput">Make</label>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="model" required>
        <label for="floatingInput">Model</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="serialNum" required>
        <label for="floatingInput">Serial Number</label>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="teamIssued" required>
        <label for="floatingInput">Team Issued</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <div class="form-floating">
        <input type="date" class="form-control" id="floatingInput" name="dateIssued" required>
        <label for="floatingInput">dateIssued</label>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="serviceDate" required>
        <label for="floatingInput">Service Date</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <div class="form-floating">
        <input type="date" class="form-control" id="floatingInput" name="serviceItems" required>
        <label for="floatingInput">serviceItems</label>
      </div>
    </div>
    <div class="col-sm">
      <button class="w-80 btn btn-lg btn-primary" type="submit">Add</button>
    </div>
  </div>
</form>
</div>
