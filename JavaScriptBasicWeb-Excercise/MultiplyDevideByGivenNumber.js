function multiplyDevideByNumber([N,X]){
    let num1 = Number(N);
    let num2 = Number(X);
    let result;

    if(X>=N){
        result = num1*num2;
    }else{
        result = num1/num2;
    }
    console.log(result)
}

multiplyDevideByNumber(['13','13'])