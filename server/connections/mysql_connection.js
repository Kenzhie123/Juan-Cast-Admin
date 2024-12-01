const mysql = require("mysql");

var con = mysql.createConnection({
    host:"localhost",
    user:"root",
    password:"",
    database:"juancast_admin"
})

con.connect((error)=>{
    if(error) {
        console.log(error);
    }
    else
    {
        console.log("Connected")
    }
    
})

module.exports = {con};