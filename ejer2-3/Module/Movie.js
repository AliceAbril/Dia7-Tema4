/* 
 * Movie Class
 */

define(["./Director"], function(director){
    
    return function movie(){
    
        // Attributes ************************************************

        this.title = " ";
        this.rating = 0;
        this.id = 0;

        this.director;

        //************************************************************

        // Methods ***************************************************

        this.play = function(){

            $("#rec").html('Playing '+ this.title);

            this.change = true;

            this.notifyObservers("playing");
        }

        this.stop = function(){

            $("#rec").html(this.title + ' stopped');

            this.change = true;

            this.notifyObservers("stopped");
        }

        this.setTitle = function(title){
            this.title = title;
        }

        this.getTitle = function(){
            return this.title ;
        }

        this.setRating = function(rating){
            this.rating = rating;
        }

        this.getRating = function(){
            return this.rating;
        }

        this.setId = function(id){
            this.id = id;
        }

        this.getId = function(){
            return this.id;
        }
        
        this.setDirector = function(director){
            this.director = director;
        }
        
        this.getDirector = function(){
            return this.director;
        }
        
        //************************************************************
};
});
