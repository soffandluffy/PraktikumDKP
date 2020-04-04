import java.util.Scanner;
import java.lang.Math; 

public class inout {
    public static void main(String args[]) {
        
        Scanner scanner = new Scanner(System.in);
    	String nama,nim,jurusan;
        System.out.print("Nama =\t");
        nama = scanner.nextLine();
        System.out.print("NIM =\t");
        nim = scanner.nextLine();
        System.out.print("Jurusan =\t");
        jurusan = scanner.nextLine();
        System.out.println("Hai " + nama);
        System.out.println("Nim kamu " + nim);
        System.out.println("Kamu dari jurusan " + jurusan);
        System.out.println("Welcome");

    }
}