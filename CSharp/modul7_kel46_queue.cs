using System;
using System.Collections;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Modul7_Kel46
{
    class Program
    {
        static void Main(string[] args)
        {
            int pilihan;
            int data;
            Queue antrian = new Queue();
            //looping until false condition
            do
            {
                //Displaying Menu
                Console.WriteLine("---Ini Queue-- -");
                Console.WriteLine("1. ENQUEUE Item");
                Console.WriteLine("2. DEQUEUE Item");
                Console.WriteLine("3. Lihat Daftar Data");
                Console.WriteLine("4. Lihat Data Teratas");
                Console.Write("Masukkan Pilihan : ");
                pilihan = int.Parse(Console.ReadLine());
                //condition for choice
                if (pilihan == 1)
                {
                    Console.Write("Data yang ditambahkan : ");
                    data = int.Parse(Console.ReadLine());
                    antrian.Enqueue(data);
                    Console.WriteLine("");
                }
                else if (pilihan == 2)
                {
                    if (antrian.Count != 0) {
                        antrian.Dequeue();
                        Console.WriteLine("");
                    } else {
                        Console.WriteLine("Data kosong");
                    }
                    
                }
                else if (pilihan == 3)
                {
                    foreach (int value in antrian)
                    {
                        Console.Write(value+" ");
                    }
                    Console.WriteLine("\n");
                }
                else if (pilihan == 4)
                {
                    if (antrian.Count != 0) {
                        Console.WriteLine("Data teratas : " + antrian.Peek());
                        Console.WriteLine("");
                    } else {
                        Console.WriteLine("Data kosong");
                    }
                    
                }
                else
                {
                    Console.WriteLine("Pilihan Tidak Ada!!");
                }//end of condition
            } while (pilihan != 0);//end looping
        }
     }
}
