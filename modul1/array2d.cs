using System;

namespace Array2d
{
    class Program
    {
        static void Main(string[] args)
        {
            String[,] tekkom = { { "Tekkom !", "Compile success" },
                                { "Tekkom !", "Nol Error" } ,
                                { "Tekkom !", "Running" }};
            Console.WriteLine(tekkom[0,0] + "\t" + tekkom[0,1]);
            Console.WriteLine(tekkom[1,0] + "\t" + tekkom[1,1]);
            Console.WriteLine(tekkom[2,0] + "\t" + tekkom[2,1]);

        }
    }
}