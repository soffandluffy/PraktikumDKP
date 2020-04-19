// modul scanner untuk membaca input user
import java.util.Scanner;

public class tugas {
    // main function
    public static void main(String[] args) {
        // deklarasi variabel
        String email, password;
        // membuat object baru dengan nama input dan membentuk Scanner
        Scanner input = new Scanner(System.in);
        System.out.print("Email : ");
        // membaca input user dan disimpan dalam variabel email
        email = input.nextLine();
        System.out.print("Password : ");
        // membaca input user dan disimpan dalam variabel password
        password = input.nextLine();
        
        // membuat object satu bernilai constructor baru untuk userService dengan isi parameter input email dan password
        userService satu = new userService( email, password );
        // memanggil function login
        satu.login();
    }
}
