import java.util.Arrays; 

class Exponential{
	public static void main(String args[]){
		int arr[] = {2, 3, 4, 10, 40}; 
		int cari = 2; 
		int result = exponentialSearch(arr, arr.length, cari); 
		
		if(result < 0) 		
			System.out.println("Data tidak ditemukan");
		else
			System.out.println("Data ditemukan di index ke-" + result); 
	} 
	
	static int exponentialSearch(int arr[], int banyak, int x) {
		if (arr[0] == x) 
			return 0; 
	
		// Find range for binary search by 
		// repeated doubling 
		int i = 1; 
		while (i < banyak && arr[i] <= x) 
			i = i*2; 
	
		return Arrays.binarySearch(arr, i/2, Math.min(i, banyak), x); 
	}
} 
