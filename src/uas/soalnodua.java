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
public class soalnodua {
    public static void main(String[] args){
        
        int x [] []= {
            {2,2,2,2,2,2,2,2,2,2},
            {1,1,1,1,1,1,1,1,1,1},
            {2,2,2,2,2,2,2,2,2,2},
            {1,1,1,1,1,1,1,1,1,1},
            {2,2,2,2,2,2,2,2,2,2},
            {1,1,1,1,1,1,1,1,1,1},
            {2,2,2,2,2,2,2,2,2,2},
            {1,1,1,1,1,1,1,1,1,1},
            {2,2,2,2,2,2,2,2,2,2},
            {1,1,1,1,1,1,1,1,1,1}
        }
            ;
        
        int total = 0;
        int baris [] = new int [x.length];
        int kolom [] = new int [x.length];
        
        for(int i = 0; i < x.length;i++){
            for(int j =0; j<x[i].length;j++){
           total += x[i][j];  
           baris[i] += x[i][j];      
           kolom[i] += x[j][i];  
            } 
            System.out.println("Total Baris ke " + (i+1) + " : " + baris[i]);
            
            System.out.println("Total Kolom ke " + (i+1) + " : " + kolom[i]);
            System.out.println();
        }
        System.out.println("Total Jumlah Element Array : " + total);
     

        } 
    }

