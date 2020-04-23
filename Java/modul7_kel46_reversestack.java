import java.util.Stack;
import java.util.Scanner;

class modul7_kel46_reversestack
{
   public static String reverse(String str)
   {
      if (str == null || str.equals(""))
         return str;

      Stack<Character> stack = new Stack<Character>();

      char[] rev = str.toCharArray();
      for (int i = 0; i < str.length(); i++)
         stack.push(rev[i]);

      int k = 0;

      while (!stack.isEmpty())
      {
         rev[k++] = stack.pop();
      }

      return String.copyValueOf(rev);
   }

   public static void main (String[] args)
   {
      String str;
      String kelompok;
      Scanner input = new Scanner(System.in);

      System.out.println("Kelompok : ");
      kelompok = input.nextLine();
      str = "KELOMPOK "+kelompok;
      str = reverse(str);

      System.out.println(str);
   }
}