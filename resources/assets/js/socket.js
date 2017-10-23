import socket from 'socket.io-client';

let pathname = document.location.origin + ':3000';
const io = socket(pathname);

const IO = new Vue();

export default IO;

io.on('variables', data => {
	for(let name in data) {
		if(data.hasOwnProperty(name)) {
			IO.$emit(name, data[name]);
		}
	}
});