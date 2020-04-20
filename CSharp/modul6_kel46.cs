using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
namespace BAB7_KEL46{
    class Program{
        class Mobil {
            private string Merk;
            private string Tipe;
            private string Warna;
            private string jenisBBM;

            public void setMerk(string val){this.Merk = val;}
            public string getMerk() {return Merk;}
            public void setTipe(string val){this.Tipe = val;}
            public string getTipe(){ return Tipe;}
            public void setWarna(string val){this.Warna = val;}
            public string getWarna(){return Warna;}
            public void setJenisBBM(string val){this.jenisBBM = val;}
            public string getJenisBBM(){return jenisBBM;}
        }
        static void Main(string[] args)
        {
            Mobil mobilSaya = new Mobil();
            mobilSaya.setMerk("Suzuki");
            mobilSaya.setTipe("Ertiga");
            mobilSaya.setWarna("Hitam");
            mobilSaya.setJenisBBM("Pertamax");

            Console.WriteLine( "Saya punya mobil bermerk " + mobilSaya.getMerk() +
                " dengan tipe " + mobilSaya.getTipe() +
                ".\nMobil saya berwarna " + mobilSaya.getWarna() +
                ".\nMobil saya menggunakan bensin berjenis " + mobilSaya.getJenisBBM()
                );

            Console.ReadLine();
        }
    }
}
