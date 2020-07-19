function greet(name) {
    alert('Hey ' + name + ', It\'s Great To Have You Here!');
}

function know() {
    know = function() {};
    return greet(prompt("May I Know Your Name?"));
}
know();

function mes() {
    alert('So Sweet Of You!')
}