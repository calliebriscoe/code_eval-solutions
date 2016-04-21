var fs  = require("fs");
fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if (line !== "") {
        //will split into an array based on ' ' then revers the array and finally rejoin with a space
        var reverseFS = line.split(' ').reverse().join(' ');

        //adds a new line for each of the answers
        console.log(reverseFS);
    }
});
