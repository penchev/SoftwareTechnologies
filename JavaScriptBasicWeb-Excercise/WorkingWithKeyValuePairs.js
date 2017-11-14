function keyValuePairs(input){
    let arr = {};

    for(let i=0;i<input.length;i++){
        let splitted = input[i].split(' ');
        if(input[input.length-1]==splitted[0] && splitted.length>1) {
            arr.key = splitted[0];
            arr.value = splitted[1];
        }
    }
    if(arr.key==input[input.length-1])
        console.log(arr.value)
    else
        console.log('None')
}

keyValuePairs(['key value','key eulav','test tset','key'])