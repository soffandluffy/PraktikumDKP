using System; 
  
namespace HelloWorldApp { 
      
    class Hello { 
          
        static void Main(string[] args) { 
              
            string nilai;
            Console.Write("Masukan Nilai A(Lingkaran) B(Persegi) C(segitiga) :");
            nilai = Console.ReadLine();

            switch (nilai)
            {
                case "A":
                    double jari;
                    Console.WriteLine("Menghitung luas lingkaran");
                    Console.WriteLine("Masukan jari jari :");
                    jari = Convert.ToDouble(System.Console.ReadLine());
                    Console.WriteLine("Luas lingkaran ");
                    Console.WriteLine(3.14 * jari * jari);
                    Console.ReadLine();break;
                case "B":
                    double sisi;
                    Console.WriteLine("Menghitung luas persegi :");
                    Console.WriteLine("Masukan sisi :");
                    sisi = Convert.ToDouble(System.Console.ReadLine());
                    Console.WriteLine("Luas persegi");
                    Console.WriteLine(sisi * sisi);
                    Console.ReadLine();break;
                case "C":
                    Console.WriteLine("Menghitung luas segitiga :");
                    double alas,tinggi;
                    Console.WriteLine("Masukan alas :");
                    alas = Convert.ToDouble(System.Console.ReadLine());
                    Console.WriteLine("Masukan tinggi :");
                    tinggi = Convert.ToDouble(System.Console.ReadLine());
                    Console.WriteLine("Luas segitiga =");
                    Console.WriteLine(0.5 * alas * tinggi);
                    Console.ReadLine();break;
                default:
                    Console.WriteLine("Tidak ada");
                    Console.ReadLine();break;
            }

        } 
    } 
} 