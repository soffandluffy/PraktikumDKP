import java.util.Scanner;
import java.util.Stack;
@SuppressWarnings("unchecked")
public class tugaskel46 {
    public static void main(String[] args) {
        int pilihan;
        int jum;
        int m;
        Scanner input = new Scanner(System.in);
        Stack genap = new Stack();
        Stack ganjil = new Stack();
        System.out.print("Berapa input yang diinginkan : ");
        jum = Integer.parseInt(input.nextLine());
        int[] data = new int[jum];
        for (int i = 0; i < jum; i++) {
            System.out.print("Input ke - " + (i+1) + " : ");
            m = Integer.parseInt(input.nextLine());
            data[i] = m;
            if (m % 2 == 0) {
                genap.push(m);
            } else {
                ganjil.push(m);
            }
        }
        while(true){
            System.out.println("===========Menu=========");
            System.out.println("1. Tampilkan Stack Genap");
            System.out.println("2. Tampilkan Stack Ganjil");
            System.out.println("=========================");
            System.out.print("Pilih menu : ");
            pilihan = input.nextInt();
            if (pilihan == 1) {
                System.out.println(genap + " ");
            } else if (pilihan == 2) {
                System.out.println(ganjil + " ");
            } else {
                System.exit(0);
            }
        }
    }
}