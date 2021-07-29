<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row my-5">
    <p style="color:GREEN;font-weight:bold;"><?php echo $this->session->flashdata('message')?></p>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        Featured
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        <?php

/// CURRENT PROBLEM --------------------------------------
        // add 3 days to date
        $plus30=Date('y-m-d', strtotime('+30 days'));
        echo $plus30;

        foreach ($r->result() as $row) {
          if($row->serviceDate<$plus30){
            echo $row->asetNum;
          }}
  /// CURRENT PROBLEM --------------------------------------

          ?>



      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        Featured
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
