import React,  {useEffect , useRef ,useContext } from 'react';

import classes from './Cockpit.css';
import AuthContext from '../../containers/Context/context'


const cockpit= ( props ) => {

  const toggleButton = useRef(); // react hook to use focus marker for dummy component, can be used argument. Need to hook with JSX(DOM)
  //with ref = {} needs to return current as an argument and to be executed in useEffect

 const authContext = useContext(AuthContext); // react hook for dummy <functional> component to import comunication between components this way
 // with a single line and useContext hook // ARGUMENT should be bassed as an object AuthContext , VARIABLE passes to DOM

 // useEffect executes before the render
  useEffect(()=>{

toggleButton.current.click();

    return () => {   // return should return anonymos function

      console.log('[useEffect.js] useEffect Called')
    } 
    //empty array will execute immidiately after the 1st render, if array argument exists even empty '' , it will call back 
    //each time after each render.
  },[]);



    const assignedClasses = [];
    let btnClass = '';
    if (props.showPersons) {
        btnClass = classes.Red;
    }

    if ( props.personsLength <= 2 ) {
      assignedClasses.push( classes.red ); // classes = ['red']
    }
    if ( props.personsLength <= 1 ) {
      assignedClasses.push( classes.bold ); // classes = ['red', 'bold']
    }
    console.log('[Cockpit.js] Cockpit.js');

    return (

     
        <div className={classes.Cockpit}>
            <h1>{props.title}</h1>
            <p className={assignedClasses.join( ' ' )}>This is really working!</p>
            <button ref = {toggleButton}
                className={btnClass}
                onClick={props.clicked}>Hide Seassoning</button>
                
                     <button onClick = {authContext.login}>Buy</button>  
                
                
                
        </div>
    );
};

export default React.memo(cockpit);
// memo rerenders only when the component Cockpit has to be changed, not when app.js or other component is changed. Memo checks for changes