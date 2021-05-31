<?php
class Classes extends Controller {
    public function __construct() {
        $this->classModel = $this->model('Classe');
    }
  public function addClass(){

   $data = [
    'nom' => '',
    'specialite' => '',
    'description'=>''
];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
// Process form
// Sanitize POST data
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'nom' => trim($_POST['nom']),
        'specialite' => trim($_POST['specialite']),
        'description'=>trim($_POST['description']),       
    ];  
    
    if ($this->classModel->addClass($data)) {
     //Redirect to the login page
     header('location: ' . URLROOT . '/classes/showClass');
    //  echo'thats cool';
 } else {
     die('Something went wrong.');
 }
}
$this->view('classes/addClass', $data);
}

public function showClass(){
    $class = $this->classModel->getALLClass();
    $data = [
         
          'class'=>$class
        ];
      
  
    // return $employes;
    $this->view('classes/showClass',$data);
    }
    public function editClass($id)
    {
      if (!isLoggedIn()) {
        redirect('users/login');
      } 
      // Check for POST
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
       
        // Init data
        $data = [
            'id' => $id,
            'nom' => trim($_POST['nom']),
            'specialite' => trim($_POST['specialite']),
            'description'=>trim($_POST['description']),
        ];  
        if ($this->classModel->editClass($data)) {
            redirect('classes/showClass');
          } else {
            die('Something went wrong');
          }
       
      } else {
        // Init data
        $class = $this->classModel->getClass($id);
        $data = [
            'id' => $id,
            'nom' => $class->classe_name,
            'specialite' => $class->specialite,
            'description'=>$class->description
        ]; 
        // Load view
        $this->view('classes/editClass', $data);
    }
}
public function deleteClass($id)
{
  if (!isLoggedIn()) {
    redirect('users/login');
  } 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($this->classModel->deleteClass($id)) {
      redirect('classes/showClass');
    } else {
      die('Something went wrong');
    }
  } else {
    redirect('pages/home');
  }
}
   
   }