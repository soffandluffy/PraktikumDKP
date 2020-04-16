using System;

class Program
{
    static void Main(string[] args)
    { 
        percobaan2 objek2 = new percobaan2();
        objek2.pembagian(15,5);
        int hasil = objek2.pengurangan(15,5);
        Console.WriteLine("Hasil pengurangan 15 - 5 = " + hasil);
    }
}

// METHOD
class percobaan2
{
    public void pembagian(float a, float b)
    {
        double c = a / b;
        Console.WriteLine("Hasil pembagian {0} dengan {1} adalah {2}", a, b, c);
    }
    public int pengurangan(int a, int b)
    {
        int c = a - b;
        return c;
    }
}