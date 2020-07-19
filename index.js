function greet(name) {
    alert('Hey ' + name)
}

function know() {
    know = function() {};
    return greet(prompt("May I Know Your Name?"));
}

know();