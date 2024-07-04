import { createRef , useState } from 'react'
import {Link} from "react-router-dom";
import axiosClient from "../axios-client.js";
import {useStateContext} from "../context/ContextProvider.jsx";



function 
Login() {

  const emailRef =createRef();
  const passwordRef = createRef()
  const {setUser, setToken} = useStateContext()
  const [errors, setErrors] = useState(null)


  const onSubmit = (ev) =>{
    ev.preventDefault();

    const payLoad = {
      email: emailRef.current.value,
      password: passwordRef.current.value,
    }

    axiosClient.post('/login',payLoad)
    .then(({data}) => {
      setUser(data.user)
      setToken(data.token)
    })
    .catch(err => {
  
      const response = err.response;
      if(response && response.status === 422){
        setErrors(response.data.errors);
        // console.log(response.data.errors);
      }
    });
  }

  return (
    <div className='login-signup-form animated fadeInDown'>
    <div className='form'>
      <form onSubmit={onSubmit}>
      <h1 className="title">Login into your account</h1>

      <input ref={emailRef} type='email' placeholder='Email'/>
      <input ref={passwordRef} type='password' placeholder='Password'/>
      <button className='btn btn-block'>Login</button>
      <p className='message'>
      Not Registered<Link to="/signup">Create An Account</Link>
      </p>
      </form>
    </div>
    </div>
  )
}

export default Login