// for
var n=6;
var s='';

for(i = 1; i < n; i++){
  for(x = 0; x < i; x++){
    s+='*';
  }
  s+='\n';
}
for(j = 0; j < n; j++){
  for(z= n; z > j; z--){
    s+='*';
  }
  s+='\n';
}
console.log(s);
