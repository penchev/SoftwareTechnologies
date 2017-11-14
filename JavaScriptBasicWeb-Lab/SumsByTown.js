function sumByTown(object){
    let objects = object.map(JSON.parse);
    let sums = {};
    for(let obj of objects){
        if(obj.town in sums){
            sums[obj.town]+=obj.income;
        }else{
            sums[obj.town]= obj.income;
        }
    }
    let towns = Object.keys(sums).sort();
    for(let town of towns){
        console.log(`${town} -> ${sums[town]}`)
    }
}
sumByTown('{"town":"Sofia","income":200}')