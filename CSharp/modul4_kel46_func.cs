using System;

class Program
{
    static void non_return(String a, String b, String c)
    {
        Console.WriteLine("Selamat Datang di Praktikum DKP 2020 {0} dan {1} adalah {2}", a, b, c);
    }
    static int return_func(int a)
    {
        if (a > 0 || a < 3) {
            return a * 3;
        } else
        {
            return a * 0;
        }
       
    }
    static void Main(string[] args)
    {
        non_return("Praktikan 1", "Praktikan 2", "Kelompokxx");
        Console.WriteLine("Ini adalah praktikum shift {0}", return_func(1));
        //percobaan2 objek = new percobaan2();
        //objek.pembagian(39, 35);
        //Console.WriteLine("Hasil pengurangan {0} dengan {1} adalah {2}", 39, 35, perkalian(39, 35));

        Console.ReadKey();
        // METHOD 
        // percobaan2 objek = new percobaan2();
        // objek.pembagian(15,5);
        // int hasil = objek.pengurangan(15,5);
        // Console.WriteLine("Hasil pengurangan 15 - 5 = " + hasil);
    }
}

// METHOD
// class percobaan2
//     {
//         public void pembagian(float a, float b)
//         {
//             double c = a / b;
//             Console.WriteLine("Hasil pembagian {0} dengan {1} adalah {2}", a, b, c);
//         }
//         public int pengurangan(int a, int b)
//         {
//             int c = a - b;
//             return c;
//         }
//     }