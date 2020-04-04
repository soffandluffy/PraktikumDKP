using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace InputOutput
{
    class Program
    {
        static void Main(string[] args)
        {
            string input, input2;
            input = Console.ReadLine();
            input2 = Console.ReadLine();
            Console.WriteLine("Nama\t= {0}\nNIM\t= {1}", input, input2);
            Console.ReadKey();
        }
    }
}