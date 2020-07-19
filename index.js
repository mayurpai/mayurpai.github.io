function greet(name) {
    alert('Hey' + name)
}

function know() {
    return greet(prompt("May I Know Your Name?"));
}

know();