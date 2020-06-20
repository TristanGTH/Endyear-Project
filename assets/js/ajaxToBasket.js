let price = document.getElementById('price').innerHTML;
let productId = document.getElementById('productId').value;
let button = document.getElementById('buyButton');

console.log(price);
console.log(productId);
console.log(button);


button.addEventListener("click", function () {
    fetch('index.php?controller=ajax', {
        method: 'POST',
        body: JSON.stringify({
            price,
            productId,


        }),
        //on dit au serveur qu'on lui envoie du json et on lui précise UTF-8
        headers: {
            "Content-type": "application/json; charset=UTF-8"
        }
    })
        .then(
            response => response.json()
        ).catch(
        error => console.error(error)
    )
})

    


