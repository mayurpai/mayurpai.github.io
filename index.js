function greet(name) {
        alert('Hey ' + name + ', it\'s great to have you here!');
}

function know() {
    know = function() {};
    return greet(prompt("First up, what's your name?"));
}
know();
