import java.lang.Math; 

public class javavolbola {
    public static void main(String args[]) {
        
    	double phi,jarijari,volume;
        phi = 3.14;
        jarijari = 10;
    	System.out.println("Kelompok 46");   
        System.out.println("Soffan Marsus Ahmad\t (21120119130042)");   
        System.out.println("Muhammad Firmansyah\t (21120119130102)");   
        System.out.println("Shift : 2");
        System.out.println("Menghitung Volume Bola");
        System.out.print("Jari jari = ");
        System.out.println(jarijari);
        volume = 1.3 * phi * Math.pow(jarijari, 3);
        System.out.print("Volume Bola = ");
        System.out.print(volume);

    }
}