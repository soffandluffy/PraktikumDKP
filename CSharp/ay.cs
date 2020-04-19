using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace tugasmodul_kel71
{
    class Program
    {
        static void Main(string[] args)
        {
            int saldo = 2000000, setor, tarik, pilihan, pin;
            Console.WriteLine("=======================================================");
            Console.WriteLine("=============Selamat Datang di ATM Pribadi=============");
            Console.WriteLine("=======================================================");
            Console.Write("Masukkan PIN ");
            pin = int.Parse(Console.ReadLine());
            while (pin == 121212)
            {
                Console.WriteLine("=====================================================================================");
                Console.WriteLine("1. Cek Saldo");
                Console.WriteLine("2. Tarik Tunai");
                Console.WriteLine("3. Setor Tunai");
                Console.WriteLine("4. Keluar");
                Console.WriteLine("=====================================================================================");
                Console.Write("Pilih Transaksi: ");
                pilihan = int.Parse(Console.ReadLine());
                switch (pilihan)
                {
                    case 1:
                        Console.WriteLine("Saldo Anda Rp. {0} ", saldo);
                        Console.Write("Masukkan PIN ");
                        pin = int.Parse(Console.ReadLine());
                        break;
                    case 2:
                        Console.Write("Jumlah Penarikan Rp. ");
                        tarik = int.Parse(Console.ReadLine());
                        if (tarik % 50000 != 0)
                
                        {
                            Console.WriteLine("Masukkan Jumlah kelipatan Rp.50000");
                        }
                        else if (tarik > (saldo - 50000))
                        {
                            Console.WriteLine("###############################################################");
                            Console.WriteLine("Saldo Tidak Cukup");
                            Console.WriteLine("###############################################################");
                        }
                        else
                        {
                            saldo = saldo - tarik;
                            Console.WriteLine("================================================================");
                            Console.WriteLine("Silahkan Ambil Uang Anda");
                            Console.WriteLine("Saldo Anda Saat Ini Rp {0}", saldo);
                            Console.WriteLine("================================================================");
                        }
                        Console.Write("Masukkan PIN ");
                        pin = int.Parse(Console.ReadLine());
                        break;
                    case 3:
                        Console.Write("Masukkan Jumlah Setor Rp.");
                        setor = int.Parse(Console.ReadLine());
                        saldo = saldo + setor;
                        Console.WriteLine("================================================================");
                        Console.WriteLine("Saldo Anda Saat Ini {0}", saldo);
                        Console.WriteLine("================================================================");
                        Console.Write("Masukkan PIN ");
                        pin = int.Parse(Console.ReadLine());
                        break;
                    case 4:
                        Console.WriteLine("TERIMA KASIH TELAH MENGGUNAKAN ATM PRIBADI");
                        pin++;
                        Console.ReadLine(); 
                        break;

                    default:
                        Console.WriteLine("###############################################################");
                        Console.WriteLine("Input Tidak Valid");
                        Console.WriteLine("###############################################################");
                        Console.Write("Masukkan PIN ");
                        pin = int.Parse(Console.ReadLine());
                        break;
                }
            }
        }
    }
}