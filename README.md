# Codetest

## XAMPP
For the database and website I used xampp locally.
Download and install xampp (https://www.apachefriends.org/xampp-files/7.2.27/xampp-windows-x64-7.2.27-0-VC15-installer.exe)

### Webform
Replace xampp htdocs content with htdocs from this Git.

### Database
Run Apache and MySql.
Open http://localhost/phpmyadmin
Choose import and use the file called prospects.sql from this Git.

### Add prospects
You can now add new users to the database by adding information in
http://localhost/dashboard/

## Maven
To compile, build, test and run the project I used Maven
Create a new maven project and copy the content from codetest into the project.

The final jar with dependencies can be found at codetest/codetest/target/codetest-1.0-jar-with-dependencies.jar

## Run file 
To run the final file simply run java -jar /pathToFile/codetest-1.0-jar-with-dependencies.jar
