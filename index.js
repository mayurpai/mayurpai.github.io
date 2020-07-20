function greet(name) {
        alert('Hey ' + name + ', It\'s Great To Have You Here!');
}

function know() {
    know = function() {};
    return greet(prompt("First up, what's your name?"));
}
know();
