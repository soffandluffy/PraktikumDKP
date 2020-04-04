using System;

namespace Modul3
{
    class Program
    {
        static void Main(string[] args)
        {
            double angka = 0;
            while(angka <= 10){
                Console.WriteLine("Ini perulangan while ke = " + angka);
                angka+=0.2;
            }
            Console.ReadLine();
        }
    }
}