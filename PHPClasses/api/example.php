<?php

/**
 * This class defines an example resource that is wired into the URI /example
 * @uri /example
 */
class ExampleResource extends Tonic\Resource {

    /**
     * @method GET
     */
    function exampleMethod() {
	
	echo "exampleGet";
    
		return new Response(Response::OK, 'Example response');
    }

}


?>