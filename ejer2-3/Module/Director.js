/*
 * Director class 
 */

function director(name,quotes){
    
    // Attributes ************************************************
    
    this.name = name;
    this.quotes = quotes;
    
    //************************************************************

    // Methods ***************************************************
    
    this.getName = function(){
        return this.name;
    }
    
    this.speak = function(){
        return this.quotes[0];
    }
    
    //************************************************************
}

