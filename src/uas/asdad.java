/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package uas;

import java.util.Scanner;

/**
 *
 * @author ASUS
 */
public class asdad {
    public static void main(String[] args) {
        Scanner keyboard = new Scanner (System.in);
        int tinggi ;
        System.out.print("Masukkan tinggi data : ");
        tinggi = keyboard.nextInt();

        for (int x = 0; x <= tinggi; x++ ) {
            for (int y = 0 ; y < x ; y ++) {
                System.out.print("*");
        }
            System.out.println();
        }
    }
}
