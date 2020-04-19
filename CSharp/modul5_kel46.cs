using System;

namespace Modul5
{
    class Program
    {
        // main function
        static void Main(string[] args)
        {
            // deklarasi variabel
            string email, password;

            Console.Write("Email : ");
            // membaca input user dan disimpan dalam variabel email
            email = Console.ReadLine();
            Console.Write("Password : ");
            // membaca input user dan disimpan dalam variabel password
            password = Console.ReadLine();

            // membuat object baru dengan variabel data dan menginisialisasi constructor userService
            // dengan isi parameter input email dan password
            userService data = new userService(email, password);
            // memanggil function login
            data.login();

            Console.ReadKey();
        }
    }

    // class userService
    class userService {
        // deklarasi variabel untuk class userService
        public string[,] data; // varibel data dengan tipe data string array 2 dimensi
        private string email, password, roles = ""; 

        // constructor yang akan diinisialisasi dengan parameter emails dan password bertipe string
        public userService(string emails, string passwords)
        {
            // menset email dan password sesuai dengan isi parameter
            email = emails;
            password = passwords;
            // menset data dengan array 2 dimensi berisi email, password, dan role user yang bisa login
            data = new string[2, 3] {
                {"soffankelompok46@gmail.com", "12345", "superadmin" },
                {"firmankelompok46@gmail.com", "12345", "user"  }
            };
        }

        // function login
        public void login()
        {
            // memanggil function checkCredentials dan disimpan dalam variabel status, role
            var (status,role) = checkCredentials();
            // jika status sama dengan true
            if (status == false)
            {
                // maka akan menampilkan welcome role, dan email user yang login
                Console.WriteLine("\nWelcome " + role);
                Console.WriteLine("Logged it as user email: " + email);
            }
            else
            {
                // jika bernilai false maka akan menampilkan invalid login
                Console.WriteLine("\nInvalid Login");
            }
        }

        // function checkCredentials yang akan mengembalikan boolean dan string dengan modifier private
        private (bool,string) checkCredentials()
        {
            // perulangan for dengan inisialisasi i = 0, range i kurang dari jumlah data, dan increment i++
            // untuk mengecek data yang dibuat dengan input email dan password
            for (int i = 0; i < data.GetLength(0); i++)
            {
                // jika data sama dengan input email dan password sama dengan input password
                if (data[i, 0] == email && data[i, 1] == password)
                {
                    // akan menyimpan role didalam variabel roles
                    roles = data[i, 2];
                    // dan mengembalikan nilai true dan role user yang login
                    return (true,roles);
                }
            }
            // jika gagal maka akan mengembalikan boolean false dan roles
            return (false, roles);
        }
    }
}