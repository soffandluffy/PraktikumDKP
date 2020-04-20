using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Tugas_Kelompok46
{
    class Program
    {
        class Mahasiswa
        {
            private string Nama;
            private double NIM;
            private string Jurusan;
            private string Status;
            private string Hobi;

            public void setNama(string val){this.Nama = val;}
            public string getNama(){return Nama;}
            public void setNIM(double val){this.NIM = val;}
            public double getNIM(){return NIM;}
            public void setJurusan(string val){this.Jurusan = val;}
            public string getJurusan(){return Jurusan;}
            public void setStatus(string val){this.Status = val;}
            public string getStatus(){return Status;}
            public void setHobi(string val){this.Hobi = val;}
            public string getHobi(){return Hobi;}
        }

        static void Main(string[] args)
        {

            string nama1,nama2,jurusan1,jurusan2,status1,status2,hobi1,hobi2;
            double nim1,nim2;

            Console.WriteLine("=======Input Mahasiswa 1=======");
            Console.Write("Nama \t\t:");
            nama1 = Console.ReadLine();
            Console.Write("NIM \t\t:");
            nim1 = Convert.ToDouble(Console.ReadLine());
            Console.Write("Jurusan \t:");
            jurusan1 = Console.ReadLine();
            Console.Write("Status \t\t:");
            status1 = Console.ReadLine();
            Console.Write("Hobi \t\t:");
            hobi1 = Console.ReadLine();

            Console.WriteLine("=======Input Mahasiswa 1=======");
            Console.Write("Nama \t\t:");
            nama2 = Console.ReadLine();
            Console.Write("NIM \t\t:");
            nim2 = Convert.ToDouble(Console.ReadLine());
            Console.Write("Jurusan \t:");
            jurusan2 = Console.ReadLine();
            Console.Write("Status \t\t:");
            status2 = Console.ReadLine();
            Console.Write("Hobi \t\t:");
            hobi2 = Console.ReadLine();

            Console.WriteLine();
            Console.WriteLine();
            Mahasiswa mhs1 = new Mahasiswa();
            Console.WriteLine("=======Mahasiswa 1=======");
            mhs1.setNama(nama1); 
            mhs1.setNIM(nim1);
            mhs1.setJurusan(jurusan1);
            mhs1.setStatus(status1);
            mhs1.setHobi(hobi1);

            Console.WriteLine(
                "Nama       : " + mhs1.getNama() +
                "\nNIM        : " + mhs1.getNIM() +
                "\nJurusan    : " + mhs1.getJurusan() +
                "\nStatus     : " + mhs1.getStatus() +
                "\nHobi       : " + mhs1.getHobi()
                );

            Console.WriteLine("=======Mahasiswa 2=======");

            Mahasiswa mhs2 = new Mahasiswa();
            mhs2.setNama(nama2); 
            mhs2.setNIM(nim2);
            mhs2.setJurusan(jurusan2);
            mhs2.setStatus(status2);
            mhs2.setHobi(hobi2);

            Console.WriteLine(
                "Nama       : " + mhs2.getNama() +
                "\nNIM        : " + mhs2.getNIM() +
                "\nJurusan    : " + mhs2.getJurusan() +
                "\nStatus     : " + mhs2.getStatus() +
                "\nHobi       : " + mhs2.getHobi()
                );

            Console.ReadLine();
        }
    }
}
