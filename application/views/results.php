<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <?php
  if($results==null){
    echo 'no results';
  }else{

    echo "<table class='table'>
      <tr>
        <th scope='col'>Aset Number</th>
        <th scope='col'>TeamIssued</th>
        <th scope='col'> Serial Number</th>
        <th scope='col'>Issued Date</th>
        <th scope='col'>Status</th>
        <th scope='col'></th>
      </tr>";


   foreach ($results as $a) {
$query = $this->db->get_where('tools', array('toolId' => $a));
$query = $query->row();
echo "

  <tr>
    <td>".$query->asetNum."</td>
    <td>".$query->teamIssued."</td>
    <td>".$query->serialNum."</td>
    <td>".$query->serviceDate."</td>
    <td>".$query->status."</td>

    <td>
    <form method='post' action=".site_url('Search/toolView').">
    <input name='toolid' value='$query->toolId' style='display:none;'></input><button type='submit' class='btn btn-primary btn-lg'>View</button></form>
    </td>
  </tr>

";
}

    echo "</table>";




}?>
