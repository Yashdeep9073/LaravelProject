import React from 'react'
import {Navigate, createBrowserRouter} from 'react-router-dom'
import Login from './views/Login.jsx';
import Signup from './views/Signup.jsx';
import Users from './views/Users.jsx';
import NotFound from './views/NotFound.jsx';
import DefaultLayout from './layout/DefaultLayout.jsx';
import GuestLayout from './layout/GuestLayout.jsx';
import Dashboard from './views/Dashboard.jsx';

const router = createBrowserRouter([
    {
        path: "/",
        element:<DefaultLayout/>,
        children:[
                {
                    path: "/",
                    element:<Navigate to="/users"/>
                },
                {
                    path: "/users",
                    element:<Users/>
                },
                {
                    path: "/dashboard",
                    element:<Dashboard/>
                },
        ]
    },

    {
        path: "/",
        element:<GuestLayout/>,
        children:[
            {
                path: "/login",
                element:<Login/>
            },
            {
                path: "/signup",
                element:<Signup/>
            },
        ]
    },

    {
        path: "*",
        element:<NotFound/>
    },
]);

export default router;