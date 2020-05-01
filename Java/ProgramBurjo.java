
import java.util.Scanner;

public class ProgramBurjo {
	int total;
	Scanner scan = new Scanner(System.in);
	public ProgramBurjo() {
		// TODO Auto-generated constructor stub
		int input;
		do {
			System.out.println();
			System.out.println("==========ISHAQ BURJO=========");
            System.out.println("==Membuat Indomie Sejak 1870=="); 
			System.out.println("marii dipesan Hayuuu Meluncurr");
			System.out.println("==============================");
			System.out.println("1. View Menu");
			System.out.println("2. Order");
			System.out.println("3. Exit");
			System.out.print("Choose >> ");
			input = scanInteger();
			switch(input) {
				case 1 :
					listMenu();
					break;
				case 2 :
					order();
					total = 0;
					break;
				case 3 :
					System.exit(0);
				default :
					System.out.println("Wrong Input!!!");
			}
			
			
		}while(input != 3);
		
	}
	
	public void listMenu() {
		System.out.println("MAIN COURSE");
		System.out.println("1. Indomie Rebus 	: Rp 7.000,-");
		System.out.println("2. Indomie Goreng 	: Rp 7.000,-");
		System.out.println("3. Bubur kacang ijo	: Rp 5.000,-");
		System.out.println("4. Nasi Goreng		: Rp 11.000,-");
		System.out.println();
		System.out.println("***************************************");
		System.out.println();
		System.out.println("DESERT");
		System.out.println("1. Es Teh		: Rp 2.000,-");
		System.out.println("2. Es Milo		: Rp 5.000,-");
		System.out.println("3. Nutrisari		: Rp 4.000,-");
		System.out.println("4. Air Putih		: FREE");
		System.out.println("5. Gorengan		: Rp 1.000,-");
		System.out.println();
		System.out.print("Press Enter to Main Menu...");
		scan.nextLine();
	}
	
	public void order(){
		int quant;
		String food;
		String des;
		int quantdes;
		System.out.println();
		System.out.println("MAIN COURSE");
		System.out.println("1. Indomie Rebus");
		System.out.println("2. Indomie Goreng");
		System.out.println("3. Bubur kacang ijo");
		System.out.println("4. Nasi Goreng");
		System.out.println();
		do {
			System.out.print("Choose food: ");
			food = scan.nextLine();
		}while(!food.equalsIgnoreCase("Indomie Rebus") && !food.equalsIgnoreCase("Indomie Goreng") && !food.equalsIgnoreCase("Bubur Kacang Ijo") && !food.equalsIgnoreCase("Nasi Goreng"));
		do {
			System.out.print("Enter Quantity [1..3]: ");
			quant = scanInteger();
		}while(quant < 1 || quant > 3);
		
		if(food.equalsIgnoreCase("Indomie Rebus") || food.equalsIgnoreCase("Indomie Goreng")) {
			for(int i = 0; i < quant; i++) {
				this.total += 7000;    
			}
                       
		}else if(food.equalsIgnoreCase("Bubur kacang ijo")) {
			for(int i = 0; i < quant; i++) {
				this.total += 5000;
			}
		}else if(food.equalsIgnoreCase("Nasi Goreng")) {
			for(int i = 0; i < quant; i++) {
				this.total += 11000;
			}
                        
		}
                
                fiturbaru objek = new fiturbaru();
                objek.fiturbaru();
                
                        
		System.out.println();
		System.out.println("Total Price: " + total);
		System.out.println();
		System.out.println("DESERT");
		System.out.println("1. Es Teh");
		System.out.println("2. Es Milo");
		System.out.println("3. Nutrisari");
		System.out.println("4. Air Putih");
		System.out.println("5. Gorengan");
		
		do {
			System.out.print("Choose Dessert: ");
			des = scan.nextLine();
		}while(!des.equalsIgnoreCase("es teh") && !des.equalsIgnoreCase("es milo") && !des.equalsIgnoreCase("nutrisari") && !des.equalsIgnoreCase("air putih") && !des.equalsIgnoreCase("gorengan"));
		do {
			System.out.print("Enter Quantity [1..3]: ");
			quantdes = scanInteger();
		}while(quantdes < 1 || quantdes > 3);
		
		if(des.equalsIgnoreCase("es teh")) {
			for(int i = 0; i < quantdes; i++) {
				this.total += 2000;
			}
		}else if(des.equalsIgnoreCase("es milo")) {
			for(int i = 0; i < quantdes; i++) {
				this.total += 5000;
			}
		}else if(des.equalsIgnoreCase("nutrisari")) {
			for(int i = 0; i < quantdes; i++) {
				this.total += 4000;
			}
		}else if(des.equalsIgnoreCase("gorengan")) {
			for(int i = 0; i < quantdes; i++) {
				this.total += 1000;
			}
		}
		System.out.println();
		System.out.println("Total Price : " + total);
		System.out.println();
		System.out.println("Suwun mas/mba...");
		System.out.println("Your Order Has Been Noted...Please Wait");
		System.out.print("Press Enter to Main Menu...");
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

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		new ProgramBurjo();
	}

}
