/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package uas;

/**
 *
 * @author ASUS
 */
public class sdaasd {
     public static void main(String[] args) {
                   int jumlah = 0;
                   int baris = 0;
        int[][] Matrix = {
            {1,1,1,1},
            {2,2,2,2},
            {1,1,1,1},
            {2,2,2,2}
        };

        System.out.println("Menghitung Total masing masing baris : ");
        for ( int a = 0 ; a < Matrix.length ; a++){
            int hasil = 0;
                for(int b = 0 ; b < Matrix.length ; b++) {
                    jumlah += Matrix[a][b];
                    hasil += Matrix[a][b];
                    System.out.println("Jumlah dari baris ke " + a + "= " + hasil);

        }
            System.out.println(); 
    }
        System.out.println("Jumlah seluruh elemen : " +jumlah );
     }
}
