var cotainer = document.getElementById('c1');
var cotainer2 = document.getElementById('c2');

var dates = [
    document.getElementById('date1'),
    document.getElementById('date2')
]

var highlighters = [
    document.getElementById('caen'),
]

container.onclick = function() {
    this.style.transform = "scale(1.0)";
}

dates[0].onclick = function() {
    container.style.backgroundImage = "url('../images/map.png')";
}

dates[1].onclick = function() {
    container.style.backgroundImage = "url('../images/mapjul30.png')";
}

for (i = 0; i < highlighters.length; i++) {
    highlighters[i].onclick = function() {
        container.style.transform = "scale(2.6)";
    }
}