function largestThree(arr){
    let numbers = arr.map(Number);
    let numberSorted = numbers.sort((a,b)=> b-a);
    for(let i=0; i<3;i++)
        if(numberSorted[i]!=undefined)
        console.log(numberSorted[i]);
}

largestThree(['10', '30', '15', '20', '50', '5']);