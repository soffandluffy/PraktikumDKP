using System;

namespace Modul5
{
    class Program
    {
        static void Main(string[] args)
        {
            string email, password;

            Console.Write("Email : ");
            email = Console.ReadLine();
            Console.Write("Password : ");
            password = Console.ReadLine();

            userService data = new userService(email, password);
            data.login();

            Console.ReadKey();
        }
    }

    class userService {
        private string[,] data;
        private string email, password, roles = "";

        public userService(string emails, string passwords)
        {
            email = emails;
            password = passwords;
            data = new string[2, 3] {
                {"soffankelompok46@gmail.com", "12345", "superadmin" },
                {"firmankelompok46@gmail.com", "12345", "user"  }
            };
        }

        public void login()
        {
            var (status, role) = checkCredentials();
            if (status == true)
            {
                Console.WriteLine("\nWelcome " + role);
                Console.WriteLine("Logged it as user email: " + email);
            }
            else
            {
                Console.WriteLine("\nInvalid Login");
            }
        }
        private (bool, string) checkCredentials()
        {
            for (int i = 0; i < data.GetLength(0); i++)
            {
                if (data[i, 0] == email && data[i, 1] == password)
                {
                    roles = data[i, 2];
                    return (true, roles);
                }
            }
            return (false, roles);
        }
    }
}