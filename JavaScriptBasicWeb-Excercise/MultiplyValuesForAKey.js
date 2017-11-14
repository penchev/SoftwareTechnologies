function keyValuePairs(input){
    let arr = [];

    for(let i=0;i<input.length-1;i++){
        let splitted = input[i].split(' ');
        let obj={};
        obj.key=splitted[0];
        obj.value = splitted[1];
        arr.push(obj);
    }
    let thereIsSuchElement = false;
    for(let element of arr){
        if(element.key==input[input.length-1]){
            console.log(element.value)
            thereIsSuchElement=true;
        }
    }
    if(!thereIsSuchElement)
        console.log('None')
}

keyValuePairs(['key value','key eulav','test tset','key'])