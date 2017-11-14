function productOfThree([arr1,arr2,arr3]){
    let num1 = Number(arr1);
    let num2 = Number(arr2);
    let num3 = Number(arr3);
    let counter = 0;
    let positive = false;

    if(num1>0 && num2>0 && num3>0){
        positive=true;
    }
    if(num1<0){
        counter++;
    }
    if(num2<0){
        counter++;
    }
    if(num3<0){
        counter++;
    }

    if(counter%2==0) {
        positive = true;
    }

    if(num1==0 || num2 == 0 || num3==0){
        positive=true;
    }
    if(positive)
        console.log(`Positive`);
    else
        console.log(`Negative`);
}

productOfThree(['-3','-4','5']);