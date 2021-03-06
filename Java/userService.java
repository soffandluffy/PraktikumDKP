public class userService {

    // deklarasi variabel
    private String[][] data = new String[2][3];
    private String email, password, roles = "";
    
    // constructor userService yang akan dijalankan saat inisialisasi dengan parameter emails dan passwords
    public userService(String emails, String passwords)
    {
        // menset variabel email dan password sesuai dengan isi parameter constructor
        email = emails;
        password = passwords;
        // membuat data user yang bisa login
        String[][] data = 
        { 
            {"soffankelompok46@gmail.com", "12345", "superAdmin"},
            {"firmankelompok46@gmail.com", "12345", "user"} 
        };
        this.data = data;
    }
    // function check credentials yang akan mengembalikan boolean dengan modifier private
    private boolean checkCredential()
    {
        // perulangan for dengan inisialisasi i = 0, jarak i kurang dari banyak data, dan increment i++
        // untuk mengecek setiap data yang ada pada constructor
        for(int i = 0; i < data.length; i++ )
        {
            // jika data sama dengan email yang diinput
            if(data[i][0].equals(email))
            {
                // jika password sama dengan password yang diinput
                if(data[i][1].equals(password))
                {
                    // maka akan menset variabel roles dengan isi data role yang sesuai
                    roles = data[i][2];
                    // dan mengembalikan boolean true
                    return true;
                }
            }
        }
        // jika gagal maka akan mengembalikan boolean false
        return false;
    }
    
    // function login dengan modifier public
    public void login()
    {
        // variabel status bertipe boolean yang memanggil function checkCredential
        boolean status = checkCredential();
        // jika status bernilai true
        if(status == true)
        {
            // maka akan menampilkan welcome role, dan email user yang login
            System.out.println("\nWelcome " + roles);
            System.out.println("Logged it as user email " + email);
        }
        else
        {
            // jika bernilai false maka akan menampilkan invalid login
            System.out.println("\nInvalid Login ");
        }
    }

}

