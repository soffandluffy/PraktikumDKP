import java.util.Scanner;
import java.lang.Math; 

public class javatugas2 {
    public static void main(String args[]) {
        
        Scanner scanner = new Scanner(System.in);
    	double alas,tinggi,sisimiring;
    	System.out.println("Kelompok 46");   
        System.out.println("Soffan Marsus Ahmad\t (21120119130042)");   
        System.out.println("Muhammad Firmansyah\t (21120119130102)");   
        System.out.println("Shift : 2");
        System.out.println("Rumus Pythagoras");
        System.out.print("Alas = ");
        alas = scanner.nextDouble();
        System.out.print("Tinggi = ");
        tinggi = scanner.nextDouble();
        sisimiring = Math.sqrt(Math.pow(alas,2) + Math.pow(tinggi,2));
        System.out.print("Sisi miring = ");
        System.out.print(sisimiring);

    }
}