using System;

namespace Pythagoras
{
    class Program
    {
        static void Main(string[] args)
        {
            double alas,tinggi,sisimiring;
            Console.WriteLine("Kelompok 46");   
            Console.WriteLine("Soffan Marsus Ahmad\t (21120119130042)");   
            Console.WriteLine("Muhammad Firmansyah\t (21120119130102)");   
            Console.WriteLine("Shift : 2");
            Console.WriteLine("Rumus Pythagoras");
            Console.Write("Alas = ");
            alas = Convert.ToDouble(Console.ReadLine());
            Console.Write("Tinggi = ");
            tinggi = Convert.ToDouble(Console.ReadLine());
            sisimiring = Math.Sqrt(Math.Pow(alas,2) + Math.Pow(tinggi,2));
            Console.Write("Sisi miring = ");
            Console.WriteLine(sisimiring);
            Console.ReadLine();

        }
    }
}