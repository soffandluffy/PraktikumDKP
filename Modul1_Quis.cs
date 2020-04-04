using System;

namespace InputOutput2
{
    class Program
    {
        static void Main(string[] args)
        {
            // Console.Write("Nama Program\t:  ");
            // Console.Write("Identitas Kelompok\t:  ");
            double val1, val2, kali,tambah,bagi,kurang;

            Console.Write("Masukkan val1\t:  ");
            val1 = Convert.ToDouble(Console.ReadLine());
            Console.Write("Masukkan val2\t:  ");
            val2 = Convert.ToDouble(Console.ReadLine());
            tambah = val1 + val2;
            kurang = val1 - val2;
            kali = val1 * val2;
            bagi = val1 / val2;
            

            Console.Write("Penjumlahan :  ");
            Console.WriteLine(tambah);
            Console.Write("Pengurangan :  ");
            Console.WriteLine(kurang);
            Console.Write("Perkalian :  ");
            Console.WriteLine(kali);
            Console.Write("Pembagian :  ");
            Console.WriteLine(bagi);
        }
    }
}