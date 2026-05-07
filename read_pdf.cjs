const fs = require('fs');
const pdf = require('pdf-parse');

let dataBuffer = fs.readFileSync('pdf/2024 KajieGroup Company profile.pdf');

if (typeof pdf === 'function') {
    pdf(dataBuffer).then(function(data) {
        console.log(data.text);
    });
} else if (pdf.default && typeof pdf.default === 'function') {
    pdf.default(dataBuffer).then(function(data) {
        console.log(data.text);
    });
} else {
    // try to find the parsing function
    const PDFParse = require('pdf-parse/lib/pdf-parse.js');
    PDFParse(dataBuffer).then(function(data) {
        console.log(data.text);
    });
}
