import java.util.Arrays;
import java.util.LinkedList;
import java.util.Queue;
import java.util.Scanner;

@SuppressWarnings("unchecked")
public class modul7_kel46_queue {

    public static void main(String[] args) {
        int pilihan;
        int data;
        Queue<Integer> antrian = new LinkedList<Integer>();
        //looping until false condition
        do{
            //Displaying Menu
            System.out.println ("---Ini Queue---");
            System.out.println("1. Enqueue Item");
            System.out.println("2. Dequeue Item");
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
                antrian.add(data);
                System.out.println("");
            }
            else if(pilihan==2){
                if (antrian.isEmpty()) {
                    System.out.println("Data kosong");
                } else {
                    antrian.poll();
                    System.out.println("");
                }
            }
            else if(pilihan==3){
                System.out.println(antrian+ " ");
                System.out.println("");
            }
            else if(pilihan==4){
                if (antrian.isEmpty()) {
                    System.out.println("Data kosong");
                } else {
                    System.out.println("Data teratas : "+ antrian.peek());
                    System.out.println("");
                }
                
            }
            else if(pilihan==0){
                System.exit(0);
            }
            else{
                System.out.println("Pilihan Tidak Ada!!");
                System.out.println("");
            }//end of condition
        } while(pilihan!=0);//end looping
    }
}