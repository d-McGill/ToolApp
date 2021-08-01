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

        if($r->result()==False){
          echo 'No Upcoming Services';
        }
        else{
        foreach ($r->result() as $row) {

            echo $row->asetNum;
          }};

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
