# Quantum Assignment

Quantum networks interview assignment

## Assignment objective

Using the credentials included below, create a simple web based application that has 2 columns (use bootstrap with a `col-lg-6`): 

First column contains a rendering of content inside a MySQL database. The columns are "ASIN", "Title", "MPN", and "Price". This data will populate on page load, as well as refresh when a new ASIN is added to the database (from column 2) so that the data rendered from the database is always current. 

The second column should contain a text input field and a button.
 - The button will make an AJAX request to Amazon's Product Advertising API and return a JSON string with "ASIN", "Title", "MPN", and "Price".
 - The response will be rendered underneath the input field / button. When the content is rendered, there should be an additional button that will insert these values into the database.
 - On click, insert these values into the MySQL db.

 ## Requirements

The application should only be on one page, and have no reloads. The display page MUST end in .html, and PHP should ONLY be used to make the connection to Amazon as well as return the json response. The end result should contain: 
1 Main Application Page (HTML)
1 Class which will contain the function used to call AWS and return the JSON response, as well as a function to insert into the database (PHP)
1 Database with 1 Table (MySQL)
1 Config file (Outlining the credentials for the database and the API)
1 SQL dump of the database containing the information gathered from Amazon

## Credentials

- Amazon Credentials: Associate ID: q0d9b-20
- Access Key: AKIAIOWFZ4KTTJAKNLFQ
- Secret Access Code: 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
- Visual Reference Available @ http://www.quantum-co.com/interview-visual-reference.jpg

Note: this link is broken so I built the web interface in the simplest fashion possible

Please Note - Use an existing web server or set up apache (WAMP / MAMP / XAAMP, etc.) for the assignment, then include a zip with all required files. Please contact if there are any questions.

## Completed app screenshot

![alt text](https://github.com/dmitriyklyuzov/quantum/blob/master/screenshot.png?raw=true "Screenshot")

