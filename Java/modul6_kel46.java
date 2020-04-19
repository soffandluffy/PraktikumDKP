public class modul6_kel46 {

    public static void main(String[] args) {
        
        //membuat objek mobil
        modul6_kel46_settergetter mobil_baru = new modul6_kel46_settergetter();
        
        //mengatur nilai atribut
        mobil_baru.setMerk("Mitsubishi");
        mobil_baru.setTipe("Mirage");
        mobil_baru.setWarna("merah");
        mobil_baru.setJenisBBM("Pertamax");
        
        //mencetak nilai
        System.out.println("Saya punya mobil dengan merk " + mobil_baru.getMerk());
        System.out.print(mobil_baru.getMerk() + " " + mobil_baru.getTipe());
        System.out.println(" berwarna " + mobil_baru.getWarna());
        System.out.println("Mobil saya menggunakan bensin berjenis " + mobil_baru.getJenisBBM() + ".");    
}
}
