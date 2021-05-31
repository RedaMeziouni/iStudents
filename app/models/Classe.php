<?php
class Classe {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function addClass($data) {
        $this->db->query('INSERT INTO classes (classe_name,specialite,description) VALUES(:nom,:specialite,:description)');

        //Bind values
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':specialite', $data['specialite']);
        $this->db->bind(':description', $data['description']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getClass($id)
  {
      $this->db->query('SELECT * FROM classes WHERE id = :id');
      $this->db->bind(':id', $id);
      return $this->db->single();
  }
  public function getALLClass()
  {
      $this->db->query('SELECT * FROM classes');
      return $this->db->resultSet();
  }
  public function editClass($data){
    $this->db->query('UPDATE classes SET classe_name = :nom, specialite = :specialite, description = :description WHERE id = :id');
    // Bind values
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':nom', $data['nom']);
    $this->db->bind(':specialite', $data['specialite']);
    // $this->db->bind(':date', date("Y-m-d H:i:s"));
    $this->db->bind(':description', $data['description']);

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }
   // delete student
   public function deleteClass($id)
   {
       $this->db->query('DELETE FROM classes WHERE id = :id');
       // Bind values
       $this->db->bind(':id', $id);

       // Execute
       if ($this->db->execute()) {
           return true;
       } else {
           return false;
       }
     }
   }