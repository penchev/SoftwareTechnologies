function parseJSON(input) {
    let arr = [];

    for(let i=0;i<input.length;i++){
        let person = {};
        person=JSON.parse(input[i]);
        arr.push(person)
    }

    for(let person of arr){
        console.log(`Name: ${person.name}`);
        console.log(`Age: ${person.age}`);
        console.log(`Date: ${person.date}`);

    }
}

parseJSON(['{"name":"Gosho","age":10,"date":"19/06/2005"}','{"name":"Tosho","age":11,"date":"04/04/2005"}'])