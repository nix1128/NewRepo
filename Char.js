
import React from 'react'

const char = (props) => {

    const style = {


    display: 'inline-block',
    padding: '16px',
    textAlign: 'center',
    margin:'auto',
    border: '1px solid black',
    
    
    
    
    }
    

return(


<div  style = {style} > 
<p onClick = {props.clicked}/>
{props.character}

</div>

)

}


export default char;