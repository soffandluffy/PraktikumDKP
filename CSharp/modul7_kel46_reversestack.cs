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

        static void reverse(Stack arr){

            Stack reverse = new Stack();
            while (arr.Count != 0) {
                reverse.Push(arr.Pop());
            }
            Console.WriteLine("");
            Console.WriteLine("Reversed stack : ");
            foreach (int stack in reverse)
            {
                Console.Write(stack + " ");                        
            }
            Console.WriteLine("");
        }

        static void Main(string[] args)
        {
            Stack contoh = new Stack();
            contoh.Push(1);
            contoh.Push(2);
            contoh.Push(3);
            contoh.Push(4);
            contoh.Push(5);
            foreach (int stack in contoh)
            {
                Console.Write(stack + " ");                        
            }
            reverse(contoh);

            Console.WriteLine("");
            int pilihan;
            int data;
            Stack tumpukan = new Stack();

            //looping until false condition
            do
            {
                //Displaying Menu
                Console.WriteLine("---Ini Stack---");
                Console.WriteLine("1. PUSH Item");
                Console.WriteLine("2. POP Item");
                Console.WriteLine("3. Lihat Daftar Data");
                Console.WriteLine("4. Lihat Data Teratas");
                Console.WriteLine("5. Reverse Stack");
                Console.Write("Masukkan Pilihan : ");
                pilihan = int.Parse(Console.ReadLine());
                //condition for choice
                if (pilihan == 1)
                {
                    Console.Write("Data yang ditambahkan : ");
                    data = int.Parse(Console.ReadLine());
                    tumpukan.Push(data);
                    Console.WriteLine("");
                }
                else if (pilihan == 2)
                {
                    if(tumpukan.Count != 0) {
                        tumpukan.Pop();
                        Console.WriteLine("");
                    } else {
                        Console.WriteLine("Data kosong");
                    }
                    
                }
                else if (pilihan == 3)
                {
                    foreach (int stack in tumpukan)
                    {
                        Console.Write(stack + " ");                        
                    }
                    Console.WriteLine("\n");
                }
                else if (pilihan == 4)
                {
                    if(tumpukan.Count != 0) {
                        Console.WriteLine("Data teratas : " + tumpukan.Peek());
                        Console.WriteLine("");
                    } else {
                        Console.WriteLine("Data kosong");
                    }
                }
                else if (pilihan == 5){
                    foreach (int stack in tumpukan)
                    {
                        Console.Write(stack + " ");                        
                    }
                    reverse(tumpukan);
                }
                else
                {
                    Console.WriteLine("Pilihan Tidak Ada!!");
                }//end of condition
            } while (pilihan != 0);//end looping
        }
    }
}        