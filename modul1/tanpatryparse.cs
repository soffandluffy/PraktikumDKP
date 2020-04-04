using System;

namespace Pythagoras
{
    class Program
    {
        static void Main(string[] args)
        {
            string nama,nim,jurusan;
            Console.Write("Nama :\t");
            nama = Console.ReadLine();
            Console.Write("NIM :\t");
            nim = Console.ReadLine();
            Console.Write("Jurusan :\t");
            jurusan = Console.ReadLine();
            Console.WriteLine("Hai {0}", nama);
            Console.WriteLine("NIM kamu {0}", nim);
            Console.WriteLine("Kamu dari jurusan {0}", jurusan);

        }
    }
}