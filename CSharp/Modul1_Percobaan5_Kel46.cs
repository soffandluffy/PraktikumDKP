using System;

namespace modul1_kelxx
{
    class Program
    {
        static void Main(string[] args)
        {
            int[,] angka = {{ 5, 3, 6 }, 
                            { 2, 1, 9 }, 
                            { 7, 4, 8 }};
            Console.Write("datanya adalah: " + angka[1, 2]);
            Console.ReadKey();
        }
    }
}