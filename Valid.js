import React from "react"




const call = (props) =>{
    let  fielD = "Chars too long"; // if else statement for the text too short/long. Can be done with a turnery expression inside a <div> and 
    // boolean {  this.userInput => 5 ? : with stored JSX in them}

    if (
        props.dul <= 5 ){

            fielD = 'Chars too short'
        }

return (


    

      <div >
  {fielD}
       
        </div>

)

}

export default call;