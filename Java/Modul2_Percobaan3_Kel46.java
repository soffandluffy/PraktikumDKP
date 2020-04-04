import java.util.Scanner;

public class Modul2_Percobaan3_Kel46 {
    public static void main(String args[]) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Masukan Angka = ");
        int i = sc.nextInt();
        if(i == 0){
            System.out.println("Angka yang dimasukan adalah 0");
        }
        else if(i>0) {
            System.out.println("Bilangan Bulat Positif yaitu "+i);
        }
        else if(i<0){
            System.out.println("Bilangan Buat Negatif yaitu "+i);
        }
        System.out.println("Program Selesai");
    }
}