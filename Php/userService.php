<?php
// class dengan nama userService
class userService
{
    // variabel2 yang akan digunakan
    protected $email;    // using protected so they can be accessed
    protected $password; // and overidden if necessary
    protected $dataUser; // dummy data
    protected $getRole;  // stores the role data

    // membuat constructor baru dengan parameter email dan password
    public function __construct($email, $password) 
    {
        // membuat data user baru untuk constructor berisi array 2 dimensi email, password, dan role
        $this->_dataUser = [
            (object) [
                'email'     => "soffankelompok46@gmail.com",
                'password'  => "12345",
                'role'      => "superadmin"
            ],
            (object) [
                'email'     => "firmankelompok46@gmail.com",
                'password'  => "12345",
                'role'      => "user"
            ]
        ];
        // membuat email dan password untuk constructor dari parameter yang diberikan
       $this->email = $email;
       $this->password = $password;
    }

    // function login dengan modifer public agar dapat dipanggil dari class lain
    public function login()
    {
        // memanggil function checkCredentials dan disimpan dalam variabel user
        $user = $this->checkCredentials();
        // mengecek $user sesuai dengan data user dan bernilai true
        if($user) {
            // jika bernilai true, memanggil function getRole untuk menyimpan role user
            $this->getRole = $user->role;
            // mengembalikan email user dalam variabel get_data
            return $get_data = $user->email;
        } else {
            // jika bernilai false akan mengembalikan boolean false
            return false;
        }
    }

    // function checkCredentials dengan modifier protected agar tidak dapat digunakan dari class lain
    protected function checkCredentials()
    {
        // perulangan foreach untuk setiap email, password yang ada di data user
        foreach($this->_dataUser as $key => $value) {
            // mengecek apakah value email dan password pada data sama dengan isi parameter dari constructor
            if($value->email == $this->email && $value->password == $this->password) {
                // mengembalikan value berisi email, password, dan role
                return $value;
            }
        }
        // mengembalikan boolean false
        return false;
    }

    // function getRole dengan modifier public
    public function getRole()
    {
        // saat function dipanggil akan mengembalikan nilai role
        return $this->getRole;
    }
}
?>