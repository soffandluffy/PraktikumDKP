using System;

namespace KelilingLingkaran
{
    class Program
    {
        static void Main(string[] args)
        {
            double phi,jarijari, keliling;
            phi = 3.14;
            jarijari = 10;
            keliling = phi * 2 * jarijari;
            Console.WriteLine("Keliling Lingkaran = " + keliling);
            Console.ReadKey();
        }
    }
}