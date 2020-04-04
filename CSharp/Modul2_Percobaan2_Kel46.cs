using System; 
  
namespace Modul2 { 
      
    class Hello { 
          
        static void Main(string[] args) { 
              
          	float a;
            string angka;
            Console.WriteLine("PROGRAM BILANGAN BULAT");
            Console.Write("Masukan Angka = ");
            angka = Console.ReadLine();
            float.TryParse(angka, out a);

            if(a > 0)
            {
                Console.WriteLine("BILANGAN BULAT POSITIF");
                Console.ReadLine();
            }
            else
            {
                Console.WriteLine("BILANGAN BULAT NEGATIF");
                Console.ReadLine();
            }
        } 
    } 
} 