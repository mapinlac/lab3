function displayDate() {
    document.getElementById("time").innerHTML = Date();
}

const hobbies = ["Soccer", "Computer Games", "Reading"];
let text = "";
for (let i = 0; i < hobbies.length; i++) {
  text += hobbies[i] + "<br>";
}
document.getElementById("hobbies").innerHTML = text;

document.getElementById("random").innerHTML = Math.random();

const Apex = { title:"APEX", type:"FPS Battle Royale", team:"3 people"};

document.getElementById("apex").innerHTML = "The game is called " + Apex.title + "it is a " + Apex.type + "and can be played with " + Apex.team;

function myFunction(p1, p2) {
  return p1 * p2;
}
document.getElementById("function").innerHTML = myFunction(5, 6);

try {
  variable("Welcome guest!");
}
catch(err) {
  document.getElementById("error").innerHTML = err.message;
}