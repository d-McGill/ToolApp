<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container my-3 mx-3">
  <div class="row">
    <div class="col-sm">
      <ul class="nav nav-tabs" id="nav-tab" role="tablist">
   <li><a href="#a" data-toggle="tab" class="nav-link active">Tool Infomation</a></li>
   <li><a href="#b" data-toggle="tab" class="nav-link ">Edit Tool</a></li>
   <li><a href="#c" data-toggle="tab" class="nav-link ">Update Service Date</a></li>

</ul>

<div class="tab-content">
   <div class="tab-pane active py-3" id="a">
      <?php foreach ($results->result() as $row) {?>
        <h1><?php echo $row->description; if($row->status=='active'){?>
          <strong style="background-color:GREEN;"><?php echo $row->status;?></strong>
        <?php } else{ ?>  <strong style="background-color: RED;"><?php echo $row->status;?></strong>       <?php }?> </h1>
        <div class="row">
          <table class="table">
          <tbody>
            <tr>
              <td>Asset Number</td>
              <td><?php echo $row->asetNum; ?></td>
            </tr>
            <tr>
              <td>Catagory</td>
              <td><?php echo $row->cat; ?></td>
            </tr>
            <tr>
              <td>Serial Number</td>
              <td><?php echo $row->serialNum;?></td>
            </tr>
            <tr>
              <td>Team Issued</td>
              <td><?php echo $row->teamIssued;?></td>
            </tr>
            <tr>
              <td>Date Issued</td>
              <td><?php echo $row->dateIssued;?></td>
            </tr>
            <tr>
              <td>Service Date</td>
              <td><?php echo $row->serviceDate;?></td>
            </tr>
            <tr>
              <td>Servicable Parts</td>
              <td><?php echo $row->serviceItems;?></td>
            </tr>
            <tr>
              <td>User Manual</td>
              <td> <button type="button" class="btn btn-primary">View</button></td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>
    <div class="tab-pane" id="b">
<div class="row my-4 mx-2">
  <div class="row">
  <div class="col-sm">
  <form method="post" action=<?php echo site_url('Search/updateTool')?>>
      <input type="text" style="display:none;" value="<?php echo $row->toolId;?>" name="toolID">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="description">
      <label for="floatingInput">Description: <?php echo $row->asetNum; ?></label>
    </div>
  </div>
    <div class="col-sm">
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingInput" name="aset">
    <label for="floatingInput">AsetNUmer: </label>
  </div>
</div>
</div>
<div class="row">
<div class="col-sm">
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingInput" name="cat">
    <label for="floatingInput"> catogry</label>
  </div>
</div>
<div class="col-sm">
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingInput" name="serialNum">
    <label for="floatingInput">Serial Number</label>
  </div>
</div>
</div>
<div class="row">
<div class="col-sm">
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingInput" name="teamIssued">
    <label for="floatingInput">TeamIssued</label>
  </div>
</div>
<div class="col-sm">
  <div class="form-floating">
    <input type="date" class="form-control" id="floatingInput" name="dateIssued">
    <label for="floatingInput">Date Issued</label>
  </div>
</div>
</div>
<div class="row">
<div class="col-sm">
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingInput" name="serviceItems">
    <label for="floatingInput">Servicable Parts</label>
  </div>
</div>
<div class="col-sm">
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingInput" name="model">
    <label for="floatingInput">Model</label>
  </div>
</div>
</div>
  <button class="w-80 btn btn-lg btn-primary" type="submit">update</button>
</form>

</div>
</div>
    <div class="tab-pane" id="c">


          <table class="table">
      <tbody>
      <tr>
        <td>Service Date</td>
          <td><input type="date" class="form-control" id="floatingInput" placeholder="<?php echo $row->serviceDate?>" name="serviceDate"></td>
      </tr>
      <tr>
        <td>Update</td>
        <td><button type="button" class="btn btn-primary">Update</button></td>
      </tr>
    </tbody>
  </table>


    </div>
    </div>
    </div>
      <div class="col-sm-4">
        <div class="list-group my-5">
          <?php if ($row->status == 'active'){?>
            <form method="post" action=<?php echo site_url('Search/changeStat')?>>
              <input type="text" style="display:none;" value="<?php echo $row->toolId;?>" name="toolID">
              <input type="text" style="display:none;" value="inactive" name="status">
          <button type="submit" class="list-group-item list-group-item-warning">Mark As inactive</button>
        </form>
      <?php } else{?>
        <form method="post" action=<?php echo site_url('Search/changeStat')?>>
          <input type="text" style="display:none;" value="<?php echo $row->toolId;?>" name="toolID">
          <input type="text" style="display:none;" value="active" name="status">
          <button type="submit" class="list-group-item list-group-item-success">Mark As Active</button>
      </form>
    <?php }?>
    <form method="post" action=<?php echo site_url('Search/byeTool')?>>
      <input type="text" style="display:none;" value="<?php echo $row->toolId;?>" name="toolID">
      <button type="submit" class="list-group-item list-group-item-danger" >Delete Tool</button>
  </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
