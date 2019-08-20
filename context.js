import react from 'react';

const authContext = react.createContext( { isAuthenticated: false,

    login : () => {}



}); 



export default authContext;