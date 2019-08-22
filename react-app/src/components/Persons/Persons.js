import React, { Component, PureComponent } from 'react';

import Person from './Person/Person';


class Persons extends Component {



   static getDerivedStateFromProps(props, state){
 console.log('[Person.js] getDerivedStateFromProps')
    
  }
    // shouldComponentUpdate(nextProps, nextState){
    //   console.log('[Persons.js] shouldComponentUpdate')

    //   return true;
    // }

   getSnapshotBeforeUpdate(prevProps, prevState){

    console.log('[Person.js] getSnapshotBeforeUpdate ')

     return{ message: 'Smile'};
   }

  shouldComponentUpdate(nextProps, nextState){

console.log('[Persons.js] shouldComponentUpdate')

return true ;
  }

  componentDidUpdate(prevProps){
    console.log('[Persons.js] componentDidUpdate')
    console.log('[Person.js] PersonUpdateEvent' )
  }
  


componentWillUnmount(){

  console.log("[Persons.js] componentWillUnmount")
}


  render (){


    console.log('[Persons.js] rendering...');
    return this.props.persons.map((person, index) => {
      return (
        <Person
          click={() => this.props.clicked(index)}
          name={person.name}
          age={person.age}
          key={person.id}
          changed={event => this.props.changed(event, person.id)}
      
        />
      );
    });
  };

  }


export default Persons;
