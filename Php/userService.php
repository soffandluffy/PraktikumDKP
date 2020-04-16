<?php
class userService
{
    protected $email;    // using protected so they can be accessed
    protected $password; // and overidden if necessary
    protected $dataUser; // dummy data
    protected $getRole;  // stores the role data

    public function __construct($email, $password) 
    {
        $this->_dataUser = [
            (object) [
                'email'     => "soffankelompok46@gmail.com",
                'password'  => "12345",
                'role'      => "superadmin"
            ],
            (object) [
                'email'     => "nama2kelompok46@gmail.com",
                'password'  => "12345",
                'role'      => "user"
            ]
        ];
       $this->email = $email;
       $this->password = $password;
    }

    public function login()
    {
        $user = $this->checkCredentials();
        if($user) {
            $this->getRole = $user->role;
            return $get_data = $user->email;
        } else {
            return false;
        }
    }

    protected function checkCredentials()
    {
        foreach($this->_dataUser as $key => $value) {
            if($value->email == $this->email && $value->password == $this->password) {
                return $value;
            }
        }
        return false;
    }

    public function getRole()
    {
        return $this->getRole;
    }
}
?>