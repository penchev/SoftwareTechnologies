function setValue(input){
    var arr = new Array(Number(input[0]));

    for(let j=0; j<arr.length;j++){
        arr[j]=0;
    }
    for(let i=1;i<input.length;i++){
        let splited = input[i].split(' - ').map(Number);
        arr[splited[0]] = splited[1];
    }

    for(let number of arr){
        console.log(number)
    }
}

setValue(['2','0 - 5', '0 - 6','0 - 7'])