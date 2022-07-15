function ListVersion(){
 var list = {name: ['bootstrap','php','font awesome'], version: [4.6,'8.0.8','4.6.1']}

for (let i = 0; i < list.name.length; i++) {
	var name = list.name[i];
	var version = list.version[i];
console.log(name +": "+version );
}
}

