
import java.util.Scanner;

public class fiturbaru {
 Scanner scan = new Scanner(System.in);
	public void fiturbaru() {
		int input;
		do {
			System.out.println();
			System.out.println("Pilih Koki Favorit");
			System.out.println("1. Bang Asep");
			System.out.println("2. Bang Bangbang");
                        System.out.println("3. Random");
			System.out.print("Choose >> ");
			input = scanInteger();
			switch(input) {
				case 1 :
					Koki1();
					break;
				case 2 :
					Koki2();
					break;
				case 3 :
					System.exit(0);
				default :
					System.out.println("Wrong Input!!!");
			}
			break;
			
		}while(input != 3);
		
	}
        public void Koki1() {
            System.out.println("Masakan Akan ditambah telur");
            scan.nextLine();
        }
        public void Koki2(){
            System.out.println("Masakan akan ditambah kornet");
            scan.nextLine();
        }
        public int scanInteger() {
        int number;
        try {
            number = this.scan.nextInt();
        } catch (Exception var3) {
            System.out.println("Input must be number");
            number = -1;
        }
        this.scan.nextLine();
        return number;
    }
}