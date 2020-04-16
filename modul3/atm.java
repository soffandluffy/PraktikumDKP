import java.util.Scanner;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;

public class atm {
   public static void main(String[]args){
    Scanner input = new Scanner (System.in);
    LocalDateTime myDateObj = LocalDateTime.now();
    DateTimeFormatter myFormatObj = DateTimeFormatter.ofPattern("dd MMMM yyyy HH:mm:ss");
    String formattedDate = myDateObj.format(myFormatObj);
    int choice,add,sub,save;
    int saldo = 100000;
    while (true) {
     System.out.println("-------#==========================#-----");
     System.out.println("-------#  " + formattedDate +  "  #-----");
     System.out.println("-----------# Selamat Datang #-----------");
     System.out.println("-----------#      MENU      #-----------");
     System.out.println("-----------#  1. CEK SALDO  #-----------");
     System.out.println("-----------#  2. DEPOSIT    #-----------");
     System.out.println("-----------#  3. AMBIL UANG #-----------");
     System.out.println("-----------#  4. KELUAR     #-----------");
     System.out.println("-----------##################-----------");
     System.out.print("Masukkan pilihan menu : ");
     choice = Integer.parseInt(input.next());
      
     switch(choice){
     case 1 :
       System.out.println("Saldo anda : Rp. " + saldo);
     break;
      
     case 2 :
      System.out.print("Masukkan jumlah uang yang akan dideposit = Rp. ");
      add = input.nextInt();
      saldo += add;
      System.out.println("Saldo anda menjadi Rp." + saldo);
         break;
      
     case 3 :
       System.out.print("Masukkan jumlah uang yang ingin diambil = Rp. ");
       sub = input.nextInt(); 
       System.out.println("Saldo anda Rp.");
       System.out.println(saldo-sub);
       save = saldo - sub;

          if (save < 50000) {
            System.out.println("Maaf, Saldo anda Rp." + saldo + " batas minimal Saldo Rp.50000");
          } else {
            saldo = save;
            System.out.println("Saldo anda Rp." + save);
          }
          break;
      
     case 4 :
      System.exit(0);
     break;
      
     default:
      System.out.println("Silahkan masukkan pilihan menu");
      break;
     }
   }
   }
}