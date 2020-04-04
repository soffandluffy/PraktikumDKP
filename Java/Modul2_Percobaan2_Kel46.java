import java.util.Scanner;

public class Modul2_Percobaan2_Kel46 {
    public static void main(String args[]) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Masukan Angka = ");
        int i = sc.nextInt();
        if(i > 10){
            System.out.println("Angka lebih besar dari 10 yaitu "+i);
        }
        else{
            System.out.println("Angka kurang dari 10 yaitu "+i);
        }
        System.out.println("Program Selesai");
    }
}