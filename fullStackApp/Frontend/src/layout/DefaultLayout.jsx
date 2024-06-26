import React from 'react'
import { Link, Navigate, Outlet } from 'react-router-dom'
import { useStateContext } from '../context/ContextProvider'

function DefaultLayout() {
  
  const {user,token} = useStateContext();

  if (!token) {
    return <Navigate to="login"/>
  }

  const onLogout = (ev) =>{
    ev.preventDefault();
    
  }

  return (
    <div id='defaultLayout'>
    <aside>
      <Link to="/dashboard">Dashboard</Link>
      <Link to="/users">Users </Link>
    </aside>
    
    <div>
      <header>
        <div>
          Header
        </div>
        <div>
          {user.name}
          <a href='#' onClick={onLogout} className='btn-logout'>
            Logout
          </a>
        </div>

      </header>
    </div>

    <main>
    <Outlet/>
    </main>
    
    </div>
  )
}

export default DefaultLayout