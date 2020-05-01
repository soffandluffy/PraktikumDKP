import java.util.Scanner;
import java.util.Stack;
@SuppressWarnings("unchecked")
public class tugaskel46 {
    public static void main(String[] args) {
        int pilihan;
        Scanner input = new Scanner(System.in);
        Stack data = new Stack();
        Stack genap = new Stack();
        Stack ganjil = new Stack();
        for(int i = 30; i >= 1; i--){
            data.push(i);
        }
        while(!data.isEmpty()){
            if((int)data.peek() % 2 == 0) {
                genap.push(data.pop());
            } else {
                ganjil.push(data.pop());
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
                System.out.println("Stack Genap : ");
                System.out.print(genap + " ");
                System.out.println("");
            } else if (pilihan == 2) {
                System.out.println("Stack Ganjil : ");
                System.out.print(ganjil + " ");
                System.out.println("");
            } else {
                System.exit(0);
            }
        }
    }
}