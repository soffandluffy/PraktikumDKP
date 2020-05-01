import java.util.Scanner;

public class Tugas_Kelompok46 {

    public static void main(String[] args) {
        
        Scanner input = new Scanner(System.in);
        
        String nama1,nama2,jurusan1,jurusan2,hobi1,hobi2,status1,status2;
        long nim1,nim2;

        System.out.println("===========Input Mahasiswa 1===========");
        System.out.print("Nama \t\t: ");
        nama1 = input.nextLine();
        System.out.print("NIM \t\t: ");
        nim1 = Long.parseLong(input.nextLine());
        System.out.print("Jurusan \t: ");
        jurusan1 = input.nextLine();
        System.out.print("Status \t\t: ");
        status1 = input.nextLine();
        System.out.print("Hobi \t\t: ");
        hobi1 = input.nextLine();        

        Mahasiswa mhs1 = new Mahasiswa();
        mhs1.setNama(nama1);
        mhs1.setNim(nim1);
        mhs1.setJurusan(jurusan1);
        mhs1.setStatus(status1);
        mhs1.setHobi(hobi1);
        
        System.out.println("===========Input Mahasiswa 2===========");
        System.out.print("Nama \t\t: ");
        nama2 = input.nextLine();
        System.out.print("NIM \t\t: ");
        nim2 = Long.parseLong(input.nextLine());
        System.out.print("Jurusan \t: ");
        jurusan2 = input.nextLine();
        System.out.print("Status \t\t: ");
        status2 = input.nextLine();
        System.out.print("Hobi \t\t: ");
        hobi2 = input.nextLine();        

        Mahasiswa mhs2 = new Mahasiswa();
        mhs2.setNama(nama2);
        mhs2.setNim(nim2);
        mhs2.setJurusan(jurusan2);
        mhs2.setStatus(status2);
        mhs2.setHobi(hobi2);
        
        System.out.println("===========Mahasiswa 1===========");
        System.out.println("Nama        : " + mhs1.getNama());
        System.out.println("NIM         : " + mhs1.getNim());
        System.out.println("Jurusan     : " + mhs1.getJurusan());
        System.out.println("Status      : " + mhs1.getStatus());    
        System.out.println("Hobi        : " + mhs1.getHobi());
        System.out.println("=================================");
        System.out.println();
        System.out.println("===========Mahasiswa 2===========");
        System.out.println("Nama        : " + mhs2.getNama());
        System.out.println("NIM         : " + mhs2.getNim());
        System.out.println("Jurusan     : " + mhs2.getJurusan());
        System.out.println("Status      : " + mhs2.getStatus());    
        System.out.println("Hobi        : " + mhs2.getHobi());
        System.out.println("=================================");

    }
}
