public class userService {

    // deklarasi variabel
    private String[][] data = new String[2][3];
    private String[][] histories = new String[2][4];
    private String email, password, roles = "";
    private String buku1 = "", buku2 = "", tanggal = "";
    
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
        // dibuat data histories berisi buku yang email user, buku yang dipinjam, dan tanggal peminjaman
        String[][] histories = 
        {
            {"soffankelompok46@gmail.com", "Fisika Dasar", "Dasar Komputer dan Pemrograman", "19-04-2020"},
            {"firmankelompok46@gmail.com", "Dasar Komputer dan Pemrograman", "Konsep Jaringan Komputer", "19-04-2020"} 
        };
        this.data = data;
        this.histories = histories;
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
                    // maka akan menset nilai buku1, buku2, dan tanggal sesuai dengan email user yang login
                    // diambil dari array histories
                    buku1 = histories[i][1];
                    buku2 = histories[i][2];
                    tanggal = histories[i][3];
                    // dan akan menset variabel roles dengan isi data role yang sesuai
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
            // lalu akan menampilkan buku yang dipinjam dan tanggal peminjaman
            System.out.println("Peminjaman buku : ");
            System.out.println("Buku 1 : " + buku1);
            System.out.println("Buku 2 : " + buku2);
            System.out.println("Tanggal Peminjaman : " + tanggal);
        }
        else
        {
            // jika bernilai false maka akan menampilkan invalid login
            System.out.println("\nInvalid Login");
        }
    }

}

