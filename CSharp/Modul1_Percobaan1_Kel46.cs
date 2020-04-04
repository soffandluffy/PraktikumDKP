using System;

namespace VolumeBalok
{
    class Program
    {
        static void Main(string[] args)
        {
            int panjang, lebar, tinggi, volume;
            panjang = 10;
            lebar = 5;
            tinggi = 2;
            volume = panjang * lebar * tinggi;
            Console.WriteLine("Volume Balok = " + volume);

        Console.ReadKey();
        }
    }
}