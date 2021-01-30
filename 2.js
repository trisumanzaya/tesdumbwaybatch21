function hitungHurufDariKalimat(array,huruf){
let count=0;

for (let i = 0; i <= array.length; i++){

  if (huruf == array[i]){
    count++;
  }
}
console.log("Hasil Hitung "+huruf+" muncul sebanyak "+count+" kali");
}

hitungHurufDariKalimat("saya mau makan sate bersama teman saya setelah lulus dari sekolah dasar","a");