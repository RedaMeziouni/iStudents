<?php
  class Student {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Regsiter user
    public function addStudent($data){
      $this->db->query('INSERT INTO apprenants (nom,email,genre,age,class) VALUES(:name, :email, :genre,:age,:class)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':genre', $data['genre']);
      $this->db->bind(':age', $data['age']);
      $this->db->bind(':class', $data['class']);


      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
 public function getAll(){
        $this->db->query('SELECT * FROM apprenants');  
        if($this->db->execute()){
          $row = $this->db->resultSet();
          return $row;
        } else {
          return false;
        }
        
  }
  public function getClass()
  {
      $this->db->query('SELECT * FROM classes');
      return $this->db->resultSet();
  }
  public function getUsersInfo($id){
    $this->db->query('SELECT * FROM apprenants WHERE id = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }
    public function editStudent($data){
      $this->db->query('UPDATE apprenants SET nom = :name, email = :email, genre = :genre, class = :class WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':genre', $data['genre']);
      // $this->db->bind(':age', $data['age']);
      $this->db->bind(':class', $data['class']);
  
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    // delete student
    public function deleteStudent($id)
    {
        $this->db->query('DELETE FROM apprenants WHERE id = :id');
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
    