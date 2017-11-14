function printSymmetric(num){
    let number = Number(num[0]);

    for (let i=1;i<=number;i++){
        let checkingNumber = i;
        let temp = checkingNumber%10;
        let aboveTwoDigits = 0;
        if(i>99)
            aboveTwoDigits=1;
        if(i>9) {
            checkingNumber = Number(checkingNumber.toString().substr(0,1));
            if (temp == checkingNumber) {
                console.log(i);
            }
        }else {
            console.log(i);
        }
    }
}

printSymmetric('757');