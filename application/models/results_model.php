<?php defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------
// Verifys Users - Inserts Users - Gets Session ID
//------------------------------------------------------------------

class results_model extends CI_Model{

  public function __construct()
{
    parent::__construct();
}


public function findResults()
{
    $result = array();

    //check if actors is not null then call matchactors function and store results into $result
    if ($this->input->post('team') != null) {
        foreach ($this->matchActors() as $a) {
            array_push($result, $a);
        }
    }
    //check if directors is not null then call matchdirectors function and store results into $result
    if ($this->input->post('type') != null) {
        foreach ($this->matchDirectors() as $a) {
            array_push($result, $a);
        }
    }

    //check if keyword is not null then call matchkeyword function and store results into $result
    if ($this->input->post('keyword') != null) {
        foreach ($this->matchKeyword() as $a) {
            array_push($result, $a);
        }
    }

    //create a hash map to store results
    $hashmap = array();

    //this for each loop stores each id and how many times it is repeated
    foreach ($result as $a) {
        $count = 0;
        foreach ($result as $b) {
            if ($b == $a) {
                $count++;
            }
        }
        $hashmap[$a] = $count;
    }

    //sort the hashmap by highest count to lowest count
    arsort($hashmap);
    $result2 = array();
    //store each movie id into the $result2 array
    foreach ($hashmap as $key => $val) {
        array_push($result2, $key);
    }

    //return results
    return $result2;
}



public function matchKeyword()
{
    //create new array
    $result = array();
    //create a new array of the search string exploded into seperate words
    $words = explode(" ", $this->input->post('keyword'));

    //for each word find matching movies
    foreach ($words as $a) {
        //if the word is not "THE" and "AND" search, because the and and are too common and give too many results
            //search for movies with matching keywords in its keywords
            $this->db->like('asetNum', $a);
            $b = $this->db->get('tools');
            //store matching movies into results
            foreach ($b->result() as $c) {
                if ($c != null) {
                    array_push($result, $c->toolId);
                }
            }

            //search for movies with matching keywords in its title
            $this->db->like('serialNum', $a);
            $b = $this->db->get('tools');
            //store matching movies into results
            foreach ($b->result() as $c) {
                if ($c != null) {
                    array_push($result, $c->toolId);
                }
            }

            //search for movies with matching keywords in its title
            $this->db->like('teamIssued', $a);
            $b = $this->db->get('tools');
            //store matching movies into results
            foreach ($b->result() as $c) {
                if ($c != null) {
                    array_push($result, $c->toolId);
                }
            }

            //desc is commented out because not sure if its give too many unnecessary results
            // $this->db->like('desc', $a);
                // $b = $this->db->get('movie_data');
                // foreach ($b->result() as $c) {
                //     if ($c != null) {
                //         array_push($result, $c->movie_id);
                //     }
                // }

    }
    //return results
    return $result;
}


public function toolInfo(){
    $this->db->select('*');
    $this->db->from('tools');
    $this->db->where('toolId',$this->input->post('toolid'));
    $query=$this->db->get();
    return $query;

}



public function updatedTool(){
  $toolId = $this->input->post('toolID');
  $description = $this->input->post('description');
  $asetNum = $this->input->post('aset');
  $cat = $this->input->post('cat');
  $serialNum = $this->input->post('serialNum');
  $teamIssued = $this->input->post('teamIssued');
  $dateIssued = $this->input->post('dateIssued');
  $serviceItems = $this->input->post('serviceItems');


  if (!empty($description)) {
    $this->db->set('description', $description);}
  if (!empty($asetNum)) {
    $this->db->set('asetNum', $asetNum);}
  if (!empty($cat)) {
    $this->db->set('cat', $cat);}
  if (!empty($serialNum)) {
    $this->db->set('serialNum', $serialNum);}
  if (!empty($teamIssued)) {
    $this->db->set('teamIssued', $teamIssued);}
  if (!empty($dateIssued)) {
    $this->db->set('dateIssued', $dateIssued);}
  if (!empty($serviceItems)) {
    $this->db->set('serviceItems', $serviceItems);}
    $this->db->set('toolId', $toolId);

  $this->db->where('toolId', $toolId);
  $this->db->update('tools');
}


public function markTool(){
    $toolId = $this->input->post('toolID');
    $mark = $this->input->post('status');

    $this->db->set('status', $mark);
    $this->db->where('toolId', $toolId);
    $this->db->update('tools');
}



public function deleteTool(){
  $toolId = $this->input->post('toolID');
  $this->db->where('toolId', $toolId);
  $this->db->delete('tools');
  }

  public function insetTool(){
    $description = $this->input->post('description');
    $asetNum = $this->input->post('asetNum');
    $cat = $this->input->post('cat');
    $status = $this->input->post('status');
    $make = $this->input->post('make');
    $model = $this->input->post('model');
    $serialNum = $this->input->post('serialNum');
    $teamIssued = $this->input->post('teamIssued');
    $dateIssued = $this->input->post('dateIssued');
    $serviceDate = $this->input->post('serviceDate');
    $serviceItems = $this->input->post('serviceItems');

    $data = array(

        'description' => $description,
        'asetNum' => $asetNum,
        'status' => $status,
        'cat' => $cat,
        'make' => $make,
        'model' => $model,
        'serialNum' => $serialNum,
        'teamIssued' => $teamIssued,
        'dateIssued' => $dateIssued,
        'serviceDate' => $serviceDate,
        'serviceItems' => $serviceItems
       );
        // Inserting row into mediction table
        $this->db->insert('tools', $data);
  }


public function toolDates(){
  $query = $this->db->query('SELECT * FROM tools
  WHERE serviceDate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW();');
  return $query;
}




}
