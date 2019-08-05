import React, { Component } from 'react';
import './App.css';
import Valid from './Validation/Valid';
import Char from './Validation/Char';




class App extends Component {

  state = {

field:''

  }



userInput = (event) =>{
this.setState({field:event.target.value}); // cathces the input 


}

changeFuncHandler = (index) =>{
const text = this.state.field.split(' '); //reach the string
text.splice = (index, 1); //remove 1 possiton from the input array(string)
const updatedText = text.join(' '); //update stored in new varaiable
this.setState({field: updatedText});

// function
//call function
//change
//update
// show/set the new state

}



render () {

  // => is Bind object/function manually in order to play with state or props inside the function and to avoid scope-related issues

  const charList = this.state.field.split('').map((ch,index) => {  

    // const to refer the statete field to 2 new functions -> bind them with new property ch 
    // that return pointer to the object and stores the property in it

    return  <Char  character = {ch} key = {index} 
    clicked = {() => this.changeFuncHandler( index )} //reference from char that returns the click to the index then to func changeFunc
    
    />  //pass the property to to object Char

  });

  return (

    <div>


<br/><br/>


<Valid dul = {this.state.field.length}/> 

<input type = "text" onChange = {this.userInput}></input> 
<br/> 
{charList}
 
</div>


  )
}



}

export default App;
