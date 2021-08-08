<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row my-5">
    <p style="color:GREEN;font-weight:bold;"><?php echo $this->session->flashdata('message')?></p>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        Upcoming Services
      </div>
      <div class="card-body">
        <?php

        if($r->result()==False){
          echo 'No Upcoming ';
        }
        else{
          echo"
          <table class='table'>
          <tr>
            <th scope='col'>Aset Number</th>
            <th scope='col'>Date</th>
            <th scope='col'>Action</th>
            </tr>";
        foreach ($r->result() as $row) {
echo"
<tr>
  <td>$row->asetNum</td>
  <td>$row->serviceDate</td>
  <td>
  <form method='post' action=".site_url('Search/toolView').">
      <input name='toolid' value='$row->toolId' style='display:none;'></input><button type='submit' class='btn btn-primary btn-lg'>View</button></form>
  </td>
</tr>
";  }

echo "</table>";

};
          ?>



      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        Parts
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
