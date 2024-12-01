import { Fragment } from "react/jsx-runtime";
import {useState} from "react";
import './Login.css';

// Images

export default function Login(){

    const [credentials, setCredentials] = useState({username:"", password:""})
    const [loginStatus, setLoginStatus] = useState({});

    function handleLogin(e:React.MouseEvent<HTMLButtonElement>){
        e.preventDefault();
        console.log(JSON.stringify(credentials))
        fetch("http://127.0.0.1:5000/login",{
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(credentials)
            }).then((response)=>{
            if(response.status == 401)
            {
                alert("Invalid Credentials")
            }
            else
            {
                alert("Login Successful")
            }
        })
    }
    return (
        <Fragment>
            <div id="login_container">
                <form>
                    <h2>Login</h2>
                    <input type="text" className="regular_input" placeholder="Username" onChange={(e)=>setCredentials({...credentials,username:e.target.value})}></input>
                    <input type="password" className="regular_input" placeholder="Password" onChange={(e)=>setCredentials({...credentials,password:e.target.value})}></input>
                    <button className="default_button" onClick={(e)=>handleLogin(e)}>Log In</button>
                </form>
            </div>
        </Fragment>
    )
}