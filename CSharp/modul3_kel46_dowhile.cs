using System;

namespace Modul3
{
    class Program
    {
        static void Main(string[] args)
        {
            int maemunah = 0;
            do {
                Console.WriteLine("Ini perulangan do while ke " + maemunah);
                maemunah++;
            }
            while (maemunah <= 10);
            Console.ReadLine();
        }
    }
}