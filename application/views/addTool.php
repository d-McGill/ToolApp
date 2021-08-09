
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
        <label>Status</label>
        <select class="form-select form-control" aria-label="Default select example" name="status" required>
          <option selected disabled>Select One</option>
          <option value="active">Active</option>
          <option value="inactive">Inactive</option>
        </select>
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
        <label>Catogry</label>
        <select class="form-select form-control" aria-label="Default select example" name="cat" required>
          <option selected disabled>Select One</option>
          <option value="electric-tools">electric-tools</option>
          <option value="CAT-and-Genny">electric-tools</option>
          <option value="Hexatronic-Blowing-Kits">electric-tools</option>
          <option value="Machinary">electric-tools</option>
          <option value="Sundstrum">electric-tools</option>
          <option value="breakers">electric-tools</option>
          <option value="Compaction-Equiptment">electric-tools</option>
          <option value="Stihll saw">Stihll saw</option>
          <option value="Splicing-Equipment">electric-tools</option>
          <option value="Havs-value-per-tool">electric-tools</option>
        </select>
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
        <input type="date" class="form-control" id="floatingInput" name="serviceDate" required>
        <label for="floatingInput">Service Date</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="serviceItems" required>
        <label for="floatingInput">serviceItems</label>
      </div>
    </div>
    <div class="col-sm">
      <button class="w-80 btn btn-lg btn-primary" type="submit">Add</button>
    </div>
  </div>
</form>
</div>
