import { createRequire } from 'module';
import fs from 'fs';

const require = createRequire(import.meta.url);
const pdf = require('pdf-parse');

let dataBuffer = fs.readFileSync('pdf/2024 KajieGroup Company profile.pdf');
pdf.PDFParse(dataBuffer).then(function(data) {
    console.log(data.text);
}).catch(console.error);
