function hitungKredit (tipe,tenor){
    let harga = 0;
    
    if (tipe === 'Rose'){
        harga = 120000000;
    }
    else if (tipe === 'Gold'){
        harga = 300000000;
    }
    if (tipe === 'Platinum'){
        harga = 360000000;
        
    }

    const dp =harga * 0.2;   
    let total = harga - dp;        
        if (tenor == 12){
            angsuran = total /12 ;
        }
        else if (tenor == 18){
            angsuran = total /18 ;
        }
        else if (tenor == 24){
            angsuran = total /24 ;
        }

        console.log (`type rumah : ${tipe}`)
        console.log (`Harga Rumah : ${harga}`)
        console.log (`Uang Muka : ${dp}`)
        console.log (`Sisa : ${total}`)
        console.log (`Lama Kredit : ${tenor}`)
        console.log (`Angsuran : ${angsuran}`)
        console.log ('bulan ke | Angsuran   | sisa  |')
        for (let i= 1; i<=tenor; i++){
            console.log (`${i} | ${angsuran}   | ${total}  |`);
            total -= angsuran;
        }
    // }else if (barang === 'B'){
    //     const harga = 3500;
    //     total = harga * jumlah;
    //     if (jumlah >= 5){
    //         const diskon = 0.5;
    //         total= total * diskon 
    //     }
    // }else if ( barang === 'C') {
    //     const harga = 5000
    //     total = harga * jumlah;
    // }
    return total;
}
hitungKredit('Rose',24)