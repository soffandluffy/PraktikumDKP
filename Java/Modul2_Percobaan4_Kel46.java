import java.util.Scanner;

public class Modul2_Percobaan4_Kel46 {
    public static void main(String args[]) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Masukan Angka 1-2 yang di inginkan = ");
        int i = sc.nextInt();
        switch(i){
        case(1):System.out.println("Angka yang anda masukan bernilai A");break;
        case(2):System.out.println("Angka yang anda masukan bernilai B");break;
        default:System.out.println("Angka yang anda masukan tak bernilai A ataupun B");break;
        }
        System.out.println("Program Selesai");
    }
}