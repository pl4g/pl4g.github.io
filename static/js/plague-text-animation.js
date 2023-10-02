const element = document.getElementById('plague-text');
const textArray = [
    "I'm a developer",
    "I'm a programmer",
    "I'm a designer",
    "I'm an artist",
    "I'm a person",
    "I'm a plague"
]

let interval = null;
let i = 0;

clearInterval(interval);

interval = setInterval(animate, 750);

function animate() {
    if (i == textArray.length) {
        clearInterval(interval);
        return;
    } 

    element.innerText = textArray[i];
    i++;
}