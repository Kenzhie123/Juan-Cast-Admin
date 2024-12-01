function login(con,params,callback)
{
    var username = params['username']
    var password = params['password']

    var sql = "SELECT COUNT(*) FROM users WHERE username=? && password = MD5(?)";

    con.query(sql,[username,password],(error,results)=>{
        var response = {};
        if(error == null)
        {
            response['results'] = results;
        }
        else
        {
            response['error'] = error;
        }

        callback(response)
    })
}

module.exports = {login}