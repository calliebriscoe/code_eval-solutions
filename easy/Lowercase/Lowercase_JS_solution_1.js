var fs  = require("fs");
fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if (line !== "") {

        //simple function that changes all the uppercase to lowercase
        var lowerCaseLine = line.toLowerCase();

       //log the changes
       console.log(lowerCaseLine);
    }
});
