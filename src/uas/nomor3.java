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
public class nomor3 {
    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);
        
        int bilangan [][]= {
                           {2,2,2,2,2,2,2,2,2,2},
                           {1,2,1,1,1,1,1,1,1,1},
                           {2,2,2,2,2,2,2,2,2,2},
                           {1,1,1,1,1,1,1,1,1,1},
                           {2,2,2,2,2,2,2,2,2,2},
                           {1,1,1,1,1,1,1,1,1,1},
                           {2,2,2,2,2,2,2,2,2,2},
                           {1,1,1,1,1,1,1,1,1,1},
                           {2,2,2,2,2,2,2,2,2,2},
                           {1,1,1,1,1,1,1,1,1,1}
                                                  };
        System.out.println(" MUHAMMAD HANIF 1TIC ");
        int jumlah = 0;
        int baris [] = new int [bilangan.length];
        int kolom [] = new int [bilangan.length];
        
         System.out.println("1. MENGHITUNG BILANGAN PADA BARIS ");
         System.out.println("2. MENGHITUNG BILANGAN PADA KOLOM ");
        System.out.print("Pilihan : ");
        int pilih = sc.nextInt();
        
        switch (pilih) {
            case 1 :
                System.out.print("Baris ke : ");
                int baris1 = sc.nextInt();
                
                for(int i = 0; i < baris1;i++){
            
            for(int j =0; j<bilangan[i].length;j++){
           baris[i] += bilangan[baris1-1][j];  
            } 
 
            System.out.println("Total Bilangan Baris ke " + (i+1) + " = " + baris[i]);
            System.out.println();
        }
            case 2 : 
                System.out.print("Kolom ke : ");
                int kolom1 = sc.nextInt();
                
                for(int i = 0; i < kolom1;i++){
            
            for(int j =0; j<bilangan[i].length;j++){
           kolom[i] += bilangan[j][kolom1-1];  
            } 
            System.out.println("Total Bilangan Kolom ke " + (i+1) + " = " + kolom[i]);
            System.out.println();
        }
                
        }
        
        
    }
}
