<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row my-5">
    <p style="color:GREEN;font-weight:bold;"><?php echo $this->session->flashdata('message')?></p>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        Upcoming Services
      </div>
      <div class="card-body">
        <h5 class="card-title">Services</h5>
        <p class="card-text">Within 30 days of the service date.</p>
        <?php

        if($r->result()==False){
          echo 'No Upcoming ';
        }
        else{
        foreach ($r->result() as $row) {



echo" <form method='post' action=".site_url('Search/toolView').">
    <input name='toolid' value='$row->toolId' style='display:none;'></input><button type='submit' class='btn btn-primary btn-lg'>$row->asetNum</button></form>
    </td>
  </tr>

";  }};
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
