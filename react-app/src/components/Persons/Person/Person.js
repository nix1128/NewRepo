import React, { Component } from 'react';

import classes from './Person.css';
import Aux from '../../../containers/hoc/Auxiliary';
import AuthContext from '../../../containers/Context/context';



class Person extends Component { 

  componentDidMount() {
this.inEl.focus();
 
  }

  static contextType = AuthContext; // this is a single line for the authentication context/with no wrapper/ component cariable name should be written
  //exact that way  can be used only in CLASS based component

  render (){

    console.log('[Person.js] rendering...');

    return (
// isAuth gets property from Persons.js and verifies it
  
      <Aux>
       
      <div className={classes.Person}>
      

          {this.context.authenticated ? <p>Both</p> : <p> Buy me!</p>}
          
       
        <p key = "id1" onClick={this.props.click}>

          I'm {this.props.name} 
          {/* and I am {this.props.age} years old! */}
        </p>
        <p key = "id2">{this.props.children}</p>

        <input 
        key ="id3" 
        ref= {(input)=>{this.inEl= input}}
        type="text" 
        onChange={this.props.changed} 
        value={this.props.name} 
        />
      </div>
      
      </Aux>
      
   
    );

  }
  
};

export default Person;
