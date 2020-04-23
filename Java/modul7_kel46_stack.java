import java.util.Scanner;
import java.util.Stack;

@SuppressWarnings("unchecked")
public class modul7_kel46_stack {

    public static void main(String[] args) {
        int pilihan;
        int data;
        Stack result = new Stack();
        //looping until false condition
        do{
           //Displaying Menu
            System.out.println("---Ini Stack---");
            System.out.println("1. PUSH Item");
            System.out.println("2. POP Item");
            System.out.println("3. Lihat Daftar Data");
            System.out.println("4. Lihat Data Teratas");
            System.out.println("0. Keluar");
            Scanner input = new Scanner(System.in);
            System.out.print("Masukkan Pilihan : ");
            pilihan = input.nextInt();
            //condition for choice
            if(pilihan==1){
                System.out.print("Data yang ditambahkan : ");
                data = input.nextInt();
                result.push(data);
                System.out.println("");
            }
            else if(pilihan==2){
                if (result.isEmpty()) {
                    System.out.println("Data kosong");
                } else {
                    result.pop();
                    System.out.println("");
                }
            }
            else if(pilihan==3){
                System.out.print(result + " ");
                System.out.println("");
            }
            else if(pilihan==4){
                if (result.isEmpty()) {
                    System.out.println("Data kosong");
                } else {
                    System.out.println("Data teratas : "+result.peek());
                    System.out.println(""); 
                }
            }
            else if(pilihan==0){
                System.exit(0);
            }
            else{
                System.out.println("Pilihan Tidak Ada!!");
            }//end of condition
        } 
        while(pilihan!=0);//end looping
    }
}