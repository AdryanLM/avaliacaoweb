function raio() {
    //raio pra uma variavel
    let raio = parseFloat(prompt("digite o raio:"));

    if (raio > 0) {
        
        
        let perimetro = 2 * Math.PI * raio;
        let area = Math.PI * raio * raio;
        let diametro = 2 * raio;

        alert("raio = " + raio + "\nperimetro = " + perimetro + "\narea = " + area + "\ndiametro = " + diametro);
    } else {
        alert("valor invalido");
    }
}