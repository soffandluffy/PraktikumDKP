using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Tugas_Kelompok46
{
    class Program //kelas utama
    {
        class Mahasiswa //kelas objek atau setter getter
        {
            private string Nama; //deklarasi atribut
            private string NIM;
            private string Jurusan;
            private string Status;
            private string Hobi;

            public void setNama(string val) //method set atribut
            {
                this.Nama = val; //menentukan nilai atribut
            }
            public string getNama() //method get atribut
            {
                return Nama; //mendapatkan nilai atribut dan mengembalikan ke fungsi yang memanggilnya
            }

            public void setNIM(string val)
            {
                this.NIM = val;
            }
            public string getNIM()
            {
                return NIM;
            }

            public void setJurusan(string val)
            {
                this.Jurusan = val;
            }
            public string getJurusan()
            {
                return Jurusan;
            }

            public void setStatus(string val)
            {
                this.Status = val;
            }
            public string getStatus()
            {
                return Status;
            }

            public void setHobi(string val)
            {
                this.Hobi = val;
            }
            public string getHobi()
            {
                return Hobi;
            }

        }

        static void Main(string[] args)
        {
            Mahasiswa mhs1 = new Mahasiswa();
            Console.WriteLine("=======Mahasiswa 1=======");
            mhs1.setNama("Soffan Marsus Ahmad"); 
            mhs1.setNIM("21120119130042");
            mhs1.setJurusan("Teknik Komputer");
            mhs1.setStatus("Mahasiswa");
            mhs1.setHobi("Hiking");

            Console.WriteLine(
                "Nama       : " + mhs1.getNama() +
                "\nNIM        : " + mhs1.getNIM() +
                "\nJurusan    : " + mhs1.getJurusan() +
                "\nStatus     : " + mhs1.getStatus() +
                "\nHobi       : " + mhs1.getHobi()
                );

            Console.WriteLine("=======Mahasiswa 2=======");

            Mahasiswa mhs2 = new Mahasiswa();
            mhs2.setNama("Muhammad Firmansyah"); 
            mhs2.setNIM("21120119130102");
            mhs2.setJurusan("Teknik Komputer");
            mhs2.setStatus("Mahasiswa");
            mhs2.setHobi("Baca Komik");

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
