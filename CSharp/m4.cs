using System;

namespace KelilingLingkaran
{
    class Program
    {
        static void Main(string[] args)
        {
            greet hello = new greet();
            hello.hello();
        }
    }

    class greet {
        public void hello(){
            Console.WriteLine("Hello");
        }
    }
}