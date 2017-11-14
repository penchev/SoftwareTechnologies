function storeObject(input){
    let array = [];


    for(let i=0;i<input.length;i++){
        let person ={};
        let splitted = input[i].split(' -> ');
        person.name = splitted[0];
        person.age = splitted[1];
        person.grade = splitted[2];
        array.push(person);
    }

    for(let person of array){
        console.log(`Name: ${person.name}`);
        console.log(`Age: ${person.age}`);
        console.log(`Grade: ${person.grade}`);
    }
}

storeObject(['Pesho -> 13 -> 6.00','Ivan -> 12 -> 5.57','Toni -> 13 -> 4.90'])