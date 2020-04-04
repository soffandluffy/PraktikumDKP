using System;

namespace Pythagoras
{
    class Program
    {
        static void Main(string[] args)
        {
            float jarijari,luas;
            string inn;
            Console.Write("Jari - jari :\t");
            inn = Console.ReadLine();
            float.TryParse(inn, out jarijari);
            luas = (float)3.14 * (jarijari * jarijari);
            Console.Write("Luas lingkaran = ");
            Console.WriteLine(luas);

        }
    }
}