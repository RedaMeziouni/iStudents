<?php
  class Pages extends Controller {
    public function __construct(){
      $this->studentModel = $this->model('Student');
     
    }
    
    public function index(){
      // if(!isLoggedIn()){
      //   redirect('posts');
      // }

      $students = $this->studentModel->getAll();

      $data = [
        'title' => 'Students Management',
        'description' => 'Online Classroom Management Software System'
      ];
      $data2 = [
          
            'student'=>$students
          ];

      $this->view('pages/index', $data, $data2);
    }

    public function about(){
      $data = [
        'title' => 'About Our Application',
        'description' => 'Instructors can view and track student information such as student attendance, report card, scheduling, transcript, discipline, tests, assignments, and contact information.Instructors can view and mark attendance of students from anywhere. Easily track attendance records and respond to disruptions and problems.Get complete control over student discipline incidents reportedly committed in the classroom and campus. Define behavior codes in various categories including bullying, accidents, fighting, vandalism, forgery, etc.

        Configure action codes by identifying the actions that occurred or were assigned to a participant as a result of the incident as well as meritorious actions and corresponding rewards. Access heat maps, charts and graphs, reports that reveal student behavior patterns and send internal notifications from anywhere.Instructors can track the entire student activities in the class and provide role-based access to data and streaming audio/video. Remotely control the class and help multiple students and class simultaneously, at the same time making teaching effective.Integrated student information system provides one-stop solution to classroom management software to save time and money. Eliminate navigating multiple systems and all the technology barriers associated with SIS software.'
      ];

      $this->view('pages/about', $data);
    }

    // Contact us 
    function contact(){
      $_SESSION['error'] = "";
      if(isset($_POST['submit']) && !empty($_POST['email']))
      {    
        require APPROOT . '/helpers/mailer/mail.php';
          $mail->setFrom($_POST['email'], 'iStudents');
          $mail->addAddress('meziounir@gmail.com');
          $mail->Subject = $_POST['subject'];
          $mail->Body    = $_POST['email']."  ".$_POST['message'];
              
          $mail->send();
  
          echo  "<script>alert('email has been send')</script> ";
        }else{
          echo  "<script>alert('error email isn't send ')</script> ";
        }
         $this->view('pages/contact');
      }
      // else{
      //     echo "<script>alert('error email isn't send')</script> ";}

      public function forgot() {
        if(isset($_POST['reset']) )
          {
            $email =$_POST['email'];
  
            $this->db = new Database;
            $this->db->query('SELECT * FROM users WHERE email = :email');
            // Bind value
            $this->db->bind(':email', $email);
      
            $row = $this->db->single();
            
            
          //  return $row;
          if($row) {
            require APPROOT . '/helpers/mailer/mail.php';
            $mail->setFrom('sarlistudents@gmail.com', 'iStudents');
            $mail->addAddress($row->email);
            $mail->Subject = 'Reset Your Password';
            $mail->Body    = '<b>Name :</b> '.$row->name.'<br>
                              <b>Password :</b> '.$row->password.'';
                             
                
            $mail->send();
  
            echo  "<script>alert('email has been send')</script> ";
          } else {
            echo  "<script>alert('error email isn't send ')</script> ";
          }
  
  
              // $_SESSION['error'] = "check your mail box";
  
      }
      // else{
      //     $_SESSION['error'] = "please enter a valid email";
      // }
      $this->view('pages/forgot');
  } 
  
  }?>
  