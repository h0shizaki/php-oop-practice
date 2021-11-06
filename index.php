<?php
    class User {
        protected $username ;
        protected $email ;
        public $role = 'Servant';

        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        // public function __destruct(){
        //     echo $this->username .' has been removed <br>';
        // }

        // public function __clone(){
        //     $this->username = '<br>'.$this->username .'(clone)';
        // }

        public function message(){
            return "$this->email sent a message";
        }

        public function addFriend($friend){
            return "$this->username added friend with $friend";
        }

        public function getUsername(){
            return $this->username;
        }
        
        public function getEmail(){
            return $this->email;
        }

        public function setUsername($username){
            $this->username = $username;
            return $this->username ;
        }

        public function setEmail($email){
            if(strpos($email , '@') > -1){
                $this->email = $email;
                echo "Email changed";
            }
            else{
                echo 'Sometime wrong';
            }
        }


    };

    class Ruler extends User {
        public $level;
        public $role = 'Ruler';

        public function __construct($username, $email, $level){
            $this->level = $level;
            parent:: __construct($username, $email) ;
        }

        public function message(){
            return "[Ruler] $this->email sent a message";
        }

    };

    $playerOne = new User("Ren_INWZA", "Ren@somemail.com");
    $playerTwo = new User('YOSHI300', 'Yoshi@somemail.com');
    $playerThree = new Ruler("Jeanne d'Arc", "burningwitch101@something.com", 5);

    // $playerFour = clone $playerOne;
    // echo $playerFour->getUsername();
    // unset($playerOne);

    // echo $playerOne->message() . '<br>';
    // echo $playerThree->message() . '<br>';


    // echo $playerThree->getUsername().'<br>';
    // echo $playerThree->level .'<br>';
    // echo $playerThree->role .'<br>';

    // echo $playerOne->getUsername() . '<br>' ;
    // echo $playerOne->getEmail() . '<br>' ;
    // echo $playerTwo->getUsername() . '<br>' ;

    // $playerOne->setEmail("TEST@ something.com");
    // echo '<br>'.$playerOne->getEmail() . '<br>';

    // echo $playerOne->username . '<br>';
    // echo $playerOne->email . '<br>';
    
    // echo ''.get_class($playerOne);
    // print_r(get_class_vars('User')); 
    // echo '<br>';
    // print_r(get_class_methods('User'));
    
    // echo '<br>'.$playerTwo->username ;
    // echo '<br>'.$playerTwo->email ;

    // echo '<br><br>Add friend<br>'.$playerOne->addFriend($playerTwo->username) .'<br>';
?>

