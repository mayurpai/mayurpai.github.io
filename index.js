function greet(name) {
    if (name == 'Mayur') {
        alert('Hey ' + name + ', It\'s Awesome To Have You Here!');
    } else {
        alert('Hey ' + name + ', It\'s Great To Have You Here!');
    }
}

function know() {
    know = function() {};
    return greet(prompt("May I Know Your Name?"));
}
know();