const variableName = require('./demo_db.js')
function generateTable() {
    // creates a <table> element and a <tbody> element
    const tbl = document.createElement("table");

    const tblBody = document.createElement("tbody");
    const column_field = document.createElement("tr");
const paperCode = document.createElement("td");
const subject = document.createElement("td");
const paperCodeText = document.createTextNode("paperCode");
const subjectText = document.createTextNode("Subject");

   paperCode.appendChild(paperCodeText);
   subject.appendChild(subjectText);
   column_field.appendChild(paperCode);
   column_field.appendChild(subject);
    tblBody.appendChild(column_field);
  
    // creating all cells
    for (let i = 0; i < 2; i++) {
      // creates a table row
      const row = document.createElement("tr");
  
      for (let j = 0; j < 2; j++) {
        // Create a <td> element and a text node, make the text
        // node the contents of the <td>, and put the <td> at
        // the end of the table row
        const cell = document.createElement("td");
        const cellText = document.createTextNode(`cell in row ${i}, column ${j}`);
        cell.appendChild(cellText);
        row.appendChild(cell);
      }
  
      // add the row to the end of the table body
      tblBody.appendChild(row);
    }
  
    // put the <tbody> in the <table>
    tbl.appendChild(tblBody);
    // appends <table> into <body>
    document.body.appendChild(tbl);
    // sets the border attribute of tbl to '2'
    tbl.setAttribute("border", "2");
   
  }
  console.log(variableName[1].Subject);
