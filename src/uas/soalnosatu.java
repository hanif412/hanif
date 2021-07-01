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
public class soalnosatu {
     public static void main(String[] args){
        Scanner input = new Scanner(System.in);
        System.out.print("Tentukan batas : ");
        int x = input.nextInt();
        
        for(int i = 0; i < x;i++){
            for(int j =0; j<=i;j++){
                System.out.print("*");
            }  System.out.println("");
        }
     }
}
