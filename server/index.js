const express = require("express");
const session = require("express-session");
const cors = require('cors')
const bodyParser = require("body-parser")
const app = express();
const {con} = require("./connections/mysql_connection.js");


//Database Functions
const {login}  = require("./database_functions/login.js");

app.use(session({
    secret:'zq;C:#jCn9z=ir=vUb7<8HD(}`@v`gBM1pA+p|.3+g]G8B+)T',
    cookie:{maxAge: 30000},
    saveUninitialized:false
}))

app.use(express.json())
app.use(cors())

app.post("/login",(req,res)=>{
    var params = req.body;
    
    login(con,params,(response)=>{
        if(response['error'] == undefined)
        {
            var results = response['results'];
            console.log(results[0]['COUNT(*)'])
            if(results[0]['COUNT(*)'] > 0)
            {
                res.status(200).send({status:"Login Successful"});
            }
            else
            {
                res.status(401).send({status:"Invalid Credentials"});
            }
        }
    })
})



app.listen(5000,()=>{
    console.log(app)
})