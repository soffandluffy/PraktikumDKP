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
            Stack data = new Stack();
            Stack genap = new Stack();
            Stack ganjil = new Stack();

            for(int i = 30; i <= 50; i++){
                data.Push(i);
            }

            while (data.Count != 0) {
                if((int)data.Peek() % 2 == 0){
                    genap.Push(data.Pop());
                }
                else {
                    ganjil.Push(data.Pop());
                }
            }

            while (true){
                Console.WriteLine("Menu");
                Console.WriteLine("1. Stack Genap");
                Console.WriteLine("2. Stack Ganjil");

                Console.Write("Pilih : ");
                pilihan = int.Parse(Console.ReadLine());
                if(pilihan==1){
                    Console.WriteLine("Stack Genap : ");
                    foreach(int dat in genap){
                        Console.Write(dat + " ");
                    }
                    Console.WriteLine("");
                } else if(pilihan == 2) {
                    Console.WriteLine("Stack Ganjil : ");
                    foreach(int dat in ganjil){
                        Console.Write(dat + " ");
                    }
                    Console.WriteLine("");
                } else {
                    break;
                }
            }

        }
    }
}        