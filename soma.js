function somar() {
    let soma = 0; 
    for (let i = 1; 500 >= i; i++) { 
        if ( i % 2 != 0 && i % 3 == 0) {
            soma = soma + i;
        }
    }
    alert(soma);
}