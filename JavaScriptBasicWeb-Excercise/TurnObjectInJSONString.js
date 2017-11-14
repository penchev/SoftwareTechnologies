function turnInJSON(input){
    let person = {};
    for(let i=0;i<input.length;i++){
        let splitted = input[i].split(' -> ');
        if(!Number.isNaN(Number(splitted[1])))
            splitted[1]=Number(splitted[1]);
        person[splitted[0]]=splitted[1];
    }
    let jsonString = JSON.stringify(person);
    console.log(jsonString);
}

turnInJSON(['name -> Angel','surname -> Georgiev','age -> 20','grade -> 6.00']);