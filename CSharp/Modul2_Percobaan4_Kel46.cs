using System; 
  
namespace Modul2 { 
      
    class Hello { 
          
        static void Main(string[] args) { 
              
            string nilai;
            Console.Write("Masukan Nilai (A-E) :");
            nilai = Console.ReadLine();

            switch (nilai)
            {
                case "A":
                    Console.WriteLine("Nilai Anda\t: {0} (80 - 100)", nilai);
                    Console.ReadLine();break;
                case "B":
                    Console.WriteLine("Nilai Anda\t: {0} (80 - 100)", nilai);
                    Console.ReadLine(); break;
                case "C":
                    Console.WriteLine("Nilai Anda\t: {0} (80 - 100)", nilai);
                    Console.ReadLine(); break;
                case "D":
                    Console.WriteLine("Nilai Anda\t: {0} (80 - 100)", nilai);
                    Console.ReadLine(); break;
                case "E":
                    Console.WriteLine("Nilai Anda\t: {0} (80 - 100)", nilai);
                    Console.ReadLine(); break;
                default:
                    Console.WriteLine("Nilai yang Anda Masukan SALAH");
                    Console.ReadLine();break;
            }

        } 
    } 
} 