function sumThree([num]) {
    let arr = num.split(' ');
    let num1 = Number(arr[0]);
    let num2 = Number(arr[1]);
    let num3 = Number(arr[2]);
    if(num1 + num2 == num3){
        if(num2>num1)
            console.log(`${num1} + ${num2} = ${num3}` );
        else
            console.log(`${num2} + ${num1} = ${num3}` );
    }else if(num1 + num3 == num2){
        if(num3>num1)
            console.log(`${num1} + ${num3} = ${num2}` );
        else
            console.log(`${num3} + ${num1} = ${num2}` );
    }else if(num3 + num2 == num1){
        if(num3>num2)
            console.log(`${num2} + ${num3} = ${num1}` );
        else
            console.log(`${num3} + ${num2} = ${num1}` );
    }else
        console.log(`No`);
}

sumThree();