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
        Console.ReadKey();
    }
}