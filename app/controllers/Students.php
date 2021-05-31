<?php
  class Students extends Controller {
    public function __construct(){
      $this->studentModel = $this->model('Student');
      
    }

    public function addStudent(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $class = $this->studentModel->getClass();
        // Init data
        $data =[
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'genre'=>trim($_POST['genre']),
          'age'=>trim($_POST['age']),
          'class'=>trim($_POST['class']),
          'name_err' => '',
          'email_err' => '',
          'getclass'=>$class
          
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        } else {
            echo 'Somthing Wrong';
        }

        // Validate Name
        if(empty($data['name'])){
          $data['name_err'] = 'Pleae enter name';
        }
        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['name_err'])){
          // Validated
          
         

          // Register User
          if($this->studentModel->addStudent($data)){
            redirect('students/showStudent');
            // echo'3la slamtk';
          } else {
            die('Something went wrong');
          }
            } else {
                
          // Load view with errors
          $this->view('students/addStudent', $data);
        }

      } else {
        // Init data
        $class = $this->studentModel->getClass();
        $data =[
          'name' => '',
          'email' => '',
          'genre' => '',
          'age' => '',
          'name_err' => '',
          'email_err' => '',
          'getclass'=>$class
          
        ];

        // Load view
        $this->view('students/addStudent', $data);
      }
    }
public function showStudent(){
  $students = $this->studentModel->getAll();
  $data = [
       
        'student'=>$students
      ];
    

  // return $employes;
  $this->view('students/showStudent',$data);
  }

  // Edit Students
  public function editStudent($id)
  {
    if (!isLoggedIn()) {
      redirect('users/login');
    } 
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // Process form

      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $class = $this->studentModel->getClass();


      // Init data
      $data = [
        'id' => $id,
        'name' => trim($_POST['name']),
        'class' => trim($_POST['class']),
        'email' => trim($_POST['email']),
        'genre' => trim($_POST['genre']),
        'name_err' => '',
        'class_err' => '',
        'email_err' => '',
        'genre_err' => '',
        'getclass' => $class
      ];
      // Make sure $data are empty
      if (empty($data['name_err']) &&empty($data['class_err']) && empty($data['email_err']) && empty($data['genre_err'])) {
        // Validated

        // // Edit User
        if ($this->studentModel->editStudent($data)) {
          redirect('students/showStudent');
        } else {
          die('Something went wrong');
        }
      } else {
        // Load view with data
        $this->view('students/editStudent', $data);
      }
    } else {
      // Init data
      $class = $this->studentModel->getClass();
      $user = $this->studentModel->getUsersInfo($id);
      $data = [
        'id' => $id,
        'name' => $user->nom,
        'class' => $user->class,
        'email' => $user->email,
        'genre' => $user->genre,
        'name_err' => '',
        'class_err' => '',
        'email_err' => '',
        'genre_err' => '',
        'getclass' => $class
      ];
      // Load view
      $this->view('students/editStudent', $data);
    }
  }
  public function deleteStudent($id)
  {
    if (!isLoggedIn()) {
      redirect('users/login');
    } 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if ($this->studentModel->deleteStudent($id)) {
        redirect('students/showStudent');
      } else {
        die('Something went wrong');
      }
    } else {
      redirect('Users/index');
    }
  }
   }