function addRemoveElements(input){
    let arr = [];

    for(let i =0 ; i<input.length;i++){
        let splitted = input[i].split(' ');
        if(splitted[0]=='add'){
            arr.push(splitted[1]);
        }else if(splitted[0]=='remove'){
            arr.splice(splitted[1],1);
        }
    }

    for(let number of arr){
        console.log(number)
    }
}

addRemoveElements(['add 3','add 5','add 7'])