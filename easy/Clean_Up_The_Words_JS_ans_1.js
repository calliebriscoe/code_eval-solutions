var fs  = require("fs");
fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if (line !== "") {

        //simple function that changes all the uppercase to lowercase
        var lowerCaseLine = line.toLowerCase();

        //removing the special characters and numbers
        var letterOnlyString = lowerCaseLine.replace(/[^a-zA-Z]+/g, " ").replace(/\W+/g, " ");

       //log the changes
       console.log(letterOnlyString);
    }
});
