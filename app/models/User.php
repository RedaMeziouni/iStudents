<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Regsiter user
    public function register($data){
      $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Login User
    public function login($email, $password){
      $this->db->query('SELECT * FROM users WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password) || $password == $hashed_password ){
        return $row;
      } else {
        return false;
      }
    }

    // Find user by email
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM users WHERE email = :email');
      // Bind value
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }

    // Get User by ID
    public function getUserById($id){
      $this->db->query('SELECT * FROM users WHERE id = :id');
      // Bind value
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }






    // Forgot pass
//     public function forgot() {
//       if(isset($_POST['reset']) )
//         {
//           $email =$_POST['email'];

//           // 
//           $this->db->query('SELECT * FROM users WHERE email = :email');
//           // Bind value
//           $this->db->bind(':email', $email);
    
//           $row = $this->db->single();
          
          
//         //  return $row;
//         if($row) {
//           require APPROOT . '/helpers/mailer/mail.php';
//           $mail->setFrom('sarlistudents@gmail.com', 'iStudents');
//           $mail->addAddress($row->email);
//           $mail->Subject = 'Reset Password';
//           $mail->Body    = '<b>Password :</b> '.$row->password.'';
                           
              
//           $mail->send();

//           echo  "<script>alert('email has been send')</script> ";
//         } else {
//           echo  "<script>alert('error email isn't send ')</script> ";
//         }


//             // $_SESSION['error'] = "check your mail box";

//     }
//     // else{
//     //     $_SESSION['error'] = "please enter a valid email";
//     // }
// }
    }


