import React, { Component } from 'react';

import classes from './App.css';
import Persons from '../components/Persons/Persons';
import Cockpit from '../components/Cockpit/Cockpit';

import authContext from '../containers/Context/context';// CONTEXT needs to wrap all the components that need to have access to it

class App extends Component {
  constructor(props) {
    super(props);
    console.log('[App.js] constructor');
  }

  state = {
    persons: [
      { id: 'asfa1', name: 'Kimon',  },
      { id: 'vasdf1', name: 'Salt',},
      { id: 'asdf11', name: 'Sugar',}
    ],
    otherState: 'some other value',
    showPersons: false,
showCockpit: true,
changeCounter:0,
authenticated : false //sets the login authentication to false as default
  };

  // static getDerivedStateFromProps(props, state) {
  //   console.log('[App.js] getDerivedStateFromProps', props);
  //   return state;
  // }

  // componentWillMount() {
  //   console.log('[App.js] componentWillMount');
  // }

  componentDidMount() {
    console.log('[App.js] componentDidMount');
  }

  shouldComponentUpdate(nextProps, nextState){
console.log("[App.js] shouldComponentUpdate")
if(nextProps.persons !== this.props.persons)
{

}
return true;

  }

  componentDidUpdate(){

console.log("[App.js] componentDidUpdate");

  }


  nameChangedHandler = (event, id) => {
    const personIndex = this.state.persons.findIndex(p => {
      return p.id === id;
    
    });
    const person = {
      ...this.state.persons[personIndex]
    };
    // const person = Object.assign({}, this.state.persons[personIndex]);
    person.name = event.target.value;
    const persons = [...this.state.persons];
    persons[personIndex] = person;
    this.setState((prevState)=> {

      return {
        persons: persons, 
        changeCounter:prevState.changeCounter  +1
      }

    }
      
     );
  };

  deletePersonHandler = personIndex => {
    // const persons = this.state.persons.slice();
    const persons = [...this.state.persons];
    persons.splice(personIndex, 1);
    this.setState({ persons: persons });
  };

  togglePersonsHandler = () => {
    const doesShow = this.state.showPersons;
    this.setState({ showPersons: !doesShow });
  };

loginHandler = () => {  // changes the autothentication back to true
  this.setState({login:true});
  
  
}



  render() {

    
    console.log('[App.js] render');

    let persons = null;

    if (this.state.showPersons) {
      persons = (
        <Persons
          persons={this.state.persons}
          clicked={this.deletePersonHandler}
          changed={this.nameChangedHandler}
         
        />
      );
    }

    return (
      
      <div className={classes.App}>
        <button onClick = {()=>{this.setState({showCockpit:false})}}>Remove Menu
        </button>

        <authContext.Provider value = {{authenticated : this.state.login, 
          login:this.loginHandler }}> 
        
        
      { 
      this.state.showCockpit ? 


      <Cockpit
title={this.props.appTitle}
showPersons={this.state.showPersons}
personsLenght = {this.state.persons.length}
clicked={this.togglePersonsHandler}


/>:null

}
       
        {persons}
        <p>{React.version}</p>

        </authContext.Provider>
        
        
      </div>
    );
    // return React.createElement('div', {className: 'App'}, React.createElement('h1', null, 'Does this work now?'));
  }
}

export default App;
