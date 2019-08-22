import React from 'react';

const withClass = (Wrapperclass, className) =>{

   <div className = {className}>
      <Wrapperclass />
   </div>

};

export default withClass;