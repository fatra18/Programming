//biasa
var makanan= ["bakso"];

alert (makanan[0])

var minuman= ["teh"];

alert (minuman[0])

var cemilan= ["mie"];

alert (cemilan[0])
//child 2
var mobil= ["honda", ['civic','brio']]

document.write (mobil[1][1]+'<br>');

var hp= ["iphone", ['Ip8','Ip9']]

document.write (hp[1][1]+'<br>');

var motor= ["yamaha", ['ninja','mio']]

document.write (motor[1][1]+'<br>','<hr>');
//child3
var nama= ["yamaha", ['ninja',['mio','z1','scoppy']]]

document.write (nama[1][1][0]);
document.write('<br>')
var nama= ["yamaha", ['ninja',['mio','z1','scoppy']]]

document.write (nama[1][1][1]);
document.write('<br>')
var nama= ["yamaha", ['ninja',['mio','z1','scoppy']]]
document.write (nama[1][1][2]+'<br>' + '<hr>');
//child4
var nama= ["yamaha", ['ninja',['mio','z1',['scoppy','vio','Nmax']]]]
document.write (nama[1][1][2][0]+'<br>');

var nama= ["yamaha", ['ninja',['mio','z1',['scoppy','vio','Nmax']]]]
document.write (nama[1][1][2][1]+'<br>');

var nama= ["yamaha", ['ninja',['mio','z1',['scoppy','vio','Nmax']]]]
document.write (nama[1][1][2][2]+'<br> ' + '<hr>');
//child5
var nama= ["yamaha", ['ninja',['mio','z1',['scoppy','vio',['Nmax','pcx','vespa']]]]]
document.write (nama[1][1][2][2][0]+'<br>');

var nama= ["yamaha", ['ninja',['mio','z1',['scoppy','vio',['Nmax','pcx','vespa']]]]]
document.write (nama[1][1][2][2][2]+'<br>');

var nama= ["yamaha", ['ninja',['mio','z1',['scoppy','vio',['Nmax','pcx','vespa']]]]]
document.write (nama[1][1][2][2][1]+'<br>');


