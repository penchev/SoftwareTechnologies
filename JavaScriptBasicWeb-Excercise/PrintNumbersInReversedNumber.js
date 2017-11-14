function reversedOrder(input){
    var array = [];

    for(let i=input.length-1;i>=0;i--){
        array.push(Number(input[i]));
    }

    for(let number of array)
    console.log(number)
}

reversedOrder(['5','5.5','24','-3'])