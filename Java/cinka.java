import java.util.Scanner;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;

public class cinka {    

    public static void main(String[] args) {
        Scanner input = new Scanner (System.in);
        kelompok kelompok = new kelompok ();
        kelompok.kelompok("Kelompok 3");
        kelompok.aplikasi();
        System.out.println ("         Masukan Data          ");
        System.out.println ("-------------------------------");
        System.out.print   ("Nama            : ");
        String nama = input.nextLine();
        System.out.print   ("NIM             : ");
        String nim = input.nextLine();
        System.out.print   ("Jurusan     : ");
        String jurusan = input.nextLine();
        System.out.print   ("Jumlah Buku     : ");
        int jumlah = input.nextInt();
        System.out.println ();
        System.out.print   ("Tanggal Peminjaman     : ");
        int tanggal = input.nextInt();
        System.out.print   ("Bulan Peminjaman     : ");
        int bulan = input.nextInt();

        System.out.println("Harap dikembalikan pada tanggal : " + tanggal(tanggal,bulan));

        int total=0;
        int i=0;
        String[] judul= new String[jumlah];   
        int[] jenis = new int[jumlah];
        int[] harga = new int[jumlah];
        
        do{
            Scanner inputarr = new Scanner(System.in);
            System.out.print   ("Judul Buku ke-"+(i+1)+" : ");
            judul[i]= inputarr.nextLine();
            System.out.print ("Jenis Buku <1>Baru <2>Bekas | pilih : ");
            jenis[i] = inputarr.nextInt();
            if(jenis[i]== 1){
            harga[i]= 10000;}
            else if(jenis[i]==2){
            harga[i] = 4000;} 
            i++; 
        }while (i<jumlah);
            show(nama, nim, jurusan);
            System.out.println ("-------------------------------");
            System.out.println ("       Buku Yang Dipinjam      ");
            System.out.println ("-------------------------------");
            i=0;
        do{ 
         System.out.println ((i+1)+" | "+judul[i]+" | Harga Sewa : "+harga[i]);
         total=total+ harga[i];
         i++;
         }
        while (i<jumlah);
        System.out.println ("-------------------------------");
        System.out.println ("Total Biaya Pinjam "+total);

    } 

    static void show(String nama,String nim,String jurusan){
        System.out.println();
        System.out.println ("-------------------------------");
        System.out.println ("Nama            : "+nama);
        System.out.println ("NIM             : "+nim);
        System.out.println ("Jurusan         : "+jurusan);
    } 

    static int tanggal(int tanggal, int bulan){
        if (bulan == 2) {
            if (tanggal >= 27) {
                tanggal = tanggal + 4 - 30;
                return tanggal;
            } else {
                return tanggal + 3;
            }
        }
        else if (bulan % 2 == 0){
            if (tanggal >= 28) {
                tanggal = tanggal + 4 - 31;
                return tanggal;
            } else {
                return tanggal + 3;
            }
        } else{
            if (tanggal >= 29) {
                tanggal = tanggal + 4 - 32;
                return tanggal;
            } else {
                return tanggal + 3;
            }
        }
    }
}

