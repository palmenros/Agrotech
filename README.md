# Agrotech

This is the main repo for the Agrotech project. 

The Agrotech project is a farm automation project including the following functionality:

- Automatic and remotely controlled lighting
- Temperature controller and statistics
- Detection and automatic handling of garbage collection levels
- Fire alarm
- Automatic feeder

This server contains the Laravel project that serves the main website. There are two other repositories:

- https://github.com/palmenros/AgrotechServer. Contains a NodeJS server that communicates with the Arduino program, the main website and sends emails.
- https://github.com/palmenros/AgrotechArduino. Contains an Arduino program that interacts with the hardware and the NodeJS server.

This project was the first prize winner of the Telefonica STEM Challenge for 2017-2018.
