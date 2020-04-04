using System;

namespace VolumeBola
{
    class Program
    {
        static void Main(string[] args)
        {
            double phi,jarijari,volume;
            phi = 3.14;
            jarijari = 10;
            Console.WriteLine("Kelompok 46");   
            Console.WriteLine("Soffan Marsus Ahmad\t (21120119130042)");   
            Console.WriteLine("Muhammad Firmansyah\t (21120119130102)");   
            Console.WriteLine("Shift : 2");
            Console.WriteLine("Menghitung Volume bola");
            Console.Write("Jari jari = ");
            Console.WriteLine(jarijari);
            volume = 1.3 * phi * jarijari * jarijari * jarijari;
            Console.Write("Volume bola = ");
            Console.WriteLine(volume);
            Console.ReadLine();

        }
    }
}