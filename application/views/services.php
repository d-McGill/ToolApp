<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<p class="date"><?php echo "Todays Date: " . date("d-m-y") . "<br>";?></p>
  <?php

  if($r==null){
    echo 'no results';
  }else{

    echo "<table class='table'>
      <tr>
        <th scope='col'>Aset Number</th>
        <th scope='col'>Tool</th>
        <th scope='col'>TeamIssued</th>
        <th scope='col'>Service Date</th>
        <th scope='col'>Status</th>
        <th scope='col'></th>
      </tr>";


   foreach ($r->result() as $row) {

echo "

  <tr>
    <td>".$row->asetNum."</td>
    <td>".$row->description."</td>
    <td>".$row->teamIssued."</td>
    <td>".$row->serviceDate."</td>
    <td>".$row->status."</td>

    <td>
    <form method='post' action=".site_url('Search/toolView').">
    <input name='toolid' value='$row->toolId' style='display:none;'></input><button type='submit' class='btn btn-primary btn-lg'>View</button></form>
    </td>
  </tr>

";
}

    echo "</table>";




}?>
