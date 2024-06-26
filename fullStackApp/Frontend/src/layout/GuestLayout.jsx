import React from 'react'
import { Navigate, Outlet } from 'react-router-dom'
import { useStateContext } from '../context/ContextProvider'

function GuestLayout() {

  const {token} = useStateContext();

  if(token){
    return <Navigate to="/"/>
  }
  return (
    <div className='login-signup-form animated fadeInDown'>
      <h1>
        This is the guest layout
      </h1>
      <Outlet/>
    </div>
  )
}

export default GuestLayout