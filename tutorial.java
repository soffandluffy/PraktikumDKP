// Masuk ke github https://github.com/soffandluffy/Penggajian
// terus klik tombol hijau Clone or Download, terus copy link yang ada di box https://github.com/soffandluffy/Penggajian.git
// terus buka git bash
// masuk ke folder project, dimana aja bebas buat nyimpen project Penggajian
// caranya misalnya mau di document di git bash nya masukin cd ~/Document
// kalo udah masukkin command "git clone https://github.com/soffandluffy/Penggajian.git"
// jangan di close dulu git bash nya
// tungguin clone selesai kalo udah nanti folder projectnya ada di document
// buka folder Penggajian pake VSCODE atau sublime text

// 1.
// buka payroll.java
// Tambahin kode ini dibawah int gol,hari,asuransi,gapok,transport,total,gaji;
identitas identitas = new identitas();

identitas.kelompok("Kelompok 46");
identitas.aplikasi();

// 2. 
// bikin file baru namanya identitas.java terus isinya ini (sama comment methodnya)

// Method identitas
public class identitas {
	public void kelompok(String kelompok){
		System.out.println("Kami dari " + kelompok);
		System.out.println("Soffan Marsus Ahmad\t 21120119130042");
		System.out.println("\t\t DAN \t");
		System.out.println("Muhammad Firmansyah\t 21120119130102");		
	}

	public void aplikasi(){
		System.out.println("    PROGRAM GAJI KARYAWAN    ");
        System.out.println("$$$$$$$$$$$$$$$$$$$$$$$$$$$$$");
	}
}

// 3.
// di payroll.java tambahin ini dibawah //function
static void tampilkan(int transport, int gapok, int asuransi, int total) {
    System.out.println ("Tunjangan Transport : "+transport);
    System.out.println ("Gaji Pokok : "+gapok);
    System.out.println ("Asuransi : "+asuransi);
    System.out.println ("Total Gaji : "+total);
}

// 4.
// terus ubah semua yang ada didalem case
System.out.println ("Tunjangan Transport : "+transport);
System.out.println ("Gaji Pokok : "+gapok);
System.out.println ("Asuransi : "+asuransi);
System.out.println ("Total Gaji : "+total);
// ini ^ jadi ini \/
tampilkan(transport,gapok,asuransi,total);

// kalo udah save identitas.java sama payroll.java nya 
// Buka command prompt, terus masuk ke folder Documents/Penggajian pake command "cd ~/Documents/Penggajian"
// nanti masuk ke folder Penggajian terus masukin command "javac identitas.java"
// terus command "javac payroll.java"
// terus command "java payroll" ini nanti nge run aplikasinya, test sendiri aja
// kalo udah bisa jalan lancar jaya aman tentram
// masukin command "git add ." terus enter
// terus command "git commit -m "Ini pesan commitnya, bebas ketik apa aja, kalo bisa ngejelasin yang lu buat" " terus enter
// misalnya pesan commit nya "Tambahan method dan function"
// kalo udah masukin command "git push -u origin master"

// Catatan 
// git clone itu fungsinya buat nge clone/copy project yang online ditaro di laptop kita sendiri
// kalo javac sama java itu buat compile sama ngejalanin programnya
// "git add ." ini fungsinya buat nambahin file yang tadi dibuat, buat di push ke git
// "git commit -m" itu fungsinya buat ngesubmit file yang diubah atau ditambahin, -m maksudnya message
// "git push -u origin master" ini fungsinya buat ngupdate file yang kita buat atau ubah ke repository online